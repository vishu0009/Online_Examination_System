<?php

include "cons.php";
$un=$_POST['user'];
$sql1="select * from reg where uname='$un'";
$qry=mysqli_query($con,$sql1);
$user=null;
if($row=mysqli_fetch_assoc($qry)){
    $user=$row['uname'];
}

if($un==$user){
    echo " <script> alert ('username already exist!!')  </script> ";
}
else{

    $un=$_POST['user'];
    $sn=$_POST['sname'];
    $cou=$_POST['Course'];
    $dob=$_POST['dob'];
    $gen=$_POST['gender'];
    $addr=$_POST['addr'];
    $ct=$_POST['city'];
    $st=$_POST['state'];
    $ps=$_POST['pswd'];
    $cps=$_POST['cpswd'];
    $pin=$_POST['pin'];
    $phone=$_POST['contact'];
    $img_name=$_FILES['file'] ['name'];
    $tmp_name=$_FILES['file'] ['tmp_name'];
    $folder= 'upload_img/'.$img_name;
    move_uploaded_file($tmp_name,$folder);
    $sql="insert into reg Values('$un','$sn','$cou','$dob','$gen','$addr','$ct','$st','$ps','$cps','$pin','$phone','$folder')";
    mysqli_query($con,$sql);
   // echo " <script> alert ('data has been inserted') </script> ";
    header('location:http://localhost/Online_Examination_System/index.php?DATA SUBMITTED');
}









?>