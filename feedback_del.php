<?php
include 'cons.php';
$sub=$_GET['subject'];
$sql="delete from stu_feedback where subject='$sub'";
mysqli_query($con,$sql);
header("location:Feedback.php");
?>