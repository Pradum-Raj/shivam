<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Profile</title>
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

        .showprofile{
            border:2px solid white;
            background-color:#1e272e;
            color:white;
            margin:20px 50px;
            text-align:center;
            border-radius:25px;
            padding:20px 50px;
            box-shadow: 5px 5px 1rem  lightgray inset;
        }

        th{
            color: white;
            font-size: 16pt;
            text-align: left;
            padding: 5px;
        }
        table{
            margin: 0px auto;
            width: 70%;
            border: 3px solid red;
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
       <!-- <li><a href="stu_logout.php">Logout</a></li>-->
        </ul>
    </div><hr>
    </header>

    <?php
   session_start();
   $em = $_SESSION['user'];
   include 'conn.php';
   $sql = "select * from reg where uname='$em' ";
   $qry = mysqli_query($con,$sql);
   while($row=mysqli_fetch_assoc($qry)){
        $sname = $row['sname'];
        $dob = $row['dob'];
        $add = $row['address'];
        $city = $row['city'];
        $gen = $row['gen'];
        $st = $row['state'];
        $pin = $row['pin'];
        $phone = $row['phone'];
        $img = $row['img'];
        $cr = $row['course'];

   }
    ?>

    
    <div class="showprofile">
        <h2>STUDENT PROFILE</h2>
        <table>
            <tr>
                <th>User Name</th>
                <th><?php echo $em?></th>
            </tr>
            <tr>
                <th>Name</th>
                <th><?php echo $sname?></th>
            </tr>
            <tr>
                <th>Course</th>
                <th><?php echo $cr?></th>
            </tr>
            <tr>
                <th>Gender</th>
                <th><?php echo $gen?></th>
            </tr>
            <tr>
                <th>Address</th>
                <th><?php echo $add?></th>
            </tr>
            <tr>
                <th>City</th>
                <th><?php echo $city?></th>
            </tr>

            <tr>
                <th>State</th>
                <th><?php echo $st?></th>
            </tr>

            <tr>
                <th>Phone</th>
                <th><?php echo $phone?></th>
            </tr>

            <tr>
                <th>Pincode</th>
                <th><?php echo $pin?></th>
            </tr>

            <tr>
                <th>Image</th>
              <th><?php echo "<img src='$img'  width='100' height='100' " ?> > </th>
            </tr>
        </table>
       

    </div>

</body>
</html>