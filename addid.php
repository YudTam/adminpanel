<?php
require 'connection.php';

$id=$_POST["school_id"];
$pass=$_POST["schoolpass"];
$name=$_POST["name"];
$email=$_POST["schoolmail"];
$phone=$_POST["schoolcontact"];
$address=$_POST["schooladdr"];
$principal=$_POST["schoolprincipal"];
$date=$_POST["schoolregdate"];
$status=$_POST["schoolstatus"];
$duration=$_POST["license_duration"];
// $sql = "INSERT INTO `school_setup` (`school_id`, `schoolpass`, `moduleid`) VALUES ('$id', '$pass', '')";
$sql="INSERT INTO `school` (`id`, `name`, `schoolpass`, `schoolcontact`, `schoolmail`, `schooladdr`, `schoolprincipal`, `schoolregdate`, `schoolstatus`, `license_duration`)
 VALUES ('$id', '$name', '$pass', '$phone', '$email', '$address', '$principal', '$date', '$status', '$duration')";
 if (mysqli_query($con,$sql)){
     //echo "data inserted";
     header("Location: createschool.php");
}

?>