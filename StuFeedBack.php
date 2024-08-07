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
        margin-left: 5%;
         margin-top: 25px;
         /* position: fixed; */
        }
        .navbar li{
            display: inline-block;
        }
        .navbar li a{
            color: white;
            font-size: 23px;
            padding:  60px;
            text-decoration: none; 
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
        <li><a href="StuProfile.php"> Profile</a> </li>
        <li><a href="examstart.php">Exam</a></li>
        <li><a href="StuResult.php">Result</a></li>
        <li> <a href="StuFeedBack.php">Feedback</a></li>
        <li><a href="Logout.php">Logout</a></li>
        </ul>
    </div><hr>
    
<div style="width:500px;height:400px; background-color:white; border:3px solid grey; margin-left:350px;">
<form action="#">
<table width="500" height="400" border="0">
<tr><th style="font-size:22px;"><u>Student Feedback</u></th></tr>
<tr><td><input type=text name=sub class="input" placeholder="Enter Subject" required></td></tr>
<tr><td><textarea name=msg class="input" style="height:200px;" placeholder="Enter Message" required></textarea></td></tr>
<tr><th><input type=submit value=Submit><input type=reset value=Reset></th></tr>
</table>
</form>
</div>    

</header>

</body>
</html>
