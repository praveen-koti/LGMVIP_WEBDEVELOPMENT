<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<link rel="stylesheet" type="text/css" href="bootstrap-4.4.1/css/bootstrap.min.css">
  	<script type="text/javascript" src="bootstrap-4.4.1/js/juqery_latest.js"></script>
  	<script type="text/javascript" src="bootstrap-4.4.1/js/bootstrap.min.js"></script>
  	<style>
  		hr{
  			width: 35%;
  		}
  		h3{
  			font-size: 25px;
  		}
  	</style>
</head>
<body style="background-color: #a8b5ac;color: #fff">
	<center><br><br>
	<h3>STUDENT MANAGEMENT SYSTEM</h3><br><hr><hr><br><br>
	<form action="" method="POST">
		<input style="padding:10px 18px;" type="submit" name="admin_login" value="ADMIN LOGIN" required>
		<br><br>
		<input style="padding:10px 10px;" type="submit" name="student_login" value="STUDENT LOGIN" required>
	</form>
	<?php
		if(isset($_POST['admin_login'])){
			header("Location: admin_login.php");
		}
		if(isset($_POST['student_login'])){
			header("Location: student_login.php");
		}
	?>
	</center>
</body>
</html>