<?php

    require_once("User.php");
    require_once("Database.php");
    $database=new Database();
    
    if(isset($_POST['firstName']) && isset($_POST['lastName'])
    && isset($_POST['phone'])&& isset($_POST['id'])&& isset($_POST['phone'])&& isset($_POST['password1']) 
    && isset($_POST['password2'])){
            
            $id=$_POST['id'];
            $firstName=$_POST['firstName'];
            $lastName=$_POST['lastName'];
            $phone=$_POST['phone'];
            $pass1=$_POST['password1'];
            $pass2=$_POST['password2'];
            
            
            if($pass1==$pass2){
                $user=new User();
                $user->register($id,$firstName,$lastName,$phone,User::$user_lecturer,password_hash($pass1, PASSWORD_DEFAULT),$database);
            }           
            
    }else{
          //check for the session if exists//
        
    }
    


?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body>
	<div class="cont_container">
		<div class="head">
		<span class="backIcon"><a href="index.php"><img src="arrow.png"/></a></span>
			digital book borrow
		</div>
		<div class="para_text">
			Lecturer Registration 
		<div>
		<div class="divider_Sec2">
			<form action="lecturerRegistration.php" method="post">
				<input type="text" name="firstName" placeholder="First Name" id="textBox1">
				<input type="text" name="lastName" placeholder="Last Name" id="textBox1">
				<br>
				<input type="text" name="id" placeholder="identification number" id="textBoxHrz">
				<br>
				<input type="text" name="phone" placeholder="Phone Number" id="textBoxHrz">
				<br>
				<input type="password" name="password1" placeholder="Password" id="textBox3">
				<input type="password" name="password2" placeholder="Retype Password" id="textBox3">
				<br>
				<span id="logLINK"><a href="userLogin.php">Login</a>, <i style="font-family: none;"><small>if you have account.</small></i></span>
				<input type="submit" value="Register" name="" id="btnReg">

			</form>
		</div>
	</div>
</body>
</html>
