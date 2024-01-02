<?php
include'cons.php';
$em=$_POST['email'];
$pass=$_POST['password'];
$sql="select * from reg where uname='$em' and pass='$pass'";
$qry=mysqli_query($con,$sql);

if($row=mysqli_fetch_assoc($qry)){
    $db_uname=$row['uname'];
    $db_pass=$row['pass'];
    session_start();
    $_SESSION['student']=$row['uname'];


    if($em==$db_uname and $pass==$db_pass){

        header("location:Student_Home.php?Welecome");
    }else{
        header("location:index.php?passward and user name does not match");
    }

}


?>