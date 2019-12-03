

<!DOCTYPE html>
<html lang="en">
<head>
<title>ObS-Admin</title>
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
  .control-group{
    background-color: white;
    width: 100%;
  }
</style>
<?php
session_start();
?>
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
      <br><br>
  <br>
 
<div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
            <h5>Addition of New Category</h5>
          </div>
          <div class="widget-content nopadding">
            <form class="form-horizontal" method="post" action="catinsert.php">
              <div class="control-group">
                <label class="control-label">Category-ID</label>
                <div class="controls">

                     <?php
                                    include 'dbcon.php';
                                    $sql="select catid from idgen";
                                     $a= mysqli_query($conn,$sql);
        
                                    $row=mysqli_fetch_assoc($a);

                                    $idd=$row['catid'];
                                        $idd++;
                                        $_SESSION['catid1']=$idd;

                                    $sid="CATID00".$idd;
                                        ?>

                  <input type="text" name="cat_id" placeholder="Cat-ID" value="<?php echo $sid ?>">
                

                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Category Name</label>
                <div class="controls">
                  <input type="text" name="catname" id="cat" required="Category Name required" >
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Category Description</label>
                <div class="controls">
                  <input type="text" name="catdesc" id="date" required="Description required">
                </div>
              </div>
              
              <div class="form-actions">
                <input type="submit" value="ADD ITEM" class="btn btn-success">
              </div>
            </form>
          </div>
        </div>
      </div>
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

