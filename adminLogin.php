<?php 
    require_once("LoginProcessor.php");
    require_once("CommonInformation.php");
        
    LoginProcessor::prepare();
    LoginProcessor::doTheChecksSessionLib();    
      
      if(isset($_POST["username"]) && isset($_POST["password"])){
           if(!(LoginProcessor::doTheChecks($_POST["username"],$_POST["password"],CommonInformation::$LIBRARIAN_USER))){          
                LoginProcessor::$value="Wrong credentials";         
           }
      }
   
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="stylesheet.css">
	<style type="text/css">
	#textBoxHrz1{
	width: 80%;
	height: 25px;
	margin: 10px auto 0;
	border:1px solid #E0DFE2;
	border-radius: 0px;
	font-family: monospace;
}

    
    #red_colored{
        color:red;
    }
    
	#textBoxHrz2{
	width: 80%;
	height: 25px;
	margin: 0px auto 0; 
	border-radius: 0px;
	border:1px solid #E0DFE2;
	border-top:none;
	font-family: monospace;

}
#LogReg{
	position: absolute;
	top: 90px;
	left: 30px;
	background-color:#6CC7FB; /*#6CC7FB;*/
	color: #Fff;
	border:none;
	border-radius: 0px;
	height: 25px;
	width: 60px;
	font-family: monospace;
}

.head2{

    border-bottom:1px solid #F5F4F1;
	color: #FFF;
	background-color:#2196F3 ; /*#FF605F;*/
	border-radius: 3px 3px 0 0 ;
	height: 50px;
	text-align: center;
	text-transform: capitalize;
	font-size: 15pt;
	font-weight: 600;
	font-family:tahoma;
	line-height: 50px;
	position: relative;
    
}
	</style>
</head>
<body>
	<div class="cont_container">
		<div class="head2">
		<span class="backIcon"><a href="index.php"><img src="arrow.png"/></a></span>
			LIBRARIAN LOGIN
		</div>
		<div class="para_text">
			
		<div>
		<div class="divider_Sec2">
			<form action="adminLogin.php" method="post">
				<input type="text" name="username" placeholder="username" id="textBoxHrz1">
				<br>
				<input type="password" name="password" placeholder="Password" id="textBoxHrz2">
				<br>
				<input type="submit" value="LogIn" name="" id="LogReg">

			</form>
		</div>
		<div class="para_text">
			<span id='red_colored'><?php echo LoginProcessor::$value ?></span></div>
		<div>
	</div>
</body>
</html>
