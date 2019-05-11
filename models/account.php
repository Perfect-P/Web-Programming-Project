<?php
    class Account {
        public $username;
        public $passwd;
        function __contruct($_username, $_passwd) {
            $this->username = $_username;
            $this->passwd = $_passwd;
        }

        static function register($username, $passwd){
            $db = DB::getInstance();
            $sqlRegister = "INSERT INTO account(username, passwd) VALUES (:username, :passwd);";
            try{
                $req = $db->prepare($sqlRegister);
                $req->execute(array("username"=>$username, "passwd" => $passwd));
                return array("username"=>$username, "req" => $req);
            }catch (PDOException $e) {
                print $e->getMessage();
                return null;
            }
        }

        static function login($username) {
            $db = DB::getInstance();
            $sqlLogin = "SELECT * FROM account WHERE username = :username";
            try{
                $req = $db ->prepare($sqlLogin);
                $req->execute(array('username' => $username));
                $result = $req->fetch();
                return $result;
            }catch (PDOException $e) {
                print $e->getMessage();
                return null;
            }

        }

    }
?>