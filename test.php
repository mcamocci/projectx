<?php


require_once("Database.php");
require_once("User.php");

$database=new Database();



//the registration part begins here
$user=new User();
//$user->register('1111','Emmanuel','Meena','0719030004',User::$user_student,password_hash('miamia', PASSWORD_DEFAULT),$database);
//$user->register('1010','Denis','Lupiana','0719030005',User::$user_lecturer,password_hash('passdoc', PASSWORD_DEFAULT),$database);











/* echo "<br/>";
 
      $password=password_hash("emmanue", PASSWORD_DEFAULT);
      
      echo $password;
      
      echo "<br/>";
      $value="emmanue";
      
      if(password_verify($value,$password)){
      
            echo "the password matched";
            
      }else{
      
            echo "the password didnot match";
            
      }

*/
/*
$database->borrowABook(1,2);

echo "</br>";
//echo "the books with date ";
echo "</br>";


$database->decreaseBookCount(4);
//$database->increaseBookCount();


*/




/*
function taskempty($id){

    $database=new Database();
    
    foreach($database->getTheThree($id) as $early){        
            echo $early['lastName']." ".$early['date_borrowed']." ".$early['date_return']." ".$early['MINUTES']." ". $early['DATE'];
            echo "<br/>";
    }
}


echo "</br>";

foreach($database->getAllAvaillableBooks() as $value){
			echo "<td>".$value['id']."</td>";
			echo "<td>".$value['title']."</td>";
			echo "<td>".$value['author']."</td>";
			echo "<td><a href='borrow.php?id='".$value['id']."'id='borrow'>Borrow</a></td>";	
			$value['count']<1?taskempty($value['id']):$x=null;		            
	}


*/

//echo date('Y-m-d H:i:s',strtotime(date('Y-m-d H:i:s')."+1 days"));



//echo strtotime(date('Y-m-d H:i:s'))-strtotime(date('Y-m-d H:i:s'));


//$date=date(strtotime('Y-m-d',strtotime('2010-02-20 19:30:13')."+14 days"));

//echo $date;



/*

echo "</br>";

 echo json_encode($database->getAllAvaillableBooks());
 
 


      $status="availlable";
      
      echo $status=="availlable"?"borrow":"Not availlable";
      
      echo "<br/>";
      $password=password_hash("emmanuel", PASSWORD_DEFAULT);
      
      $value="emmanuel";
      
      if(password_verify($value,$password)){
            echo "the password matched";
      }else{
            echo "the password didnot match";
      }
      
*/


?>
