<?php

session_start();
$_SESSION['admin'];
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
         border: 3px solid white;
        margin-left: 2%;
         margin-top: 25px;
         border-radius: 5px;
         /* position: fixed; */
        }
        .navbar li{
            display: inline-block;
        }
        .navbar li a{
            color: black;
            font-size: 23px;
            font-weight: bold;
            padding:  30px;
            text-decoration: none; 
        }
        .navbar li a:hover{
           
            color: grey;
            font-size: 23px;
            padding:  40px;
            text-decoration: none; 
        }

        .maininput{
            width:98%;
            height: 30px;
            text-align: left;
            font-size: 15pt;
        }

        .btnclass{
            width: 20%; 
            height: 40px;
            font-size: 16pt;
            border-radius: 10px;
        }

        table{
            margin: 0px auto;
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
    
    <div style="border:2px solid white;background-color:#1e272e;color:white;margin:150px 200px;text-align:left;border-radius:40px;padding:2px 20px;" behavior="alternate" scrollamount="10">
        <h1 style="text-align:center; "><center>Responce Submitted Successfully!!😊</center></h1>

      
        <br><br>
    </div>

</body>
</html>
