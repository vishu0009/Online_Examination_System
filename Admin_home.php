<?php
session_start();
    $ad=$_SESSION['admin'];
    if($_SESSION['admin']==null){
        header("location:admin_login.php?Plaease login first");
    }
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
            color: #1e272e;
            font-size: 23px;
            padding: 13px 15px;
            text-decoration: none;
            font-weight: bold;
        }
        .navbar li a:hover{
           
           color: grey;
           font-size: 23px;
           padding: 13px 15px;
           text-decoration: none; 
       }
     

    
    </style>
</head>
<body>
    <header>
        <div class="navbar">
        <ul>
        <li><a href="stu_list.php">Student List</a> </li>
        <li><a href="AddQuestion.php">Add Question</a></li>
        <li> <a href="QuestionList.php">Question List</a></li>
        <li><a href="ExamResult.php">Result</a></li>
        <li><a href="Feedback.php">Feedback</a></li>
        <li><a href="ChangePassword.php">Account</a></li>
        <li><a href="admin_logout.php">Logout</a></li>
        </ul>
    </div><hr>
    </header>

    <h1 style="padding:15px 200px;border:2px solid white;background-color:lightgray;color:black;margin:20px 200px;text-align:center;border-radius:40px">  Welecome  <br><?php echo $ad; ?></h1>
    
</body>
</html>