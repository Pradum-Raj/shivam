<?php
   echo "<pre>";
   print_r($_POST);
   echo "</pre>";

   $uname=$_POST['user'];
   $sn=$_POST['sname'];
   $course=$_POST['Course'];
   $dob=$_POST['dob'];
   $gen=$_POST['gender'];
   $add=$_POST['addr'];
   $city=$_POST['city'];
   $st=$_POST['state'];
   $pass=$_POST['pswd'];
   $cpass=$_POST['cpswd'];
   $pin=$_POST['pin'];
   $phone=$_POST['contact'];
   $img_name=$_FILES['file']['name'];
   $tmp_name=$_FILES['file']['tmp_name'];
   $folder='UploadImage/'.$img_name;
   move_uploaded_file($tmp_name, $folder);

   include 'conn.php';
   $sql = "insert into reg values('$uname','$sn','$course','$dob','$gen','$add','$city','$st','$pass','$cpass','$pin','$phone','$folder')";
   mysqli_query($con,$sql);
   header('location:index.php?registration successfully');
?>

