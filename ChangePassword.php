
<?php
    session_start();
   $admin=$_SESSION['admin'];

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
         /* border: 3px solid white; */
        margin-left: 2%;
         margin-top: 25px;
         border-radius: 5px;
        }
        .navbar li{
            display: inline-block;
        }
        .navbar li a{
            color: white;
            font-size: 23px;
            padding: 13px 15px;
            text-decoration: none;
        }
        .navbar li a:hover{
           
           color: grey;
           font-size: 23px;
           padding: 13px 15px;
           text-decoration: none; 
       }

       .action{
            color: blue;
            background: white;
            padding: 10px;
            border-radius: 5px;
            border: 2px solid blue;
            cursor: pointer;
            font-size: 18px;
            transition: all 0.4s linear;
            padding: 10px 20px;
       }
       .action:hover{
            color: white;
            background: blue;
            box-shadow: 3px 2px 2rem grey;
            border-radius: 15px;
       }
       
     

    
    </style>
</head>
<body>
    <header>
        <div class="navbar">
        <ul>
        <li><a href="StudentList.php">Student List</a> </li>
        <li><a href="AddQuestion.php">Add Question</a></li>
        <li> <a href="QuestionList.php">Question List</a></li>
        <li><a href="ExamResult.php">Result</a></li>
        <li><a href="Feedback.php">Feedback</a></li>
        <li><a href="ChangePassword.php">Account</a></li>
        <li><a href="Logout.php">Logout</a></li>
        </ul>
    </div><hr>
<div style="width:500px;height:400px; background-color:white; border:3px solid grey; margin-left:350px;">
<form  method="post" onsubmit="return checkPass()">
<table width="500" height="350" border="0">
<tr><th style="font-size:22px;"><u>Change Password</u></th></tr>
<tr><td><input type=password name="old" required class="input" placeholder="Enter Old Password" required></td></tr>
<tr><td><input type=password name="newp" id="newpassword" required class="input" placeholder="Enter New Password" required></td></tr>
<tr><td><input type="text" name="confp" id="confirmpassword" required class="input" placeholder="Confirm Password" required></td></tr>
<tr><th>
        <input type="submit" name="submit" value="Update Password" class="action">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type=reset value=Reset class="action">
    </th>
</tr>
</table>
</form>
</div>    
</header>
   
<script>
    function checkPass(){
        var newpassword = document.getElementById("newpassword").value;
        var confirmpassword = document.getElementById("confirmpassword").value;
        if(!(newpassword==confirmpassword)){
            alert("Password And Confirm Password are not Matched");
            return false;
        }
        
    } 
</script>

</body>
</html>

<?php
    if(isset($_POST['submit'])){
        $pass = $_POST['old'];
        $npass = $_POST['newp'];
        $cpass = $_POST['confp'];
        include "conn.php";
        $sql = "select * from admin where username='$admin' and password='$pass' ";
        $qry= mysqli_query($con,$sql);
        if($row=mysqli_fetch_assoc($qry)){
            $db_pass=$row['password'];
            if($pass==$db_pass){
                $sql1="update admin set password='$npass' ";
                mysqli_query($con,$sql1);
            }

        }
    }
?>