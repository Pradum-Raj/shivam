<?php
   include "conn.php";
   session_start();
  $admin=$_SESSION['admin'];
  $qid=$_GET['qid'];
  $sql="select * from question where qid='$qid' ";
 $qry=mysqli_query($con,$sql);

 $sql1 = "delete from question where qid='$qid'";
 mysqli_query($con,$sql1);
 header("location:QuestionList.php? Quistion deleted successfully");
?>