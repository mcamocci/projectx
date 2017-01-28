
<?php 
    
    require_once("Database.php");
    $database=new Database();
    
    if(isset($_GET['id_to_borrow'])){
           $id=$_GET['id_to_borrow'];
       // $database->borrowTheBook($id);  
           
           echo $id;      
    }
    

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="stylesheet.css">
	<style type="text/css">
		body{
			background-color: #DFE2EA;
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
</style>
</head>
<body>
<div class="brand">Users Requested Books</div>
	<div class="indexcont_container">
			<div class="head">
		<span class="backIcon"><a href="librarianIndex.php"><img src="logout.png"/></a></span>
			<span class="brand"></span>
			<span class="navbar">
				<input type="text" name="" placeholder="User id, Book title" id="textBoxHrz">
			</span>
		</div>
		<div class="divider_Sec2">
			<table id="bookshelf">
				<tr>
					<td>#</td>
					<td>Book title</td>
					<td>Author</td>
					<td>Action</td>
				</tr>				
				 <?php				            
				      foreach($database->getAllAvaillableBooks() as $value){
				             echo"<tr>";
				             echo "<td>".$value['id']."</td>";
				             echo "<td>".$value['title']."</td>";
				             echo "<td>".$value['author']."</td>";
				             echo "<td><a  id='borrow' href='requested.php?id_to_borrow=".$value['id']."'>Approve</a></td>";	
				             echo"</tr>";
	                  } 
				  ?>		        	
				
			</table>
		</div>
	</div>
</body>
</html>
