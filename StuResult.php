<?php
session_start();
$stu=$_SESSION['student'];
include 'cons.php';
$sql="select course,sname from reg where uname='$stu'";
$q=mysqli_query($con,$sql);
while($row=mysqli_fetch_assoc($q)){
    $sub=$row['course'];
    $sname=$row['sname'];
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


       .div{
        width:95%;
        padding: 20px;
        border:2px solid grey;
        overflow:auto;
        border-radius: 30px;
        box-shadow:0px 0px 1rem 1rem grey inset; 
        background-color:lightgrey;
        border: 5px solid grey;
        margin-left: auto;
        margin-right: auto;
        margin-top: 100px;
       }

       table{
        margin-left: auto;
        margin-right: auto;
       }

       th{
        border-radius:5px;
        padding: 10px;
        background-color: rgba(15, 186, 52, 0.82);
        color: black;
        border: none;
       }
       
       a{
        color: black;
        text-decoration: none;
        transition: all 0.2s linear;
       }
       a:hover{
        color: white;
        text-decoration: underline;
       }
     

    
    </style>
</head>
<body>
    <header>
<title>Result</title>     
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
<div class="div">
<center><h1 style="color:orange;">Result of <?php echo $stu;?></h1></center>
<table width="95%" border="0" cellspacing="5" cellpadding="5">
<tr style="color:white !important; background-color: red;">
<th style="color:white !important;background-color:dodgerblue !important;">Email/User</th>
<th style="color:white !important;background-color:dodgerblue !important;">Student Name</th>
<th style="color:white !important;background-color:dodgerblue !important;">Subject</th>
<th style="color:white !important;background-color:dodgerblue !important;">MM</th>
<th style="color:white !important;background-color:dodgerblue !important;">OB</th>
<th style="color:white !important;background-color:dodgerblue !important;">Date</th>
</tr>
<tr>
    <?php
$sql1="select * from result where sid='$stu'";
$q1=mysqli_query($con,$sql1);
while($row1=mysqli_fetch_assoc($q1)){
    $sid=$row1['sid'];
    $mm=$row1['mm'];
    $ob=$row1['ob'];
    $date=$row1['date'];
}

?>
<th><?php echo $sid;?> </th>
<th><?php echo $sname;?> </th>
<th><?php echo $sub;?> </th>
<th><?php echo $mm;?> </th>
<th><?php echo $ob;?> </th>
<th><?php echo $date;?> </th>

    </tr>


</table>
</div>    
</header>
    
</body>
</html>

