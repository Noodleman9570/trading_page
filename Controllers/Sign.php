<?php

    class Sign extends Controllers
    {
        public function __construct()
        {
            // Auth::noAuth();
            parent::__construct();
        }
        public function Sign()
        {
            // Auth::accessPage();

            $data['title'] = "Ingreso al sistema";
            $data['function.js'] = "/sign.js";

            $this->views->getView($this,'sign',$data);
        }

        public function save()
        {

            $data = [];
            
            if ($_SERVER['REQUEST_METHOD'] == "POST") {

                //validar
                    $val = new Validations();
                    $val->name('email')->value(clear($_POST['email']))->required()->pattern('email');
                    $val->name('contraseña')->value(clearPass($_POST['password']))->required()->min(6)->max(20)->pattern('alphanum');
                    $val->name('fecha de nacimiento')->value($_POST['fechaNacimiento'])->required()->dateLimit();
                    $val->name('alias')->value(clear($_POST['alias']))->required();

                    $email = signModel::verifyEmail(clear($_POST['email']));
                    
                    
                    if($val->isSuccess()){
                            if (!$email) {
                                
                                $data = [
                                    'TM_USU_ALI' =>  clear($_POST['alias']),
                                    'TM_USU_EXP' => 1,
                                    'TM_USU_FEC' => $_POST['fechaNacimiento'],
                                    'TM_USU_ACT' => 0.0,
                                    'TM_RAN_COD' => 1,
                                    'TM_ROL_COD' => 1,   
                                    'TM_USU_EMA' => clear($_POST['email']),
                                    'TM_USU_PAS' => clear($_POST['password']),
                                    //arreglar el eliminar espacios de la contraseña
                                ];
                                try {
                                    $idInsert = signModel::insert('COM_TM_USU', $data);
                                    $data = ['status' => true, 'msg'=>'Registro guardado'];
                                } catch (Exception $e) {
                                    echo "ERROR: ".$e->getMessage();
                                }
                            }else {
                                $data = ['error' => 'Este correo ya fue registrado'];
                            }      
                    } else {
                        $data = ['error'=>$val->getErrors()];
                    }      

            }
            echo json_encode($data, JSON_UNESCAPED_UNICODE);
    }

}

?>