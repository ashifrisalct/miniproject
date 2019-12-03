<!DOCTYPE html>
<html lang="en">

<head>
<?php
session_start();
?>
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

    



    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<style type="text/css">
    #test
    {
        background-image: url(banner.jpg);
    }
</style>
<body>
    <div id="loader">
        <div id="status"></div>
    </div>
    <div id="site-header">
        <header id="header" class="header-block-top">
            <div class="container">
                <div class="row">
                    <div class="main-menu">
                        <!-- navbar -->
                       <nav class="navbar navbar-default" id="mainNav">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <div class="logo">
                                    <a class="navbar-brand js-scroll-trigger logo-header" href="#">
                                        <img src="images/eli.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                            <div id="navbar" class="navbar-collapse collapse">
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
    <!--  .......................................................................................... -->
    
    <div id="our_team" class="team-main pad-top-100 pad-bottom-100 parallax"> 
        <div class="container">
            <div class="row">
                <div class="form-reservations-box">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                            <h2 class="block-title text-center">
                                    <br>
								Sell Your Books Here 
					</h2>
                        </div>
                        
                        
<form enctype="multipart/form-data" method="post" class="reservations-box" name="reg" onSubmit = "return checkPassword(this)" action="bookupload.php">

                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-box">
                                    <?php
                                    include 'dbcon.php';
                                    $sql="select bid from idgen";
                                     $a= mysqli_query($conn,$sql);
        
                                    $row=mysqli_fetch_assoc($a);

                                    $idd=$row['bid'];
                                        $idd++;
                                        $_SESSION['bid1']=$idd;

                                    $sid="BID00".$idd;
                                        ?>
                                    <input type="text" name="b_id"  placeholder="Book-ID" autocomplete="off" value="<?php echo $sid ?>">
                                </div>
                            </div>

                        
                            <!-- end col -->
                            <!-- end col -->

                          
                        
                            <!-- end col -->
                            <!-- end col -->

                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-box">
                                    <select name="cat_id" required>
                                        <option required>select your category</option>
                                        <?php
                                        include 'dbcon.php';
                                        $sql="select * from category";
                                        $result=mysqli_query($conn,$sql);
                                        while ($row=mysqli_fetch_assoc($result))
                                        {
                                        ?>
                                        <option value="<?php echo $row['cat_id'] ?>"><?php echo $row['cat_name'] ?></option>
                                         
                                        <?php
                                    }
                                    ?>
                                   </select>
                                </div>
                            </div>

                        
                            <!-- end col -->
                            <!-- end col -->

                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-box">
                                    <input type="text" name="bname"  placeholder="Book-Name" required="required" data-error="Book-Name is required." autocomplete="off">
                                </div>
                            </div>

                        
                            <!-- end col -->
                            <!-- end col -->

                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-box">
                                    <input type="text" name="author"  placeholder="Author" required="required" data-error="Author is required." autocomplete="off">
                                </div>
                            </div>

                        
                            <!-- end col -->
                            <!-- end col -->

                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-box">
                                    <input type="text" name="edition"  placeholder="Book-Edition" required="required" data-error="Edition is required." autocomplete="off">
                                </div>
                            </div>

                        
                            <!-- end col -->
                            <!-- end col -->

                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-box">
                                    <input type="text" name="publisher"  placeholder="Publsiher" required="required" data-error="Publisher is required." autocomplete="off">
                                </div>
                            </div>

                        
                            <!-- end col -->
                            <!-- end col -->

                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-box">
                                    <input type="text" name="pubyear"  placeholder="Publish-Year" required="required" data-error="Publish Year is required." autocomplete="off">
                                </div>
                            </div>

                        
                            <!-- end col -->
                            <!-- end col -->

                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-box">
                                    <input type="text" name="description"  placeholder="Description" required="required" data-error="Book Description is required." autocomplete="off">
                                </div>
                            </div>

                        
                            <!-- end col -->
                            <!-- end col -->

                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-box">
                                    <input type="text" name="price"  placeholder="Price" required="required" data-error="Book Price is required." autocomplete="off">
                                </div>
                            </div>

                        
                            <!-- end col -->
                            <!-- end col -->

                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-box">
                                    <input type="file" name="photo"  placeholder="Cover-Photo" required="required" data-error="Upload A Cover-Photo" autocomplete="off">
                                </div>
                            </div>
                            
                            <!-- end col -->
                            
                            
                            <!-- ...................
 -->                   <!--  .......................................................................................... -->
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="reserve-book-btn text-center">
                                    <button  type="submit" value="SEND" id="submit">Upload </button>
                                    <button type="reset" id="submit">Reset</button>
                                </div>
                            </div>
                            <!-- end col -->
                        </form>
                        <!-- end form -->
                    </div>
                    <!-- end col -->
                </div>
                <!-- end reservations-box -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end reservations-main -->
    

<!-- ........................................................................................... -->

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