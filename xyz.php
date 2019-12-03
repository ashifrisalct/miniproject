<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        include 'dbcon.php';
        ?>
    <title>test</title>
    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0">
    <!-- Site Metas -->
    <title>e-Library</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
     <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
    <link href="css/t.css" rel="stylesheet" type="text/css" media="all">
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
</head>
<body>
    <div id="loader">
        <div id="status"></div>
    </div>
   

	
    <div id="banner" class="banner full-screen-mode parallax">
        <div class="container pr">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="banner-static">
                    <div class="banner-text">
                        <div class="banner-cell">
                        </div>
                        <!-- end banner-cell -->

     <!--                     ..................................................................... -->
<!--  -->

                  
        <?php
        $t1=$_REQUEST['t'];
        $sql="select * from tbbook,tbbooks where tbbook.cat_id='$t1' && tbbook.book_id=tbbooks.book_id";
        $result=mysqli_query($conn,$sql);
        while ($row=mysqli_fetch_assoc($result))
        {
            ?>



            <form  action="" method="post">
<div style="float:left; padding:10px;">

            <div class="background">
  <div class="transbox">
<center>
    <br>
    <br>
     <img src="images/<?php echo $row['photo']?>" width="100" height="80"><br>
            <?php echo $row['book_name']?><BR>
           <?php echo $row['author']?><BR>
           <?php echo $row['price']?><br>
          
           <td><a href="bookdetailview.php?t=<?php echo $row['book_id']?>">view book Details</a></td>
   <br>    
  
       <br>    

</center>
                </div>
    </div>
    
 </div>

 </form>
 
<?php
}
?>

   .....................................................

                         
                    </div>
                    <!-- end banner-text -->
                </div>
                <!-- end banner-static -->
            </div>
            <!-- end col -->
        </div>
        <!-- end container -->
    </div>
    <!-- end banner -->

    <a href="#" class="scrollup" style="display: none;">Scroll</a>
    <!-- ALL JS FILES -->
    <script src="js/all.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/custom.js"></script>
</body>
</html>