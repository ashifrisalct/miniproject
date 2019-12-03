<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
 <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- color -->
    <link id="changeable-colors" rel="stylesheet" href="css/colors/orange.css" />
    <link rel="stylesheet" href="css/style.css" type="text/css">

   <!-- Modernizer -->
    <script src="js/modernizer.js"></script>
    <script>
         
            function checkPassword(form) { 
                password1 = form.password.value; 
                password2 = form.confirm.value; 
                
  
               
                if (password1 != password2) { 
                    alert("Password Does Not Match Try Again") ;
                    return false; 
                } 
                else{ 
                    return true; 
                } 
            } 
           
    </script> 

    

</head>

<body>
	<div id="our_team" class="team-main pad-top-100 pad-bottom-100 parallax"> 
        <div class="container">
            <div class="row">
                <div class="form-reservations-box">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                       
     
<?php
include 'dbcon.php';

$a=$_GET['a'];
 $r="select * from tbbook,tbbooks where tbbook.book_id=tbbooks.book_id && book_name LIKE '%$a%' && tbbook.status='ok'";

$r1=mysqli_query($conn,$r);
while($row=mysqli_fetch_assoc($r1))
{
	?>

     
       
            <form  action="" method="post">
<div style="float:left; padding:10px;">

            <div class="background">
  <div class="transbox">

    <br>
    <br>
    <table border="5">
     <img src="images/<?php echo $row['photo']?>" width="200" height="300">
     <br><font color="white">
            Name: <?php echo $row['book_name']?><br>
          <font color="#fff" >Author: <?php echo $row['author']?><br>
           Price: <?php echo $row['price']?><br></font>
         </table>
         
          <td><a href="#our_team"><button class="b1"><font color="white">View Book Details</a></button></td>
   <br>    
   <br>    
  
       <br>    


                </div>
    </div>
    
 </div>

 </form>
 
<?php
}
?>

