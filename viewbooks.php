<!DOCTYPE html>
<html lang="en">
 <?php
        include 'dbcon.php';
        ?>
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
      <link rel="stylesheet" href="css/d.css">
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
         
            function checkPassword(form) { 
                password1 = form.password.value; 
                password2 = form.confirm.value; 
                
  
               
                if (password1 != password2) { 
                    alert("Password doenot Match try again") ;
                    return false; 
                } 
                else{ 
                    return true; 
                } 
            } 
           
    </script> 
    
<!--     .......................................................................................................... -->


    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
<style type="text/css">
   .bk {
        background-image: url(banner.jpg);
        background-repeat: no-repeat;
        background-attachment: fixed;
    }
      .b1
{
  border:4px;
  border-color: black;
  color: white;
  padding: 10px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  margin: 4px 2px;
  cursor: pointer;
}
.b1
{
  background-color: green;
  font-size: 15px;
}
.b2
{
  border:2px;
  border-color: black;
  color: white;
  padding: 10px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  margin: 4px 2px;
  cursor: pointer;
}
.b2
{
  background-color: blue;
  font-size: 15px;

}
h3
{
    font-family: "Times New Romen",Times, serif;
    font-size: 10px;
    color: white;
    font-style: normal;
}
</style>
</head>

<body class="bk">

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
                                 
                                    <a class="navbar-brand js-scroll-trigger logo-header" href="#">
                                        <img src="images/eli.jpg" alt="">
                                    </a>
                         </div>
                            </div>
                           <!--  <div id="navbar" class="navbar-collapse collapse"> -->
                                <form name="vinform" autocomplete="off" onclick="searchInfo()">  
                                <ul class="nav navbar-nav navbar-right">
                                  <li class="active"><a href=userhome.php>HOME</a></li>
                                    
                                    
                                    
                                  <li><a href=buy.php>BUY BOOKS</a></li>

                                    <li><a href=uploadbook.php>SELL BOOK</a></li>
                                    
                                    <li><a href=profile.php>PROFILE</a></li>
                                    
                                    <li><a href="#bottom">CONTACT US</a></li>

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
<!--    ............................................................................................................... -->

          <div class="container pr">
            <!-- <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"> -->
                <div class="banner-static">
                    <div class="banner-text">

<br>
                        <!--     ............................................................................... -->
                          

                        <!--     ............................................................................... -->



 <?php
        $sql="select * from category";
        $result=mysqli_query($conn,$sql);
        while ($row=mysqli_fetch_assoc($result))
        {
            ?>
            <form  action="" method="post">
        <div style="float:left; padding:center; color:white">
        <div class="background">
        <div class="transbox">
        <center>
        <br>
        
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="reserve-book-btn text-center"><br>
                                     <td><button  type="submit"  id="submit"><font color="white"><?php echo $row['cat_name']?><br>
                                        <?php echo $row['cat_desc']?>
                            
                                </div>
                            </div>
           <td><a href="selectedview.php?t=<?php echo $row['cat_id']?>"><button class="b2"><font color="white">VIEW</font></a></button></td>
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
</table>

                        <!--     ............................................................................... -->

                           <!--  <h2>New to E-Library </h2>
                            <div class="book-btn">
                                <a href="#our_team" class="table-btn hvr-underline-from-center">Regester Here</a>
                            </div> -->
                            <a href="#about">
                                <div class="mouse"></div>
                            </a>
                        </div>
                        <!-- end banner-cell -->
                    </div>
                    <!-- end banner-text -->
                </div>
                <!-- end banner-static -->
                <br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
            </div>
            <!-- end col -->
        </div>
        <!-- end container -->
    </div>
    <!-- end banner -->

            <!-- end col -->
   

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
                      d banner-text -->
                <!-- </div>
                end banner-static
            </div> -->
            <!-- end col -->
        <!-- </div> -->
        <!-- end container -->
    <!-- </div> --> 
    <!-- end banner -->

 
<!-- ............................................................................................................... -->
    


        <div id="bottom" class="footer-box pad-top-70">
            <div class="container">
                <div class="row">
                    <div class="footer-in-main">
                        <div class="footer-logo">
                            <div class="text-center">
                               <!--  .................... -->
                                <!-- <img src="images/eli.jpg" alt="" /> -->
                               <!--  ...................... -->
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="footer-box-a">
                                <h2 class="block-title"> About Us </h2>
                        <h3><b>Old Book Shopee..</b></h3>
                       
                                                <p>Online Book Selling System Is A Web Portal To Buy And Sale Of Old And Used Books. Obs System Provides An Easy Way To Sell And Buy Old Books. </p><p>If You Have Any Books That You Would Like To Sell, You Can List Them In A Sell Section. Alternatively If You Wish To Buy Book Then You Can Search The Appropriate Book To Buying.</</p>
                        
                                <ul class="socials-box footer-socials pull-left">
                                    <li>
                                        <a href="#">
                                            <div class="social-circle-border"><i class="fa  fa-facebook"></i></div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="social-circle-border"><i class="fa fa-twitter"></i></div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="social-circle-border"><i class="fa fa-google-plus"></i></div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="social-circle-border"><i class="fa fa-pinterest"></i></div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="social-circle-border"><i class="fa fa-linkedin"></i></div>
                                        </a>
                                    </li>
                                </ul>

                            </div>
                            <!-- end footer-box-a -->
                        </div>
                        <!-- end col -->
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="footer-box-b">
                                <h3>Best Sellers</h3>
                                <ul>
                                    <li><a href="#">Object Oriented Programing in C</a></li>
                                    <li><a href="#">Object Oriented Programing in C++</a></li>
                                    <li><a href="#">Object Oriented Programing in JAVA</a></li>
                                    <li><a href="#">Object Oriented Programing in .NET</a></li>
                                    <li><a href="#">Big Data Technology</a></li>
                                    <li><a href="#">Web Data Mining</a></li>
                                    <li><a href="#">Cryptography & Cyber Security</a></li>
                                    <li><a href="#">Mechine Learning With R</a></li>
                                </ul>
                            </div>
                            <!-- end footer-box-b -->
                        </div>
                        <!-- end col -->
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="footer-box-c">
                                <h3>Contact Us</h3>
                                <p>
                                    <i class="fa fa-map-signs" aria-hidden="true"></i>
                                    <span>AWH Engineering College Kozhikode</span>
                                </p>
                                <p>
                                    <br>ASHIF RISAL C T
                                    <br><b>ObS SCRUM MASTER</b><br>
                                    <i class="fa fa-mobile" aria-hidden="true"></i>
                                    <span>+91 7559813601</span>
                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                                    <span><a href="#">ashifrisalct@gmail.com</a></span>
                                   
                                </p>
                                </p>
                                <p>
                                    <br>JASLA THASNI<br>
                                    <i class="fa fa-mobile" aria-hidden="true"></i>
                                    <span>+91 7025198027</span>
                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                                    <span><a href="#">jaslathas@gmail.com</a></span>
                                </p>
                                <p>
                                    <br>SREELAKSHMI PC<br>
                                    <i class="fa fa-mobile" aria-hidden="true"></i>
                                    <span>+91 9946265387</span>
                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                                    <span><a href="#">sreelakshmipc5@gmail.com</a></span>
                                </p>
                                
                            </div>
                            <!-- end footer-box-c -->
                        </div>
                        <!-- end col -->
                       <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="footer-box-d">
                                <h3>Follow us on</h3>

                                <ul>
                                    <li>
                                        <p><u>Facebook</u>
                                            <br>https://facebook.com/obs</p>
                                        
                                    </li>
                                    <li>
                                        <p><u>Twitter</u>
                                            <br>https://twitter.com/obs</p> 
                                        
                                    </li>
                                     <li>
                                         <p><u>Gmail</u>
                                            <br>obs@gmail.com</p>
                                            
                                    </li>
                                    <li>
                                        <p><u>Instagram</u>
                                            <br>https://instagram.com/obs</p>
                                        
                                    </li>
                                    </
                                </ul>
                            </div>
                            <!-- end footer-box-d -->
                        </div>
                        <!-- end col -->
                    </div>
                        <!-- end col -->
                </div>
                    <!-- end footer-in-main -->
            </div>
                <!-- end row -->
            <!-- end container -->
            <div id="copyright" class="copyright-main">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                           <h6 class="copy-title">Copyright © 2019 by ObS  All Rights Reserved.Designed And Devoloped By <b>ASHIF RISAL CT || JASLA THASNI || SREELAKSMI PC</b></h6>

                        </div>
                    </div>
                    <!-- end row -->
                </div>
                <!-- end container -->
            </div>
            <!-- end copyright-main -->
        </div>
        <!-- end footer-box -->
    <!-- end footer-main -->

    <!-- end footer-main -->

    <a href="#" class="scrollup" style="display: none;">Scroll</a>

    <section id="color-panel" class="close-color-panel">
        <a class="panel-button gray2"><i class="fa fa-cog fa-spin fa-2x"></i></a>
        <!-- Colors -->
        <div class="segment">
            <h4 class="gray2 normal no-padding">Color Scheme</h4>
            <a title="orange" class="switcher orange-bg"></a>
            <a title="strong-blue" class="switcher strong-blue-bg"></a>
            <a title="moderate-green" class="switcher moderate-green-bg"></a>
            <a title="vivid-yellow" class="switcher vivid-yellow-bg"></a>
        </div>
    </section>

    <!-- ALL JS FILES -->
    <script src="js/all.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/custom.js"></script>
  
</body>
</html>