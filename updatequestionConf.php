<?php 
     
    
      if(isset($_POST['update'])) {
      
      $q = $_POST['question'];
      $q1 = $_POST['option1'];
      $q2 = $_POST['option2'];
      $q3 = $_POST['option3'];
      $q4 = $_POST['option4'];
      $ans = $_POST['answer'];
      
      
      include "conn.php"; 
      $sql = "update question set quis='$q',op1='$q2',op2='$q3',op3='$q4',op4='$q4',ans='$ans' where qid='$qid' ";
      mysqli_query($con,$sql);
      
  }
  
?>