<!DOCTYPE html>
<html>
<head>
    <title>Order Details</title>
  <style type="text/css">
    #sa
    {
      background-image: url(banner.jpg);
    }
    #b1
{
 border:2px solid red;
 margin:140px 340px;
 color: white;
 font-size: 25px;
}
#size
{
  width: 10px;
}
#sc
{
    margin-top: 10px;
    height: 555px;
    overflow: auto;
}


table
{
    border-collapse: separate;
    width: 100%;
        font-size: 15px;
    font-style: auto;
    text-align: center;
    background-color: #ffdab9;
    overflow: auto;
}
th
{
    height: 8px;
    background-color: skyblue;
    color: red;
    text-align: center;

}
td,th
{
    border:.5px solid black;
    color: black;
    padding: 15px;

}

</style>
 
</head>
<body id="sa">
    <form>
    <br>
    <br>
    <br>
    <br>
    <table id="b1" border="2" align="center">
        <tr><th id="size">Order Number</th>
        <th>Book ID</th>
        <th>Order Date</th>
        <th>Book Name</th>
        <th>Action</th>
    </tr>
    <tr>
      <div id="c">
    <?php
session_start();
include 'dbcon.php';
$a=$_SESSION['username'];
$sql="select tblorder.order_no,tblorder.book_id,tblorder.order_date,tbbook.book_name from tblorder,tbbook where tblorder.book_id=tbbook.book_id && tbbook.acct_id='$a'";
        $result=mysqli_query($conn,$sql);
        while($row=mysqli_fetch_assoc($result))
        {
            ?>
           <td><?php echo $row['order_no']?></td>
           <td><?php echo $row['book_id']?></td>
           <td><?php echo $row['order_date']?></td>
           <td><?php echo $row['book_name']?></td>
           <td><a href="reciept.php?t=<?php echo $row['order_no']?>">view</a></td>
           </tr>
           <?php
        }
       
        ?>

</center>
</table>
</div>
</form>
</body>
</html>