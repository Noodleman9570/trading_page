<?php

    class signModel extends Mysql
    {
        public function __construct()
        {
            parent::__construct();
        }

        public static function verifyEmail($email)
        {
            $res = Mysql::SQL("SELECT * FROM COM_TM_USU where TM_USU_EMA = '$email'");
            return $res;
        }
    }

?>