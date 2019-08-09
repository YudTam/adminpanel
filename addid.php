<?php
require 'connection.php';

$id=$_POST["school_id"];
$pass=$_POST["schoolpass"];
// $sql = "INSERT INTO `school_setup` (`school_id`, `schoolpass`, `moduleid`) VALUES ('$id', '$pass', '')";
$sql="INSERT INTO `school` (`id`, `name`, `schoolpass`, `schoolcontact`, `schoolmail`, `schooladdr`, `schoolprincipal`, `schoolregdate`, `schoolstatus`, `license_duration`)
 VALUES ('$id', '', '$pass', '', '', '', '', '', '', NULL)";
 if (mysqli_query($con,$sql)){
     //echo "data inserted";
     header("Location: schoollist.php");
}

?>