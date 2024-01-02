<?php
$un=$_POST['username'];
$pass=$_POST['password'];
include'cons.php';
$sql="select * from admin where username='$un' and password='$pass'";
$qry=mysqli_query($con,$sql);

if($row=mysqli_fetch_assoc($qry)){
    $db_un=$row['username'];
    $db_pass=$row['password'];
    session_start();
    $_SESSION['admin']=$row['username'];


    if($un==$db_un and $pass==$db_pass){

        header("location:Admin_home.php?Welecome");
    }else{
        header("location:index.php?passward and user name does not match");
    
    }

}
?>