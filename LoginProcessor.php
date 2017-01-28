<?php

//require(Database.php);
require_once("CommonInformation.php");
require_once("Database.php");


class LoginProcessor{

    public static $value="";
    
    public static function doTheChecks($username,$password,$userkind){
    
      if($userkind==CommonInformation::$NORMAL_USER){
      
      //this for the normal users , lecturer and students.
      
        if(isset($username) && isset($password)){
        
            //echo $username;
        
             $database=new Database();
             $user=$database->getRow($username);
            
             if($user!=null){
                    if(password_verify($password,$user[0]['password'])){
                        $_SESSION["USER_ID"]=$username;  
	                    header("Location: userIndex.php");
                    }
             }else{
             
             }
          
        }
      
     }else{
     
     //this check is the login user is librarian
     
            if(isset($username) && isset($password)){
             if($username=="lib"){
	          $_SESSION["LIB_ID"]=1;
	          header("Location: librarianIndex.php");
	              
	        }else{
	        
	        }
        }            
     
     }
        return false;
    }
    
    public static function doTheChecksSession(){
        
            if(isset($_SESSION["USER_ID"])){
                header("Location: userIndex.php");
            }else{            
                return false;
            }    
    }
    
    
    public static function logout(){  
        session_unset(); 
        session_destroy();     
    }
    
    
    public static function getUserId(){        
         return $_SESSION['USER_ID'];    
    }
    
    public static function doTheChecksSessionLib(){
        
            if(isset($_SESSION["LIB_ID"])){
                header("Location: librarianIndex.php");
            }else{      
                echo "the session wasnt set";      
                return false;
            }
    
    }
    
    public static function prepare(){
           session_start();
    }

}

?>
