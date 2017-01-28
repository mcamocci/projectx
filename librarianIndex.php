<?php

require_once("Database.php");
$database=new Database();


?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="stylesheet.css">
	<style type="text/css">
		body{
			background-color: #E0DBCA;
	}
	.indexcont_container{
	width:450px;
	min-height: 450px;
	margin: 0 auto;
	background-color: #f8f9f9;
	box-shadow: 0 0px 4px 1px rgba(0,0,0,0.1);
	border-radius: 3px;
	position: relative;
	}
	.head{
	border-bottom:1px solid #F5F4F1;
	background-color:#FFF;
	box-shadow: inset 0 0 10px #F5F4F1;
	width: 100%;
	height: 50px;
	line-height: 50px;
	position: relative;
}
.backIcon{
	position: absolute;
	background-color:red;
	width: 30px
	height:30px;
	right: 0px;
	top:0px;
}
img{
	position: absolute;
	top: 5px;
	right: 10px;
	width: 15px;
	height: 15px;
}
.brand{
background-color:;
width: 200px;
height: 40px;
line-height: 40px;
margin: 10vh auto 0px;
text-align: center;
text-transform: capitalize;
	font-size: 13pt;
	font-weight: 600;
	font-family:tahoma;
	color: #adaeab;
}
.navbar{
background-color:;
position:absolute;
width: 260px;
height: 50px;
left: 0px;
}
#textBoxHrz{
	width: 90%;
	height: 25px;
	margin-top: 10px;
	border:1px solid #E0DFE2;
	font-family: monospace;
}
.divider_Sec2{
	background-color: #Fff;
	width: 100%;
	height: 400px;
	overflow-y: auto;
	margin-top: 0px;
	border-radius:0px 0px 3px 3px;
	box-shadow: 0 0px 5px 0px rgba(0,0,0,0.1);
	position: relative;

	}
#bookshelf{
	border:0px solid #ccc;
	border-collapse:collapse;
	width: 95%;
	margin: 15px auto;
	font-family: monospace;
	text-indent: 5px;
	color: #888;
}
#bookshelf tr:first-child{
	border-bottom:1px solid #ccc;
}
#bookshelf td{
	height:16px;
}
#bookshelf tr:hover{
	background-color:  #FCFCEA;
}
#borrow{
	color:#888;text-decoration: none;
}
#borrow:hover{
	color: #69CB75;
}

.parentbox1 {
    width:170px;
    height:35px;
    line-height: 35px;
    background:#DFE2EA;
    box-shadow: inset 0 0 30px #fff;
    color:#737373;
    font-size: 10pt;
    font-family: monospace;
    word-spacing: -5px;
    text-indent: 8px;
    margin:20px 15px 5px;
    border-radius: 4px;
    position: relative;
  }
  .parentbox2 {
    width:170px;
    height:35px;
    line-height: 35px;
    background:#DFE2EA;
    box-shadow: inset 0 0 30px #fff;
    color:#737373;
    font-size: 10pt;
    font-family: monospace;
    word-spacing: -5px;
    text-indent: 8px;
    margin:10px 15px;
    border-radius: 4px;
    position: relative;
    top: 0px;

  }
  .appendedbox1:after,.appendedbox2:after{
  	content: "";
  	position: absolute;
  	right: 5px;
  	top:5px;
  	width: 45px;height: 25px;
  	border-radius:3px;
  	background-color: #Fff;
  }
  .appendedbox1:before,.appendedbox2:before{
   	content: "";
   	position: absolute;
   	border-width: 5px;
   	border-style: solid;
   	border-color: transparent #FFF transparent transparent;
   	right: 50px;
   	top:13px;
  }
  .beige{
  	position: absolute;
  	z-index: 999;
  	right: 15px;
  	color: #FFCD4A ;
  	font-size: 16px;
  }
  #aside_col{
	position:absolute;
	right:0px;
	top: 0;
	width:260px;
	height: 400px;
	background-color: #EFF0F1;
  }
  
  a.not_intended_links{
    color:#737373;
    text-decoration:none;    
  }
  
  a.not_intended_links:hover{
    cursor:pointer;
    color: white;
  }
  
</style>
</head>
<body>
<div class="brand">digital book borrow</div>
	<div class="indexcont_container">
			<div class="head">
		<span class="backIcon"><a href="index.php"><img src="logout.png"/></a></span>
			<span class="brand"></span>
			<span class="navbar">
				<input type="text" name="" placeholder="Title, Author" id="textBoxHrz">
			</span>
		</div>
		<div class="divider_Sec2">

		   <div class="parentbox1 appendedbox1">
              Books borrowed
              <span class="beige"><?php echo $database->getCountAllBorrowedBook(); ?></span>
            </div>
            <div class="parentbox2 appendedbox2">
              Books Available
              <span class="beige"><?php echo $database->getCountAvaillable();?></span>
            </div>
            <div class="parentbox2 appendedbox2">
              All books
              <span class="beige"><?php echo $database->getCountAllBook()?></span>
            </div>
            <div class="parentbox2" style="text-align:center;">
              <a class="not_intended_links" href="manage.php">Manage Books</a>
            </div>
             <div class="parentbox2" style="text-align:center;">
              <a class="not_intended_links" href="requested.php">Approve Borrowed</php>
            </div>
             <div class="parentbox2" style="text-align:center;">
              <a class="not_intended_links" href="return.php">Return Borrowed</a>
            </div>
            <div id="aside_col">

            </div>
		</div>
	</div>
</body>
</html>
