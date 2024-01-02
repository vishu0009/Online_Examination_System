<?php
session_start();
$stu=$_SESSION['student'];
if($_SESSION['student']==null){
    header("location:index.php?Plaease login first");
}
include 'cons.php';
$ans[1]="not Submitted"; 
$qid[1]=$_REQUEST['qid1'];
$ans[2]="not Submitted";
$qid[2]=$_REQUEST['qid2'];
$ans[3]="not Submitted"; 
$qid[3]=$_REQUEST['qid3'];
$ans[4]="not Submitted";
$qid[4]=$_REQUEST['qid4'];
$ans[5]="not Submitted";
$qid[5]=$_REQUEST['qid5'];
$ans[6]="not Submitted";
$qid[6]=$_REQUEST['qid6'];
if(isset($_REQUEST['qid1'])){
    $ans[1]=$_REQUEST['ans1'];
}
if(isset($_REQUEST['qid2'])){
    $ans[2]=$_REQUEST['ans2'];
}
if(isset($_REQUEST['qid3'])){
    $ans[3]=$_REQUEST['ans3'];
}
if(isset($_REQUEST['qid4'])){
    $ans[4]=$_REQUEST['ans4'];
}
if(isset($_REQUEST['qid5'])){
    $ans[5]=$_REQUEST['ans5'];
}
if(isset($_REQUEST['qid6'])){
    $ans[6]=$_REQUEST['ans6'];
}
$d=date('y-m-d');
for($i=1; $i<=6; $i++){
    $sql="insert into quest_master values('$stu','$qid[$i]','$ans[$i]')";
    mysqli_query($con,$sql);
}
$sql1="select quest_master.qid from quest_master ,quest_paper where quest_master.qid=quest_paper.qid and quest_master.ans=quest_paper.ans and quest_master.sid='$stu'";
$q1=mysqli_query($con,$sql1);
$marks=null;
while($row1=mysqli_fetch_array($q1)){
    $marks=$marks+5;
}
$sql2="insert into result values('$stu','30','$marks','$d')";
mysqli_query($con,$sql2);
?>