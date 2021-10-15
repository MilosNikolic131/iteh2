<?php
    class User{
        public $id;
        public $username;
        public $pass;

        public function __construct($id = null,$username = null,$pass = null)
        {
            $this->$id = $id;
            $this->$username = $username;
            $this->$pass = $pass;
        }

        public static function loginUser($username,$pass,mysqli $conn){
                $query = "SELECT * FROM user WHERE username = $username AND password = $pass";
                return true;
        }


    }

?>