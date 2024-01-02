<?php
session_start();
$ad=$_SESSION['admin'];
if($_SESSION['admin']==null){
    header("location:admin_login.php?Plaease login first");
}
 include 'cons.php';
$sql="select * from quest_paper";
$q=mysqli_query($con,$sql);
$sn=1;
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
            padding: 13px 10px;
            text-decoration: none;
        }
        .navbar li a:hover{
           
           color: grey;
           font-size: 23px;
           padding: 13px 15px;
           text-decoration: none; 
       }

       .div{
        width:96%;
        padding: 20px;
        border:2px solid none;
        border-radius: 7px;
        margin-left:auto;
        margin-right:auto;
        margin-top: 50px;
        overflow:auto;
        box-shadow:0px 15px 20px grey;
        background-color: white;
       } 

       a{
        margin: 10px;
        font-size: 16pt;
        color: #0984e3;
        text-decoration: none;
       }

       a:hover{
            color: blue;
            text-decoration: underline;
       } 
       th{
        border-top: 1px solid black;
       }   
     
    </style>
</head>
<body>
    <header>
<title>Student List</title>     
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
<div class="div">
<center><h1 style="color:brown; margin-top: -10px;"><u>Question List</u></h1></center>
<table width="98%" cellspacing="0" cellpadding="3" style="margin-left:auto;margin-right:auto;">
<tr style="color:white;background-color:red;"><th>S.NO</th>
<th>Ques ID</th><th>Question</th><th>Option1</th><th>Option2</th><th>Option3</th><th>Option4</th><th>Answer</th><th colspan="2">Operation</th></tr>
<?php
while($row=mysqli_fetch_assoc($q)){
    echo"<tr style='background-color: rgba(72, 238, 94, 0.42); border: 1px solid black;'>";
    $qid=$row['qid'];
    echo "<th>".$sn."</th>";
    echo "<th>".$row['qid']."</th>";
    echo "<th>".$row['ques']."</th>";
    echo "<th>".$row['op1']."</th>";
    echo "<th>".$row['op2']."</th>";
    echo "<th>".$row['op3']."</th>";
    echo "<th>".$row['op4']."</th>";
    echo "<th>".$row['ans']."</th>";
    echo "<th> <a href='edit_que.php?qid=$qid' >Edit</a> </th>";
    echo "<th> <a href='delete_que.php?qid=$qid'>Delete</a> </th>";
   $sn++;



    "</tr>";

}

?>

</table>

</div>    
</header>
    
</body>
</html>