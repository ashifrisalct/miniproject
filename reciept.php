<html>
	<head>
		<meta charset="utf-8">
		<title>Invoice</title>
		<link rel="stylesheet" href="res/style.css">
		<link rel="license" href="https://www.opensource.org/licenses/mit-license/">
		<script src="res/sample.js"></script>
	</head>
	<body>
	<?php
	include 'dbcon.php';
	
	$re=$_REQUEST['t'];
	
	$sql="select * from tblorder,registration where tblorder.acc_id=registration.email && tblorder.order_no='$re'";
$r=mysqli_query($conn,$sql);
$name="";
$hname="";
$post="";
$phone="";
$email="";
$pin="";
if($row=mysqli_fetch_assoc($r))
{
	$name=$row['name'];
	$hname=$row['hname'];
	$post=$row['post'];
	$phone=$row['phone'];
	$email=$row['email'];
	$pin=$row['pin'];
}
$sql="select * from tblorder where order_no='$re'";
$r=mysqli_query($conn,$sql);
$ss="";
if($row=mysqli_fetch_assoc($r))
{
	$ss=$row['book_id'];
}
$sql="select * from tbbook where book_id='$ss'";
$r=mysqli_query($conn,$sql);
$s_name="";
if($row=mysqli_fetch_assoc($r))
{
	$s_name=$row['book_name'];
}
$sql="select * from tbbooks where book_id='$ss'";
$r=mysqli_query($conn,$sql);

$rate="";
if($row=mysqli_fetch_assoc($r))
{
	$rate=$row['price'];
}
$sql="select * from tblorder where order_no='$re'";
$r=mysqli_query($conn,$sql);
$order_date="";
if($row=mysqli_fetch_assoc($r))
{
	$odate=$row['order_date'];
}
	?>
	<header>
			<h1>Invoice</h1>
			<p>To:</p>
			<address contenteditable>
				<p><br><?php echo $name ?></p>
				<p><?php echo $hname ?></p>
				<p><?php echo $post ?> - Po</p>
				<p>Malappuram</p>
				<p>Kerala - <?php echo $pin ?></p>
				<p><?php echo $email ?></p>
				<p><?php echo $phone ?></p>
				
				

			</address>
		<span>Gmail:obs@gmail.com</span>	  </header>
		<article>
			
			</address>
			<table class="meta">
				<tr>
					<th><span contenteditable>Order Number</span></th>
					<td><span contenteditable><?php echo $re ?></span></td>
				</tr>
				<tr>
					<th><span contenteditable>Order-Date</span></th>
					<td><span contenteditable><?php echo $odate ?></span></td>
				</tr>
				<tr>
					<th><span contenteditable>Delivery-Date</span></th>
					<td><span contenteditable><?php echo date("d/m/y") ?></span></td>
				</tr>
				
				
			</table>
			<table class="inventory">
				<thead>
					<tr>
						<th><span contenteditable>Book Name</span></th>
						<th><span contenteditable>Price</span></th>
						
					</tr>
				</thead>
				<tbody>
					<tr>
						<td><a class="cut">-</a><input type="text" value="<?php echo $s_name ?>"></td>
						<td><a class="cut">-</a><input type="text" value="<?php echo $rate ?>"></td>
					</tr>
					
				</tbody>
			</table>
		</article>
		<table border="2">
			<tr>
			<td>
		
		<p align="right"><b>Grand Total: <?php echo $rate?></b></p>
	</td></tr>
		</table>
		<aside>
			
			
			<br><br><br>

			<h1><span contenteditable>THANK YOU</span></h1>
			<div contenteditable>
				<p align="right">* This is  Computer generated document. No Signature is required.</p>
			</div>
		</aside>
		<br>
		<P>Cut and Paste it in your Delivery Packet</P>
		...................................................................................................................................................................
		<br>
		<p>To:</p>
			<address contenteditable>
				<p><br><?php echo $name ?></p>
				<p><?php echo $hname ?></p>
				<p><?php echo $post ?> - Po</p>
				<p>Malappuram</p>
				<p>Kerala - <?php echo $pin ?></p>
				<p><?php echo $email ?></p>
				<p><?php echo $phone ?></p>
				

			</address>
		<br>
		...................................................................................................................................................................
		<br><br><br>
		<center><input type="submit" value="Print Invoice" onClick="window.print();"></center>
		<?php
		$sqll=mysqli_query($conn,"update tblorder set status='processed' where order_no='$re'");
		?>

	</body>
</html>
