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

        .div1{
            margin: 50px auto;
            border: 3px solid white;
            width: 50%;
            padding: 20px 20px;
            background-color: rgba(149, 165, 166,0.7);
            border-radius: 10px;
        }
        table{
           width: 100%;
           font-size: 16pt;
           background-color: rgba(46, 204, 113,1.0);
           padding: 5px;
           border-radius: 10px;
           box-shadow: 3px 3px 2rem 10px rgba(127, 140, 141,1.0);
        }
        tr:nth-child(odd){
            background-color: rgba(52, 152, 219,1.0);
            color: white;
        }
        tr,td{
            border-radius: 10px;
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
        <li> <a href="">Feedback</a></li>
        <li><a href="">Update Profile</a></li>
        <li><a href="stu_feedback.php">Feedback</a></li>
        <li><a href="stu_logout.php">Logout</a></li>
        </ul>
    </div><hr>
    </header>
    

    <h1 style='color:white;text-align:center;margin:150px auto;background-color:#d63031;padding:50px 0px;width:80%;border-radius:20px;border:3px solid white'> To Show Result Please Give Exam </h1>";     


      
</body>
</html>