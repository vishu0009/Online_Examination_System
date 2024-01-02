<?php
session_start();
$user=$_SESSION['student'];
if($_SESSION['student']==null){
    header("location:index.php?Plaease login first");
}
 include 'cons.php';
$sql1="select * from reg where uname='$user'";
$q=mysqli_query($con,$sql1);
while($row=mysqli_fetch_assoc($q)){
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Big+Shoulders+Inline+Text:wght@500&family=Black+Ops+One&family=Bungee+Spice&family=Croissant+One&family=Dancing+Script&family=Lobster&family=PT+Serif&family=Skranji&display=swap" rel="stylesheet">

    <title>Update</title>
    <style>
         body {
            margin: 0px;
            padding: 0px;
            background: url(Images/Student7.jpg);
            background-repeat: no-repeat;
            background-size: 1550px 800px;
            color: white;
            background-color: rgba(0, 0, 0, 0.329);


        }
        .navbar
        {
         display: inline-block;
         border: 3px solid #1e272e;
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
            font-weight: bold;
            padding:  55px;
            text-decoration: none; 
        }
        .navbar li a:hover{
           
            color: grey;
            font-size: 23px;
            padding:  60px;
            text-decoration: none; 
        }
        .container{
            width: 700px;
            height: 690px;
            border: 0 solid none ;
            border-radius: 7px;
            margin-left: 300px;
            background-color:rgba(210, 227, 252, 0.6);
           
        }
        .content{
            color:black;
            font-size: 23px;
            padding-left: 100px;
            
            
        }
        .content input{
            padding: 5px 21px;
            margin: 5px;
            border-radius: 5px;
            width: 44%;
            border-radius: 2px black;
            font-size: 19px;
            padding-top: 10px;
        }
        .content select{
            padding: 5px 20px;
            margin: 5px;
            border-radius: 5px;
            width: 63%;
            border-radius: 4px black;
            font-size: 20px;
            padding-top: 10px;
        }
        
        .btn {
            margin: 5px;
            color: white;
            font-size: 20px;
            padding: 14px 80px;
            border-radius: 20px;
            margin-left: 100px;
            background-color: rgb(255, 166, 0);
          
        }
        h1{
            text-decoration: underline;
            margin-top: -50px;
            color: #000838;
            font-family: 'Big Shoulders Inline Text', cursive;
            font-family: 'Black Ops One', cursive;
            font-family: 'Bungee Spice', cursive;
            font-family: 'Croissant One', cursive;
            font-family: 'Dancing Script', cursive;
            font-family: 'Lobster', cursive;
            font-family: 'PT Serif', serif;
            font-family: 'Skranji', cursive;
        }
        td{
            font-size: 21px;
        }

        
    </style>
</head>
<body>
<header>
        <div class="navbar">
         <ul>
        <li><a href="stu_profile.php"> Profile</a> </li>
        <li><a href="examstart.php">Exam</a></li>
        <li><a href="">Result</a></li>
        <li><a href="">Update Profile</a></li>
        <li><a href="stu_feedback.php">Feedback</a></li>
        <li><a href="stu_logout.php">Logout</a></li>
        </ul>
    </div><hr>
    </header>
<div class="container" style="overflow:auto;padding:50px 0px;">
 <center><h1>Registeration FORM</h1></center>
<form method="post" onsubmit="return validate()" enctype="multipart/form-data">
 <table class="content">
    <tr>
        <td>Select your Image</td>
        <td><input type="file" name="file" Value=" " style="width: 200px;"></td>
        <th></th>
    </tr>
    <tr><td>User Name/E Mail:</td>
        <td>Student Name</td>
    </tr>

    <tr><td><input type="text" id="email" name="user" value="<?php echo $row['uname']  ; ?>"></td>
    <td><input type="text" name="sname" value="<?php echo $row['sname']  ; ?>"></td></tr>

      <tr><td> Qualification</td><td>Date of Birdth</td></tr>

    <tr><td><select  name="Course">
        <option value="BCA"<?php if($row['course']=='BCA'){ echo "selected";} ?>>BCA</option>
        <option value="B.Tech"<?php if($row['course']=='B.Tech'){ echo "selected";} ?>>B.Tech</option>
        <option value="B.COM"<?php if($row['course']=='B.COM'){ echo "selected";} ?>>B.Com</option>
        <option value="BBA"<?php if($row['course']=='BBA'){ echo "selected";} ?>>BBA</option>
        <option value="BSC"<?php if($row['course']=='BSC'){ echo "selected";} ?>>BSC</option>
        <option value="Diploma"<?php if($row['course']=='Diploma'){ echo "selected";} ?>>Diploma</option>
        <option value="MBA"<?php if($row['course']=='MBA'){ echo "selected";} ?>>MBA</option>
        <option value="B.Voc"<?php if($row['course']=='B.Voc'){ echo "selected";} ?>>B.Voc</option></select></td>
        

        <td><input type="date" name="dob" value="<?php echo $row['dob']; ?>"></td></tr>
    <tr><td>Gender:</td><td>Address</td></tr>
       
    <td><input type="radio" name="gender" value="male"<?php if($row['gen']=='male'){ echo "selected";} ?>>Male
        <input type="radio" name="gender" value="female"<?php if($row['gen']=='female'){ echo "selected";} ?>>Female</td>
<td><input type="text" name="addr" value="<?php echo $row['addr']; ?>"></td>
</tr>
    

    <tr><td>City</td><td>State</td></tr>
    <tr><td><input type="text" name="city" value="<?php echo $row['city']; ?>">
    </td><td><select name="state">
        <option value="Andhra Pradesh"<?php if($row['state']=='Andhra Pradesh'){ echo "selected";} ?>>Andhra Pradesh</option>
        <option value="Andaman and Nicobar Islands"<?php if($row['state']=='Andaman and Nicobar Islands'){ echo "selected";} ?>>Andaman and Nicobar Islands</option>
        <option value="Arunachal Pradesh"<?php if($row['state']=='Arunanchal Pradesh'){ echo "selected";} ?>>Arunachal Pradesh</option>
        <option value="Assam"<?php if($row['state']=='Assam'){ echo "selected";} ?>>Assam</option>
        <option value="Bihar"<?php if($row['state']=='Bihar'){ echo "selected";} ?>>Bihar</option>
        <option value="Chandigarh"<?php if($row['state']=='Chandigarh'){ echo "selected";} ?>>Chandigarh</option>
        <option value="Chhattisgarh"<?php if($row['state']=='Chhattisgarh'){ echo "selected";} ?>>Chhattisgarh</option>
        <option value="Dadar and Nagar Haveli"<?php if($row['state']=='Dadar and Nagar Haveli'){ echo "selected";} ?>>Dadar and Nagar Haveli</option>
        <option value="Daman and Diu"<?php if($row['state']=='Daman and Diu'){ echo "selected";} ?>>Daman and Diu</option>
        <option value="Delhi"<?php if($row['state']=='Delhi'){ echo "selected";} ?>>Delhi</option>
        <option value="Lakshadweep"<?php if($row['state']=='Lakshadweep'){ echo "selected";} ?>>Lakshadweep</option>
        <option value="Puducherry"<?php if($row['state']=='Punducherry'){ echo "selected";} ?>>Puducherry</option>
        <option value="Goa"<?php if($row['state']=='Goa'){ echo "selected";} ?>>Goa</option>
        <option value="Gujarat"<?php if($row['state']=='Gujarat'){ echo "selected";} ?>>Gujarat</option>
        <option value="Haryana"<?php if($row['state']=='Haryana'){ echo "selected";} ?>>Haryana</option>
        <option value="Himachal Pradesh"<?php if($row['state']=='Himanchal Pradesh'){ echo "selected";} ?>>Himachal Pradesh</option>
        <option value="Jammu and Kashmir"<?php if($row['state']=='Jammu and Kashmir'){ echo "selected";} ?>>Jammu and Kashmir</option>
        <option value="Jharkhand"<?php if($row['state']=='Jharkhand'){ echo "selected";} ?>>Jharkhand</option>
        <option value="Karnataka"<?php if($row['state']=='Karnataka'){ echo "selected";} ?>>Karnataka</option>
        <option value="Kerala"<?php if($row['state']=='Kerala'){ echo "selected";} ?>>Kerala</option>
        <option value="Madhya Pradesh"<?php if($row['state']=='Madhya Pradesh'){ echo "selected";} ?>>Madhya Pradesh</option>
        <option value="Maharashtra"<?php if($row['state']=='Maharashtra'){ echo "selected";} ?>>Maharashtra</option>
        <option value="Manipur" <?php if($row['state']=='Manipur'){ echo "selected";} ?>>Manipur</option>
        <option value="Meghalaya"<?php if($row['state']=='Meghalaya'){ echo "selected";} ?>>Meghalaya</option>
        <option value="Mizoram"<?php if($row['state']=='Mizoram'){ echo "selected";} ?>>Mizoram</option>
        <option value="Nagaland"<?php if($row['state']=='Nagaland'){ echo "selected";} ?>>Nagaland</option>
        <option value="Odisha"<?php if($row['state']=='Odisha'){ echo "selected";} ?>>Odisha</option>
        <option value="Punjab"<?php if($row['state']=='Panjab'){ echo "selected";} ?>>Punjab</option>
        <option value="Rajasthan"<?php if($row['state']=='Rajasthan'){ echo "selected";} ?>>Rajasthan</option>
        <option value="Sikkim"<?php if($row['state']=='Sikkim'){ echo "selected";} ?>>Sikkim</option>
        <option value="Tamil Nadu"<?php if($row['state']=='Tamil Nadu'){ echo "selected";} ?>>Tamil Nadu</option>
        <option value="Telangana"<?php if($row['state']=='Telangana'){ echo "selected";} ?>>Telangana</option>
        <option value="Tripura"<?php if($row['state']=='Tripura'){ echo "selected";} ?>>Tripura</option>
        <option value="Uttar Pradesh"<?php if($row['state']=='Uttar Pradesh'){ echo "selected";} ?>>Uttar Pradesh</option>
        <option value="Uttarakhand"<?php if($row['state']=='Uttarakhand'){ echo "selected";} ?>>Uttarakhand</option>
        <option value="West Bengal"<?php if($row['state']=='West Bengal'){ echo "selected";} ?>>West Bengal</option>
        </select></td></tr> 

     <tr><td>Password:</td><td>Confirm Password:</td></tr>

    <tr><td><input type="password" id="pass" name="pswd" value="<?php echo $row['pass']  ; ?>">
</td><td><input type="password" id="cpass" name="cpswd" value="<?php echo $row['cpass']  ; ?>"></td></tr>

<td>Pin</td><td>Contact Number</td></tr>

    <tr><td><input type="number" name="pin"value="<?php echo $row['pin']  ; ?>"></td><td>
        <input type="text" name="contact" value="<?php echo $row['phone']  ; ?>"></td></tr>
    
    
</table><hr>
<input type="submit" name="save" value="Update" class="btn" style=" background-color: green;">
<input type="reset" class="btn" style=" background-color: red;">
</form>
<?php
}
?>
</div>
<div>
    <img src="Images/Placement - Copy.png" alt="" style="height: 77px; width: 100%;">
</div>


<script>
    
function validate(){
var pass = document.getElementById("pass").value;
var cpass = document.getElementById("cpass").value;
var email = document.getElementById("email").value;

if(!(pass==cpass)){
alert("Password And Confirm are not Matched");
return false;
}

if(email==""){
alert("Email can not be Blank");
return false;   
}

}

</script>


</body>
</html>


<?php 

if(isset($_POST['save'])){
$sn=$_POST['sname'];
$cou=$_POST['Course'];
$dob=$_POST['dob'];
// $gen=$_POST['gender'];
$ad=$_POST['addr'];
$city=$_POST['city'];
$st=$_POST['state'];
$pin=$_POST['pin'];
$con=$_POST['contact'];
// $img=$_POST['file'];
include "cons.php";
$sql="update reg set sname='$sn', course='$cou', dob='$dob', addr='$ad', city='$city', state='$st', pin='$pin' where uname='$user'";
mysqli_query($con,$sql);
// header('location: stu_profile.php');
}

?>