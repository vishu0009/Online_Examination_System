<?php
session_start();
$_SESSION['admin'];
if($_SESSION['admin']==null){
    header("location:admin_login.php?Plaease login first");
}
include 'cons.php';
$sql="select * from quest_paper";
$q=mysqli_query($con,$sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhai+2:wght@800&family=Baloo+Bhaina+2:wght@800&display=swap" rel="stylesheet">
    <style>
        /* CSS RESET  */
        body{
            font-family: 'Baloo Bhai 2', cursive;
            margin: 0px;
            padding: 0px;
            background: url(Images/Student7.jpg);
            background-repeat:no-repeat ;
           background-size: 1550px 800px;  
           font-family: Baloo Bhai;  
           
        }

.input
{
width:400px;
height:35px;
border:2px solid grey;
font-size:16px;
margin-left:50px;
}
        .navbar
        {
         display: inline-block;
         /* border: 3px solid white; */
        margin-left: 2%;
         margin-top: 25px;
         border-radius: 5px;
        }
        .navbar li{
            display: inline-block;
        }
        .navbar li a{
            color: black;
            font-size: 23px;
            padding: 13px 15px;
            text-decoration: none;
        }
        .navbar li a:hover{
           
           color: grey;
           font-size: 23px;
           padding: 13px 15px;
           text-decoration: none; 
       }
     table{
        border-radius: 7px;
     }

    
    </style>
</head>
<body>
    <header>
        <div class="navbar">
        <ul>
        <li><a href="stu_list.php">Student List</a> </li>
        <li><a href="AddQuestion.php">Add Question</a></li>
        <li><a href="UpdateQuestion.php">Update Question</a></li>
        <li> <a href="QuestionList.php">Question List</a></li>
        <li><a href="ExamResult.php">Result</a></li>
        <li><a href="Feedback.php">Feedback</a></li>
        <li><a href="ChangePassword.php">Account</a></li>
        <li><a href="Logout.php">Logout</a></li>
        </ul>
    </div><hr>
<div style="width:550px; background-color:rgba(250, 249, 255, 0.90); margin-left:350px; border-radius: 7px;">
<form method="post">
<table width="500" height="400" border="0">
<b style="font-size:22px; margin-left: 190px; text-decoration: underline;">Questions</b>
<?php
while($row=mysqli_fetch_assoc($q)){
    echo "<tr>";
    $qid=$row['qid'];
    echo "<th>".$row['qid']."</th>";
    echo "<th>".$row['ques']."</th>";
    echo "<th><a href='edit_que.php?qid=$qid' style='font-size: 17px; font-weight: bold; cursor: pointer; text-decoration: none;'>Update </a></th>";
    "</tr>";
}
?>
</table>
</form>
</div>    
</header>
</body>
</html>
