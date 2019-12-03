<!DOCTYPE html>
<html lang="en">
<head>
<title>Matrix Admin</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="css/bootstrap.min1.css" />
<link rel="stylesheet" href="css/bootstrap-responsive.min2.css" />
<link rel="stylesheet" href="css/fullcalendar.css" />
<link rel="stylesheet" href="css/matrix-style1.css" />
<link rel="stylesheet" href="css/matrix-media1.css" />
<link href="font-awesome/css/font-awesome.css" rel="stylesheet" />
<link rel="stylesheet" href="css/jquery.gritter.css" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
<style type="text/css">
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
<body>

<!--Header-part-->
<div id="header">
  <h1><a href="dashboard.html">OBS ADMI</a></h1>
</div>
<!--close-Header-part--> 


<!--top-Header-menu-->
<div id="user-nav" class="navbar navbar-inverse">
  <ul class="nav">
    <li  class="dropdown" id="profile-messages" ><a title="" href="#" data-toggle="dropdown" data-target="#profile-messages" class="dropdown-toggle"><i class="icon icon-user"></i>  <span class="text">Welcome Admin</span></b></a>
      
    </li>
  
    
    <li class=""><a title="" href="login.html"><i class="icon icon-share-alt"></i> <span class="text">Logout</span></a></li>
  </ul>
</div>
<!--close-top-Header-menu-->
<!--start-top-serch-->

<!--close-top-serch-->
<!--sidebar-menu-->
<div id="sidebar"><a href="#" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a>
  <ul>
    <li class="active"><a href=admin.html><i class="icon icon-home"></i> <span>Dashboard</span></a> </li>
    <li> <a href=regusers.php><i class="icon icon-user"></i> <span>Registered Users</span></a> </li>
      <li> <a href=regbooks.php><i class="icon icon-inbox"></i> <span>Book Details</span></a> </li>
      <li> <a href=admin.html><i class="icon-tint"></i> <span>Sell Status</span></a> </li>
      <li> <a href=admin.html><i class="icon-fullscreen"></i> <span>Others</span></a> </li>
     
    
  </ul>
</div>
<!--sidebar-menu-->

<!--main-container-part-->
<div id="content">
<!--breadcrumbs-->
  <div id="content-header">
    
  </div>
<!--End-breadcrumbs-->

<!--Action boxes-->
  <div class="container-fluid">
    <div class="quick-actions_homepage">
      <br><br><h1><font color="white">Registered Users Verification</font></h1>
  <br>

<div id="sc">
<table>
        <tr><th>ACCOUNT-ID</th>
        <th>NAME</th>
        <th>POST</th>
        <th>EMAIL</th>
        <th>MOBILE NUMBER</th>
        <th>ACTION
        </th>
        
    </tr>
    <tr>
      
  <?php

include 'dbcon.php';

$sql="select acct_id,name,post,email,phone from registration where status='inactive'";



        $result=mysqli_query($conn,$sql);
        while($row=mysqli_fetch_assoc($result))
        {
            ?>
           <td><?php echo $row['acct_id']?></td>
           <td><?php echo $row['name']?></td>
           <td><?php echo $row['post']?></td>
           <td><?php echo $row['email']?></td>
           <td><?php echo $row['phone']?></td>
           <td><a href="activate.php?t=<?php echo $row['acct_id']?>">Approve</a></td>
           <td><a href="remove.php?c=<?php echo $row['acct_id']?>">Remove</a></td>
           
           </tr>
           <?php
        }
       
        ?>


</table>
</div>
      <ul class="quick-actions">
      </ul>
    </div>
<!--End-Action boxes-->           
        </div>
      </div>
    </div>
  </div>
</div>
<!--end-main-container-part-->
<!--Footer-part-->
<div class="row-fluid">
  <div id="footer" class="span12"><font color="white">Copyright © 2019 by ObS All Rights Reserved.
    <br><n align="center">Designed And Devoloped By <b>ASHIF RISAL CT || JASLA THASNI || SREELAKSMI PC</b></n></font></div>
</div>
</body>
</html>
