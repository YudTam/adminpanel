<?php
// session_start();
require "connection.php";
$schoolmail =$_POST['schoolmail'];
$sname=$_POST['sname'];
$schooladdr =$_POST['schooladdr'];
$id=$_POST['id'];
$schoolcontact =$_POST['schoolcontact'];
$schoolstatus =$_POST['schoolstatus'];
$ins_query="UPDATE `school` SET  `sname` = '$sname', `schoolmail` = '$schoolmail', `schooladdr` = '$schooladdr', `schoolcontact` = '$schoolcontact', `schoolstatus` = '$schoolstatus' WHERE `school`.`id` = $id;";
if(mysqli_query($con,$ins_query)) {

    header("Location: schoollist.php");
}
else{
    echo $id;
    //header("location: schoolist.php");
echo "not updated";
}