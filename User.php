<?php


require_once("Database.php");


class User{


        public static $user_student=1;
        public static $user_lecturer=0;
        public function register($id,$firstName,$lastName,$phone,$role,$password,$database){  
            $database->registerUser($id,$firstName,$lastName,$phone,$role,$password);
        }

}





?>
