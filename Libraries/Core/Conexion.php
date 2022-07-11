<?php    
    class Conexion{
        private $conect;

        public function __construct()
        {
            $connectionString = "mysql:host=".DB_HOST.";dbname=".DB_NAME.";".DB_CHARSET;
            try {
                $this->conect = new PDO($connectionString,DB_USER,DB_PASSWORD);
                $this->conect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (Exception $e) {
                $this->conect ='Error de conexión';
                echo "ERROR: ".$e->getMessage();
            }
        }
        
        public function getConnect()
        {
            return $this->conect;
        }

        public static function query($sql, $params = [])
        {
            $db = new Conexion();
            $link = (object)$db->getConnect();
            $link->beginTransaction(); // Por cualquier error, chekpoint
            $query = $link->prepare($sql);

            if(!$query->execute($params))
            {
                $link->rollBack();
                $error = $query->errorInfo();
                throw new Exception($error[2]);
            }
            
            
            // SELECT | INSERT | UPDATE | DELETE | ALTER TABLE
            //Manejo del tipo de query
            //SELECT * FROM roles;
            if (strpos($sql, 'SELECT') !== false) {
                return $query->rowCount() > 0 ? $query->fetchAll(PDO::FETCH_ASSOC) : false;
            } elseif(strpos($sql, 'INSERT') !== false)
            {
                $id = $link->lastInsertId();
                $link->commit();
                return $id;
            } elseif(strpos($sql, 'UPDATE') !== false)
            {
                $link->commit();
                return true;
            } elseif(strpos($sql, 'DELETE') !== false)
            {
                if ($query->rowCount() > 0) {
                    $link->commit();
                    return true;
                }

                $link->rollBack();
                return false; //no se borro nada

            } else {
                //Alter table / drop table
                $link->commit();
                return true;
            }
        }
    }

?>