<?php
session_start();
$_SESSION['admin'];
if($_SESSION['admin']==null){
    header("location:admin_login.php?Plaease login first");
}
include 'cons.php';
$sql="select * from stu_feedback";
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
        margin-left: 2%;
         margin-top: 25px;
         border-radius: 5px;
        }
        .navbar li{
            display: inline-block;
        }
        .navbar li a{
            color: black;
            font-weight: bold;
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
     th{
        border: none;
        border-radius:5px;
    
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
<div style="width:1180px;height:480px;  border:2px solid none; border-radius: 7px; margin-left:50px;overflow:srcoll;box-shadow:0px 7px 20px black; background-color:rgba(241, 236, 236, 0.90);">
<center><h1 style="color:green;"><u>Students Feedback</u></h1></center>
<table width=1140 border="0" cellspacing="2" cellpadding="3" style="margin:20px;">
<tr style="color:white;background-color:dodgerblue;">
<th>Student ID</th>
<th>Date</th>
<th>Subject</th>
<th>Message</th>
<th colspan="2">Action</th>


</tr>

<?php 
while($row=mysqli_fetch_assoc($q)){
    $sub=$row['subject'];
    $un=$row['uname'];
   echo "<tr style='background-color: rgba(72, 238, 94, 0.42);'>";
    echo" <th>".$row['uname']."</th>";
    echo" <th>".$row['date']."</th>";
    echo" <th>".$row['subject']."</th>";
    echo" <th>".$row['msg']."</th>";
    echo "<th>"."<a href='feedback_res.php?uname=$un' style='text-decoration: none;'>Responce</a>"."</th>";
    echo "<th>"."<a href='feedback_del.php?subject=$sub' style='text-decoration: none;'>Delete</a>"."</th>";
echo "</tr>";
}
?>

</table>
</div>    
</header>
    
</body>
</html>