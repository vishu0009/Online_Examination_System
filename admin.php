
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Big+Shoulders+Inline+Text:wght@500&family=Bungee+Spice&family=Croissant+One&family=Dancing+Script&family=Lobster&family=PT+Serif&family=Skranji&display=swap" rel="stylesheet">

     <style>
        *{
            margin: 0;
        }
            .con{
                border: 1px solid none;
                height: 450px;
                width: 400px;
                margin: 50px 400px;
                border-radius: 7px;
                box-shadow: 5px 5px 20px 2px black;
                background-color: lightblue;
            }
            .img{
                height: 150px;
                width: 150px;
                border: 1px solid none;
                border-radius: 50%;
                margin-left: 127px;
                margin-top: 27px;
            
            }
            input{
                height: 35px;
                width: 200px;
                border-radius: 5px;
                margin-left: -30px;
                border: none;
                box-shadow: 0px 0 7px 1px black;
            }
            h1{
                font-family: 'Big Shoulders Inline Text', cursive;
                font-family: 'Bungee Spice', cursive;
                font-family: 'Croissant One', cursive;
                font-family: 'Dancing Script', cursive;
                font-family: 'Lobster', cursive;
                font-family: 'PT Serif', serif;
                font-family: 'Skranji', cursive                ;
            }
            /* body{
                background-color: lightgray;
            } */
        </style>

</head>
<body>
    <div class="con">
        <form action="admin_login.php" method="post">
      <h1><center>Admin Login </center></h1>
      <div class="img">
      <img src="ad.png" style="height:150px; width: 150px;">  
      <div><br>
        <input type="text" name="username" required placeholder="Enter Username"><br><br>
        <input type="password" name="password" required placeholder="Enter Password"><br><br><br><br>

        <input type="submit" name="submit" value="Log in" style="height: 50px; width: 77px; color:white; background-color: green; margin-left: 30px; cursor: pointer; font-size: 17px; font-weight: bold;">
        </form>
</div>
</body>
</html>
