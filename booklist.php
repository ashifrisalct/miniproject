<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0">

    <!-- Site Metas -->
    <title>Library</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">

    <!-- ................................. -->
<!--     #used for side color changing -->
    <!-- color -->
    <link id="changeable-colors" rel="stylesheet" href="css/colors/orange.css" />

 <!--    ................................. -->

    <link rel="stylesheet" href="css/style.css" type="text/css">

   <!-- Modernizer -->

   <!--     .......................................................................................................... -->

    <script src="js/modernizer.js"></script>
    <script>
         
           
           
    </script> 
    
<!--     .......................................................................................................... -->


    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
<style type="text/css">
#sc
{
    margin-top: 10px;
    height: 400px;
    overflow: auto;
}


table
{
    border-collapse: separate;
    width: 100%;
        font-size: 15px;
    font-style: auto;
    text-align: center;
    background-color: black;
    overflow: auto;
}
th
{
    height: 8px;
    background-color: green;
    color: white;
    text-align: center;

}
td,th
{
    border:.5px solid blue;
    color: white;
    padding: 15px;

}

</style>
</head>

<body>

<!--     .......................................................................................................... -->

    <div id="loader">
        <div id="status"></div>
    </div>
<!--     .......................................................................................................... -->
    <div id="site-header">
        <header id="header" class="header-block-top">
            <div class="container">
                <div class="row">
                    <div class="main-menu">
                        <!-- navbar -->
                       <nav class="navbar navbar-default" id="mainNav">
                            <div class="navbar-header">
                                
                                    
                                   
                            
                                <div class="logo">
                                  <!--   <a class="navbar-brand js-scroll-trigger logo-header" href="#">
                                        <img src="images/eli.jpg" alt="">
                                    </a>
 -->                                </div>
                            </div>
                           <!--  <div id="navbar" class="navbar-collapse collapse"> -->
                                <form name="vinform" autocomplete="off" onclick="searchInfo()">  
                                <ul class="nav navbar-nav navbar-right">
                                    
                                    <li><a href="#about">MEMBER MANAGEMENT</a></li>
                                    <li><a href="#menu">CATEGORY MANAGEMENT</a></li>
                                    <li><a href="#our_team">BOOK APPROVEL</a></li>
                                    <li><a href="#blog">REPORTS</a></li>
                                    <li><a href=logout.php>LOGOUT</a></li>
                                </ul>
                                </form>
                            </div>
                            <!-- end nav-collapse -->
                       </nav>
                        <!-- end navbar -->
                    </div>
                </div>
                <!-- end row -->
            </div>
            <!-- end container-fluid -->
        </header>
        <!-- end header -->
    </div>
	<!-- end site-header -->
<!-- 	............................................................................................................... -->

    <div id="banner" class="banner full-screen-mode parallax">
        <div class="container pr">
            <!-- <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"> -->
                <div class="banner-static">
                    <div class="banner-text">
                        <br><br><br><br><br>

                        <!--     ............................................................................... -->
                            <!-- <h1> <span class="typer" id="some-id" data-delay="205" data-delim=":" data-words="Sell Your Books Here" data-colors="red"></span><span class="cursor" data-cursorDisplay=" " data-owner="some-id"></span></h1> -->

                        <!--     ............................................................................... -->


<div id="sc">
<table>

        <tr><th>BOOK NAME</th>
        <th>AUTHOR</th>
        <th>PUBLISHER</th>
        <th>PUBLISHING YEAR</th>
        <th>EDITION</th>
        <th>PRICE</th>
        <th>PHOTO</th>
        
        
    </tr>
    <tr>
     
  <?php

include 'dbcon.php';

$sql="select * from tblorder";



        $result=mysqli_query($conn,$sql);
        while($row=mysqli_fetch_assoc($result))
        {
            ?>
           <td><?php echo $row['book_name']?></td>
           <td><?php echo $row['author']?></td>
           <td><?php echo $row['publisher']?></td>
           <td><?php echo $row['pub_year']?></td>
           <td><?php echo $row['edition']?></td>
           <td><?php echo $row['price']?></td>
           <td><img src="images/<?php echo $row['photo']?>" width="100" height="150" class="image"><br></td>
           
           
           </tr>
           <?php
        }
       
        ?>
       

</table>
</div>
                           
                        </div>
                        <!-- end banner-cell -->
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

<!-- ............................................................................................................... -->

<!-- ............................................................................................................... -->

  <!--   
    <div id="banner" class="banner full-screen-mode parallax">
        <div class="container pr">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="banner-static">
                    <div class="banner-text">
                        
                            <h1>Books for  <span class="typer" id="some-id" data-delay="200" data-delim=":" data-words="Children:Parents:Teachers" data-colors="red"></span><span class="cursor" data-cursorDisplay="_" data-owner="some-id"></span></h1>
                            <h2>New to E-Library </h2>
                            <div class="book-btn">
                                <a href="#our_team" class="table-btn hvr-underline-from-center">Regester Here</a>
                            </div>
                            <a href="#about">
                                <div class="mouse"></div>
                            </a>
                        </div>
                        <!-- end banner-cell -->
         <!--            </div>
                    <!-- end banner-text -->
                <!-- </div>
                end banner-static
            </div> -->
            <!-- end col -->
        <!-- </div> -->
        <!-- end container -->
    <!-- </div> --> 
    <!-- end banner -->

 
<!-- ............................................................................................................... -->
    


    <!-- ALL JS FILES -->
    <script src="js/all.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/custom.js"></script>
  
</body>
</html>