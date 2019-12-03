<!DOCTYPE html>
<html>
<head>

	<title>login</title>
	<style type="text/css">
		body{
			background-image: url(banner.jpg);
		}
	</style>
</head>
<body background="banner.jpg">

<?php
session_start();
include 'dbcon.php';
$username = $_POST['email'];
$password = $_POST['password'];

$query = mysqli_query($conn,"select * from login where user_id='$username' and password='$password'");
if($row = mysqli_fetch_assoc($query)){
	$type = $row['type'];
	if($type=='user')
	{
		$_SESSION['username'] = $username;
		
		
		echo '<script>alert("Welcome User To ObS");window.location.assign("userhome.php");</script>';
	}
	elseif($type=='admin')
	{
		$_SESSION['username'] = $username;
		
		echo '<script>alert("Welcome Admin");window.location.assign("admin.html");</script>';
	}
	else{
		
		echo '<script>alert("Username id or Password is Worng.");window.location.assign("index.php");</script>';
		
	}
	
}
else{
	echo '<script>alert("Username id or Password is worng. Please Try Again");window.location.assign("index.php");</script>';
}

?>
</body>
</html>

