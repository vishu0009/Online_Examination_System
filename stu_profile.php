<?php

session_start();
$user=$_SESSION['student'];
if($user==null){
    header("location:index.php?Plaease login first");
}
include 'cons.php';
$sql= "select * from reg where uname='$user'";
$q=mysqli_query($con,$sql);
if($row=mysqli_fetch_assoc($q)){
    $s=$row['sname'];
    $c=$row['course'];
    $dob=$row['dob'];
    $gen=$row['gen'];
    $add=$row['addr'];
    $city=$row['city'];
    $st=$row['state'];
    $pin=$row['pin'];
    $mo=$row['phone'];
    $im=$row['image'];
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
           
            color: orange;
            font-size: 23px;
            padding:  60px;
            text-decoration: none; 
        }
        h1{
            text-decoration: underline;
        }
        .main{
            box-shadow: 0 0 20px 2px black;
           

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
    <div class="showprofile" style=" margin-top: 60px;">
    <div class="main" style="border:2px solid none;background-color:#1e272e;color:orange;margin:20px 200px;text-align:left;border-radius:40px;padding:2px 20px;" behavior="alternate" scrollamount="10">
        <h1> <center>Student Profile <?php echo "<span style='color:#34e7e4'>  <span>"; ?> </center></h1>
    
    <table>
     <tr>
    <th style="color: white; padding-left: 200px;">Username/Email: </th> 
    <th style="color: lightgreen; padding-left: 200px;"><?php echo($_SESSION['student']); ?></th>
    </tr>
    <tr>
    <th style="color: white;  padding-left: 200px;">Name: </th>
    <th style="color: lightgreen; padding-left: 200px;"><?php echo $s; ?></th>
    </tr>
    <tr>
    <th style="color: white;  padding-left: 200px;">Course: </th>
    <th style="color: lightgreen; padding-left: 200px;"><?php echo($c); ?></th>
    </tr>
    <tr>
    <th style="color: white;  padding-left: 200px;">Date of Birth: </th>
    <th style="color: lightgreen; padding-left: 200px;"><?php echo($dob); ?></th>
    </tr>
    <tr>
    <th style="color: white;  padding-left: 200px;">Gender: </th>
    <th style="color: lightgreen; padding-left: 200px;"><?php echo($gen); ?></th>
    </tr>
     <tr>
    <th style="color: white;  padding-left: 200px;">Address: </th>
    <th style="color: lightgreen; padding-left: 200px;"><?php echo($add); ?></th>
    </tr>
    <tr>
    <th style="color: white;  padding-left: 200px;">City: </th>
    <th style="color: lightgreen; padding-left: 200px;"><?php echo($city); ?></th>
    </tr>
    <tr>
    <th style="color: white;  padding-left: 200px;">State: </th>
    <th style="color: lightgreen; padding-left: 200px;"><?php echo($st); ?></th>
    </tr>
    <tr>
    <th style="color: white;  padding-left: 200px;">Pin Code: </th>
    <th style="color: lightgreen; padding-left: 200px;"><?php echo($pin); ?></th>
    </tr>
    <tr>
   <th style="color: white;  padding-left: 200px;">Mobile No.: </th>
    <th style="color: lightgreen; padding-left: 200px;"><?php echo($mo); ?></th>
    </tr> 
    <tr>
   <th style="color: white;  padding-left: 200px;">Image: </th>
    <th style="color: lightgreen; padding-left: 200px;"><?php echo"<img src='$im' height=100px; width= 100px;" ?></th>
    </tr>
    

    </table>
    </div>
    
    </div>

</body>
</html>

