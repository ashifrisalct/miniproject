<!DOCTYPE html>
<html>
<head>
	<title>session-logout</title>
	<style type="text/css">
		body
		{
			background-image: url(banner.jpg);
		}
	</style>
</head>
<body>
<?php
session_start();
session_destroy();
echo '<script>alert("Logout Successfull");window.location.assign("index.php");</script>';
?>
?>
</body>
</html>