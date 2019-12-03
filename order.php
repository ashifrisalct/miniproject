<!DOCTYPE html>
<html>
<head>
    <title>order item</title>
    <style>
    body{
        background-image: url(banner.jpg);
    }

}
</style>

</head>
<body>

<?php
session_start();
include 'dbcon.php';

$bookid=$_REQUEST['t'];
$acct_id=$_SESSION['username'];
$date=date("d/m/y");
$status="Not Processed";
$itemstatus="Pending";
 $sql="select oid from idgen";
        $a= mysqli_query($conn,$sql);
        
        $row=mysqli_fetch_assoc($a);

        $idd=$row['oid'];
        $idd++;
        $sid="ORD_".$idd;
       



$abc=mysqli_query($conn,"insert into tblorder(order_no,acc_id,book_id,order_date,status,itemstatus)
    values('$sid','$acct_id','$bookid','$date','$status','$itemstatus')");

  $b=mysqli_query($conn,"update idgen set oid='$idd'");
  $c=mysqli_query($conn,"update tbbook set status='s' where book_id='$bookid'");
  if ($abc>0) 
{
    echo '<script>alert("Book Ordered Successfully, Once Item Ordered Could Not Be Cancelled After Item Has Been Processed");window.location.assign("userhome.php");</script>';
  }
else
{
    echo '<script>alert("Error While Ordering Please Try Again");window.location.assign("userhome.php");</script>';
}
?>