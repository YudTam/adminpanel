<?php
require 'connection.php';

$id=$_POST["school_id"];
$sql = "INSERT INTO `school_setup` (`school_id`, `schoolpass`, `moduleid`) VALUES ('$id', '', '')";

if (mysqli_query($con,$sql)){
     //echo "data inserted";
     header("Location: schoollist.php");
}

?>