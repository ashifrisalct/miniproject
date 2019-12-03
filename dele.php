<?php
include'dbcon.php';
$cat_id=$_REQUEST['t'];
$sql=mysqli_query($conn,"delete from category where cat_id='$cat_id'");
if($sql>0)
{
    echo '<script>alert("category Deleted Successfully");window.location.assign("catdelete.php");</script>';
  }
else
{
    echo '<script>alert("Error While Deletion Try Again!!!!..);window.location.assign("catdelete.php");</script>';
}
?>