<?php
  session_start();
  $stu=$_SESSION['user'];
  include "conn.php";
  $ans[1]="not submitted";
  $qidp[1]=$_REQUEST['qid1'];
  $ans[2]="not submitted";
  $qidp[2]=$_REQUEST['qid2'];
  $ans[3]="not submitted";
  $qidp[3]=$_REQUEST['qid3'];
  $ans[4]="not submitted";
  $qidp[4]=$_REQUEST['qid4'];
  $ans[5]="not submitted";
  $qidp[5]=$_REQUEST['qid5'];

  if(isset($_REQUEST['ans1'])){
    $ans[1]=$_REQUEST['ans1'];
  }

  if(isset($_REQUEST['ans2'])){
    $ans[2]=$_REQUEST['ans2'];
  }
  
  if(isset($_REQUEST['ans3'])){
    $ans[3]=$_REQUEST['ans3'];
  }
  
  if(isset($_REQUEST['ans4'])){
    $ans[4]=$_REQUEST['ans4'];
  }
  
  if(isset($_REQUEST['ans5'])){
    $ans[5]=$_REQUEST['ans5'];
  }
  
   $d=date('d/m/y');
   for($i=1;$i<=5;$i++){
    $sql="insert into result_master  values('$stu','$qidp[$i]','$ans[$i]') ";
    mysqli_query($con,$sql);
    
   }

   $sql2="select result_master.qid from result_master,question where result_master.qid=question.qid and 
            result_master.ans=question.ans and   result_master.sid='$stu' ";
      $qry1=mysqli_query($con,$sql2);
      $marks=null;
      while(mysqli_fetch_assoc($qry1)){
        $marks=$marks+5;
      }
      $sql3="insert into result values('$stu','25','$marks','$d') "; 
      mysqli_query($con,$sql3);
      header("location:examstart.php?Exam_Ended");
?> 


