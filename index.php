<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Exam</title>
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhaina+2:wght@800&display=swap" rel="stylesheet">
    <!-- CSS only -->
    <style>
        body {
            margin: 0px;
            padding: 0px;
            background: url(Images/Student7.jpg);
            background-repeat: no-repeat;
            background-size: 1550px 800px;
            color: white;
            font-family: 'Baloo Bhaina 2', cursive;
            background-color: rgba(0, 0, 0, 0.329);
            overflow: hidden;


        }

        .navbar {
            display: inline-block;
            /* border: 3px solid white; */
            margin-left: 25%;
            margin-top: 25px;
            border-radius: 5px;
           


        }

        .navbar li {
            display: inline-block;
        }

        .navbar li a {
            color: white;
            font-size: 23px;
            padding: 33px 50px;
            text-decoration: none;
        }

        .navbar li a:hover {

            color: rgb(97, 7, 7);
            font-size: 23px;
            padding: 0px 50px;
            text-decoration: none;
            border-bottom: 2px solid orange;
        }

        .container {
            background: rgba(255,255,255,0.6);
            box-shadow: 0 26px 42px rgba(0, 0, 0, 0.9);
            margin-top: 66px;
            padding: 26px 28px;
            /* border: 3px solid orange; */
            border-radius: 37px;
            width: 28%;
            margin-left: 5%;
            display: inline-block;

        }




        .container input {
            padding: 7px 20px;
            margin: 5px;
            border-radius: 20px;
            width: 54%;
            border-radius: 2px black;
            font-size: 20px;
            

        }

        .btn {
            margin: 5px;
            color: white;
            font-size: 20px;
            padding: 15px 60px;
            border-radius: 20px;
            margin-left: 22%;
            background-color: rgb(255, 166, 0);
            border: none;
          
        }

        .box {
            /* border: 2px solid white; */
            width: 850px;
            height: 350px;
            /* background-color: white; */
            margin-right: 100px;
            margin-top: 50px;
            padding: 22px 22px;
            display: inline-block;
            float: right;
            font-size: 20px;
            color: white;
            /* box-shadow: 12px 12px 30px 30px rgba(0, 0, 0, 0.233) ; */
            /* z-index: 2; */
            /* transform: translate(-50%, -50%); */
            /* background-color: rgba(0, 0, 0, 0.151); */
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }
        .btn2{
            margin: 5px;
            color: white;
            font-size: 20px;
            padding: 15px 60px;
            border-radius: 20px;
            margin-left: 22%;
            background-color: rgb(255, 166, 0);
            margin-top: 50px;
            margin-left: 280px;
        }
        .btn2 a{
            text-decoration: none;
            color:white
        }
     
    </style>
</head>

<body>
</body>
<header style=" background-color: rgb(0,0,0); /* Fallback color */
background-color: rgba(0, 0, 0, 0.26);">
    <div class="navbar">
        <ul>
            <li><a href="index.php"> Home</a> </li>
            <li> <a href="course.php">Courses</a></li>
            <li><a href="Registeration.php">Registeration</a></li>
            <li><a href="Contact.php">Contact Us</a></li>
        </ul>
    </div>

</header>
<div style=" background-color: rgba(0, 0, 0, 0.137); height:700px">
    <form action="user_login.php" method="post">
        <div class="container">
            <input type="text" name="email" required placeholder="Enter Your Email"><br>
            <input type="password" name="password" required placeholder="Enter Password"><br>
            <input type="submit" name="submit" class="btn" value="Login" style="display:inline-block;width:100px;text-align:center;padding:15px 20px; margin-left:50px;">
            <input type="reset" class="btn" value="Clear" style="display:inline-block;width:100px;text-align:center;padding:15px 30px; ">
        </div>
    </form>
    <div class="box">
       
        <center>
            <h2 style="color: YELLOW;">Welcom To SSD Online Classes</h2>
        </center>
      <p style="font-size: 25px; line-height: 40px;">
        Free online test to practice for Competitive exams. Aptitude, Logical Reasoning, Computer Questions will help you to prepare for
         Online Exam, Entrance and Interview. Learn and Practice online test for Free and 
        Prepare for your exam online with many free tests and study materials with answers and explanation.
      </p>
      <button class="btn2"><a href="Registeration.php">  Register Now</a></button>
    </div>
</div>
<div style="background-color: white;">
    <img style="margin-left: 3%;" src="Images/Placement.png" alt="">
</div>
<div>
    <img src="Images/Placement - Copy.png" alt="">
</div>

</html>