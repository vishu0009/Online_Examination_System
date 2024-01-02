<?php

session_start();
$stu=$_SESSION['student'];
if($_SESSION['student']==null){
    header("location:index.php?Plaease login first");
}

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Big+Shoulders+Inline+Text:wght@500&family=Bungee+Spice&family=Dancing+Script&family=PT+Serif&family=Skranji&display=swap" rel="stylesheet">

    <style>
        /* CSS RESET  */
        body{
            margin: 0px;
            padding: 0px;
            background: url(Images/Student7.jpg);
            background-repeat:no-repeat ;
           background-size: 1550px 800px;
           
             
           
        }
        .navbar
        {
         display: inline-block;
         border: 3px solid #1e272e;
        margin-left: 2%;
         margin-top: 25px;
         border-radius: 5px;
         /* position: fixed; */
        }
        .navbar li{
            display: inline-block;
        }
        .navbar li a{
            color: #1e272e;
            font-size: 23px;
            padding:  52px;
            text-decoration: none;
            font-family: 'Big Shoulders Inline Text', cursive;
            font-family: 'Bungee Spice', cursive;
            font-family: 'Dancing Script', cursive;
            font-family: 'PT Serif', serif;
            font-family: 'Skranji', cursive; 
        }
        .navbar li a:hover{
           
            color: grey;
            font-size: 23px;
            padding:  60px;
            text-decoration: none; 
        }

    
    </style>
</head>
<body>
    <header>
        <div class="navbar">
        <ul>
        <li><a href="stu_profile.php"> Profile</a> </li>
        <li><a href="examstart.php">Exam</a></li>
        <li><a href="StuResult.php">Result</a></li>
        <li><a href="update_profile.php">Update Profile</a></li>
        <li><a href="stu_feedback.php">Feedback</a></li>
        <li><a href="stu_logout.php">Logout</a></li>
        </ul>
    </div><hr>
    </header>
    
    <marquee style="border:2px solid white;background-color:#1e272e;color:orange;margin:20px 200px;text-align:left;border-radius:40px;padding:2px 20px;" behavior="alternate" scrollamount="10">
        <h1 >Welcome <?php echo($_SESSION['student']); ?><?php echo "<span style='color:#34e7e4'>  <span>"; ?></h1>
    </marquee>

</body>
</html>