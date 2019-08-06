<?php
$db_host="localhost";
$db_user="root";
$db_password="";
$db_name="elearning";

$con=mysqli_connect($db_host,$db_user,$db_password,$db_name);
if($con){
	//echo "connected success...";
	
}
else{
   echo "can not connected success...";
}


?>