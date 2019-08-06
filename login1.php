<?php

require "connection.php";
$id=$_POST['id'];
$password=$_POST['password'];
$sql="SELECT adminid, adminpass FROM admin WHERE adminid='$id' and adminpass='$password'; ";
$result=mysqli_query($con,$sql);
if (mysqli_num_rows($result)==0){

echo "wrong user id or password";
}
else{
    $row=mysqli_fetch_assoc($result);
    $tem_id=$id['id'];
    $tem_password=$row['password'];
    //$temp_type=$row['type'];


    session_start();

    $_SESSION["loginid"]=$tem_id;
    setcookie('elearning_id',$tem_id,time()+3600,'/');

    header("Location: index.html");
 




}



?>