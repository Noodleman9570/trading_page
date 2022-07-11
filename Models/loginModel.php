<?php

    class loginModel extends Mysql
    {
        public function __construct()
        {
            parent::__construct();
        }
        public static function login(string $email, string $pass)
        {
            $sql = "SELECT * FROM COM_TM_USU WHERE TM_USU_EMA = :email AND TM_USU_PAS = :password LIMIT 1";
            return ($rows = parent::query($sql,['email'=>$email, 'password'=>$pass])) ? $rows[0] : [];
        }
    }

?>