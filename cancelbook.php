<?php
include'dbcon.php';
$order_id=$_REQUEST['t'];
$sql=mysqli_query($conn,"update tblorder set status='Cancelled' where order_no='$order_id'");
$sql2="select * from tblorder where order_no='$order_id'";
	$a=mysqli_query($conn,$sql2);
	$b="";
if($row=mysqli_fetch_assoc($a))
{
$b=$row['book_id'];
}
$sql=mysqli_query($conn,"update tbbook set status='ok' where book_id='$b'");
if($sql>0)
{
    echo '<script>alert("Order Cancelled Successfully");window.location.assign("cancle.php");</script>';
  }
else
{
    echo '<script>alert("Error While Cancelling Try Again!!!!..);window.location.assign("userhome.php");</script>';
}
?>