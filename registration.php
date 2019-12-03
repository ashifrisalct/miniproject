<!DOCTYPE html>
<html>
<head>
	<title>registration</title>
</head>

<style>
body{
	background-image: url('banner.jpg');
}
#b{
 border:3px solid green;
 margin:100px 460px;
 color:white;
 font-size: 19px;
}
#h1
   {
    color:red;
   }
#c
   {
    color:green;
   }
 #h2
 {
 	color:black;
 	font-size:19px;
 }
</style>
<body>
	
<center id="b">
<h1 id="h1">Welcome To<br>Old Book Shopee...</h1>

<?php
include 'dbcon.php';

$acc_id=$_POST['accountid'];
$name=$_POST['name'];
$hname=$_POST['hname'];
$post=$_POST['post'];
$pin=$_POST['pin'];
$email=$_POST['email'];
$mobile=$_POST['phone'];
$pass=$_POST['password'];
$status="inactive";



$abc=mysqli_query($conn,"insert into registration(acct_id,name,hname,post,pin,email,phone,password,status)
	values('$acc_id','$name','$hname','$post','$pin','$email','$mobile','$pass','$status')");



if($abc>0)
	echo  "Dear <b>".$name."</b> Your Registration Under Pending<br><P>It Will Be Activated Within an Hour <P>Please Wait Some Time</p><br>
<u>Please Use Following Deatils For Login To Your Account</U><br><br>Email-ID: ".$email. "<br>password: ".$pass. "<br><br>Click  <a href='index.php'> Here</a> To Login To Your Account<br><br><br>";
else
	echo "Oooooops!<br><br>Sorry Some Thing Went Wrong Please Try Again<br>Click <a href='index.php'> Here</a> To Re-Register Again<br><br>";
?>
</center>

</body>
</html>