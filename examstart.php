<?php
session_start();
$stu=$_SESSION['user'];
if($_SESSION['user']==null){
	header("location:index.php");

}




?>
<!DOCTYPE html>
<html>
<head>
<!-- Bootstrap css -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<style>
	body{
		background: yellowgreen;
		text-align: center;
	color: bold black;
	}
	.positiona{
		position: fixed;
		right: 10px;
		top: 5px;
		background: white;
		color: #EA2027;
		font-size: 20px;
		padding: 10px 20px;
		border-radius: 5px;
		border: 1px solid #EA2027;
		transition: all 0.3s linear;
	}
	.positiona:hover{
		background: #EA2027;
		color:white;
		border-radius: 10px;
	}

	.mainbtn{
		border: 1.5px solid white;
		background-color: #7efff5;
		font-size: 15pt;
		padding: 10px 20px;
		border-radius: 5px;
		transition: all 0.4s linear ;
	}
	.mainbtn:hover{
		background-color: #0652DD;
		color: white;
		box-shadow: 0px 0px 2rem 0.5rem #d1ccc0;
		border-radius: 10px;
	}
	h1{
		color: cyan;
		text-shadow: 2px 4px 2px rgba(128, 0, 2, 0.73);
		
	}
</style>
<title>Exam Page</title>
</head>
<body class="container-fluid">
<a href="Student.php" title="Go Home Page" class="positiona"> Go Back </a>
<br>
<?php
include 'conn.php';
$sql="select * from reg where uname='$stu'";
$qry=mysqli_query($con,$sql);
if($row=mysqli_fetch_assoc($qry)){
	$stu_name=$row['sname'];
}

?>


<div class="m-5">
<h1 class="bg-dark text-white text-center  p-3 d-inline-block w-100" style="border-radius:20px;">Best of Luck <?php echo $stu_name; ?></h1>
</div>

<form action="examstart_submit.php" method="post" class="shadow-lg container-fluid">

<table width="100%" class="table table-borderless table-primary">
	<?php
$sql1="select * from  result where sid='$stu'";
$qry1=mysqli_query($con,$sql1);
if($row=mysqli_fetch_assoc($qry1))
{
echo "<h1>Your Exam has been compeleted</h1>";
}else{
     
	$sql2="select * from  question";
	$qry2=mysqli_query($con,$sql2);
	$count=1;
     while($row=mysqli_fetch_assoc($qry2)){

          $qid=$row['qid'];
		  $q=$row['quis'];
		  $op1=$row['op1'];
		  $op2=$row['op2'];
		  $op3=$row['op3'];
		  $op4=$row['op4'];







	 echo "<tr style='color:blue;'>
		<th colspan='2'><input type='hidden' name='qid$count' value='$qid'></th>
	</tr>

	<tr style='color:blue;'>
		<th colspan='2'><span style='color:red;'>Question $count:  </span>$q </th>
	</tr>";

	
echo
	"<tr>
		<th>a) <input type='radio' name='ans$count' id='' value='$op1'> <label for=''></label>$op1</th>

<th>b) <input type='radio' name='ans$count' id='' value='$op2'> <label for=''>$op2</label></th>
	</tr>";

	echo "<tr>
		<th>c) <input type='radio' name='ans$count' id='' value='$op3'> <label for=''>$op3</label></th>
		

<th>d) <input type='radio' name='ans$count' id='' value='$op4'> <label for=''>$op4</label></th>
	</tr>";
	$count++;
	 }
echo"<tr>
<th colspan='2'>
	<input type='submit' name='submit' value='Submit Exam' class='mainbtn'>
	<input type='reset'  value='Clear Form' class='mainbtn'>
</th>

</tr>


</table>";
}
?>


</form>

</body>
</html>