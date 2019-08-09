<?php

require "connection.php";
$id=$_POST['id'];
$password=$_POST['password'];
$sql="SELECT adminid, adminpass FROM admin WHERE adminid='$id' and adminpass='$password'; ";
$result=mysqli_query($con,$sql);
$sql2="SELECT id, schoolpass FROM school WHERE id='$id' and schoolpass='$password';";
$result2=mysqli_query($con,$sql2);
if (mysqli_num_rows($result)==0){

    if(mysqli_num_rows($result2)==0){
   


    }
    else{
        $row=mysqli_fetch_assoc($result);
        $tem_id=$id['id'];
        $tem_password=$row['password'];
        //$temp_type=$row['type'];
    
    
        session_start();
    
        $_SESSION["loginid"]=$tem_id;
        setcookie('elearning_id',$tem_id,time()+3600,'/');
    
        header("Location: schooldash.php");

    }
}
else{
    $row=mysqli_fetch_assoc($result);
    $tem_id=$id['id'];
    $tem_password=$row['password'];
    //$temp_type=$row['type'];


    session_start();

    $_SESSION["loginid"]=$tem_id;
    setcookie('elearning_id',$tem_id,time()+3600,'/');

    header("Location: index.php");
 }


// $sid=$_POST['id'];
// $password=$_POST['password'];
// $sql2="SELECT id, schoolpass FROM school WHERE id='$id' and schoolpass='$password';"



?>