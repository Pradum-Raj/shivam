
<?php
  session_start();
  $em = $_SESSION['user'];
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
        <li><a href="stu_profile.php"> Profile</a> </li>
        <li><a href="examstart.php">Exam</a></li>
        <li><a href="">Result</a></li>
        <li> <a href="">Feedback</a></li>
        <li><a href="">Update Profile</a></li>
        <li><a href="stu_feedback.php">Feedback</a></li>
        <li><a href="stu_logout.php">Logout</a></li>
        </ul>
    </div><hr>
    </header>
    
    <div style="border:2px solid white;background-color:#1e272e;color:white;margin:20px 200px;text-align:left;border-radius:40px;padding:2px 20px;" behavior="alternate" scrollamount="10">
        <h1 style="text-align:center">Give Your Feedback</h1>

        <form  method="post">
            <table width="60%" cellpadding="5" cellspacing="0">
                <tr>
                    <th>Enter Your Subject</th>
                    <th><input type="text" name="subject" class="maininput"></th>
                </tr>

                <tr>
                    <th>Enter Your Message</th>
                    <th><input type="text" name="message" class="maininput"></th>
                </tr>

                <tr>
                    <th colspan="2">
                        <input type="submit" name="submit" class="btnclass">
                        <input type="reset" class="btnclass">
                    </th>
                    
                </tr>

                

            </table>
        </form>
        <br><br>
    </div>

</body>
</html>

<?php
    if(isset($_POST['submit'])){
        $msg = $_POST['message'];
        $sub = $_POST['subject'];
        $d= date('d/m/y');
        include "conn.php";
        $sql = "insert into stu_feedback values('$em','$sub','$msg','$d')";
        mysqli_query($con,$sql);
    }
?>