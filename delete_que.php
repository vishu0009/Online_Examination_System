<?php
$qid=$_GET['qid'];
include 'cons.php';
$sql="delete from`quest_paper` where qid='$qid'";
mysqli_query($con,$sql);
header("location: QuestionList.php");

?>