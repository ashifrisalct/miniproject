
<?php
session_start();
include 'dbcon.php';

$book_id=$_POST['b_id'];
$acct_id=$_SESSION['username'];
$cat_id=$_POST['cat_id'];
$book_name=$_POST['bname'];
$author=$_POST['author'];
$edition=$_POST['edition'];
$publisher=$_POST['publisher'];
$pubyear=$_POST['pubyear'];
$desc=$_POST['description'];
$price=$_POST['price'];
$photo=$_FILES['photo']['name'];
$status="ok";
$s=$_SESSION['bid1'];


move_uploaded_file($_FILES["photo"]["tmp_name"],"images/".$_FILES["photo"]["name"]);

$abc=mysqli_query($conn,"insert into tbbook(book_id,acct_id,cat_id,book_name,author,edition,publisher,pub_year,photo,status)values('$book_id','$acct_id','$cat_id','$book_name','$author','$edition','$publisher','$pubyear','$photo','$status')");
$abc1=mysqli_query($conn,"insert into tbbooks(book_id,description,price,status)values('$book_id','$desc','$price','$status')");
  $b=mysqli_query($conn,"update idgen set bid='$s'");

if($abc>0)
	echo '<script>alert("Your Book Has Been Uploaded Successfully");window.location.assign("uploadbook.php");</script>';
  
else
    echo '<script>alert("Something Went Worng...!!!! Please Try Again");window.location.assign("uploadbook.php");</script>';
?>