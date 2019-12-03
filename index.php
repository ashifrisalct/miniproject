<!DOCTYPE html>
<html lang="en">

<head>

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


function add1() {
      var str=f1.search.value;
      var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("demo").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "combo.php?a="+str, true);
  xhttp.send();
}
</script>
           
   

    



    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
<style type="text/css">

.text1{
  width: 130px;
  box-sizing: border-box;
  border: 2px solid #ccc;
  border-radius: 4px;
  font-size: 16px;
  background-color: white;
  background-image: url('searchicon.png');
  background-position: 10px 10px; 
  background-repeat: no-repeat;
  padding: 12px 20px 12px 40px;
  -webkit-transition: width 0.4s ease-in-out;
  transition: width 0.4s ease-in-out;
}

.text1:focus {
  width: 100%;
}
</style>
</head>
<style type="text/css">
    #test
    {
        background-image: url(banner.jpg);
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
                                    <li class="active"><a href="#banner">Home</a></li>
                                    <li><a href="#about">About us</a></li>
                                    <li><a href="#menu">Login</a></li>
                                    <li><a href="#our_team">Registration</a></li>
                                    <li><a href="#gallery">Gallery</a></li>
                                    <li><a href="#look">Search Book</a></li>
                                    <li><a href="#bottom">Contact us</a></li>
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
	
    <div id="banner" class="banner full-screen-mode parallax">
        <div class="container pr">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="banner-static">
                    <div class="banner-text">
                        <div class="banner-cell">
                            <h1>Online Portal For <span class="typer" id="some-id" data-delay="200" data-delim=":" data-words="Old Book Buy And Sell" data-colors="red"></span><span class="cursor" data-cursorDisplay=" " data-owner="some-id"></span></h1>
                            <br><br><br>
                            <h2>Old Book Shopee.. </h2>
                            <div class="book-btn">
                                <a href="#our_team" class="table-btn hvr-underline-from-center">Regester Here</a>
                            </div>
                            <a href="#about">
                                <div class="mouse"></div>
                            </a>
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

    <div id="about" class="about-main pad-top-100 pad-bottom-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                        <h2 class="block-title"> About Us </h2>
                        <h3><b>Old Book Shopee..</b></h3>
                        <font color="green" size="3">
                                                <p>Online book selling system is a web portal to buy and sale of old and used books. Obs system provides an easy way to sell and buy old books. If you Have any books that you would like to sell, you can list them in a sell section. Alternatively if you wish to buy book then you can search the appropriate book to buying.</p>
                        <P> Obs not handling any payment processing as most of the student does not have credit card so we simply tie up with courier service for collecting books, delivery books and collecting money from buyer. </p></font>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                        <div class="about-images">
                            <img class="about-main" src="images/about-main.jpg" alt="About Main Image">
                            <img class="about-inset" src="images/about-inset.jpg" alt="About Inset Image">
                        </div>
                    </div>
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>

    <div class="special-menu pad-top-100 parallax">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                        <h2 class="block-title color-white text-center"> Top Rated Books</h2>
                        <h5 class="title-caption text-center"> Will Shortly Includes in ObS-Library. </h5>
                    </div>
                    <div class="special-box">
                        <div id="owl-demo">
                            <div class="item item-type-zoom">
                                <a href="#" class="item-hover">
                                    <div class="item-info">
                                        <div class="headline">
                                            CYBER PYISICAL SYSTEM ENGINEERING
                                            <div class="line"></div>
                                            <div class="dit-line"> A deep information to Cyber Physical System engineering with advanced Technologies</div>
                                        </div>
                                    </div>
                                </a>
                                <div class="item-img">
                                    <img src="images/cover/cover3.jpg" alt="sp-menu">
                                </div>
                            </div>
                            <div class="item item-type-zoom">
                                <a href="#" class="item-hover">
                                    <div class="item-info">
                                        <div class="headline">
                                            CYBER SECURITY
                                            <div class="line"></div>
                                            <div class="dit-line">Indroduction to the world of cyber security with advanced new technologies.</div>
                                        </div>
                                    </div>
                                </a>
                                <div class="item-img">
                                    <img src="images/cover/cover4.jpg" alt="sp-menu">
                                </div>
                            </div>
                            <div class="item item-type-zoom">
                                <a href="#" class="item-hover">
                                    <div class="item-info">
                                        <div class="headline">
                                            CYBER SECURITY
                                            <div class="line"></div>
                                            <div class="dit-line">Indroduction to the world of cyber security with advanced new technologies adn modern science engineering</div>
                                        </div>
                                    </div>
                                </a>
                                <div class="item-img">
                                    <img src="images/cover/cover5.jpg" alt="sp-menu">
                                </div>
                            </div>
                            <div class="item item-type-zoom">
                                <a href="#" class="item-hover">
                                    <div class="item-info">
                                        <div class="headline">
                                           DBMS
                                            <div class="line"></div>
                                            <div class="dit-line">Data base management system with advanced relationship and Normalization</div>
                                        </div>
                                    </div>
                                </a>
                                <div class="item-img">
                                    <img src="images/cover/cover6.jpg" alt="sp-menu">
                                </div>
                            </div>
                            <div class="item item-type-zoom">
                                <a href="#" class="item-hover">
                                    <div class="item-info">
                                        <div class="headline">
                                            MECHINE LEARNING
                                            <div class="line"></div>
                                            <div class="dit-line">An indroduction to the world of self controlled mechines</div>
                                        </div>
                                    </div>
                                </a>
                                <div class="item-img">
                                    <img src="images/cover/cover7.jpg" alt="sp-menu">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end special-box -->
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end special-menu -->
    
    
<!--    <div id="footer" class="footer-main">
        <div class="footer-news pad-top-100 pad-bottom-70 parallax">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                            <h2 class="ft-title color-white text-center"> Contact Us </h2>-->

    <div id="menu" class="footer-news pad-top-100 pad-bottom-70 parallax">
      
          <div class="container">
             <div id="test">
                 <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                        <h2 class="block-title text-center">
                            <br>
						Login to your Account 	
                        </h2>
                        <p class="title-caption text-center">Login with Your Email and Password. New Users Can Register By Visiting 
                            <a href="#our_team"><font color="white"><u>Registeration</u> Page</font></a></p>
                        
                      </div>
                     
                        <form method="post" name="login" action="userlogin.php">
                            <input type="text" name="email" placeholder="Email-ID" required="required" data-error="Name is required." autocomplete="off">
                            <br><br>
                            <input type="password" name="password" placeholder="Enter your password" required="required">
                                <div class="reserve-book-btn text-center">
                            <button class="hvr-underline-from-center" type="submit" value="SEND" id="submit">Login</button>
                            <button class="hvr-underline-from-center" type="reset" value="SEND" id="reset">Reset</button>
                                </div>
                            </div>
                        </form>
                     <center>
                        <div class="banner-cell">
                            <a href="#our_team">
                                <div class="mouse"></div>
                            </a>
                        </div>
                     </center>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
    <!-- end menu -->
    
    <!--  .......................................................................................... -->
    
    <div id="our_team" class="team-main pad-top-100 pad-bottom-100 parallax"> 
        <div class="container">
            <div class="row">
                <div class="form-reservations-box">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                            <h2 class="block-title text-center">
						Registration Form			
					</h2>
                        </div>
                        
                        <p><Font color="white">&nbsp&nbsp&nbsp All Fields Are Required </p></Font>
                        <form method="post" class="reservations-box" name="reg" onSubmit = "return checkPassword(this)"s  action="registration.php" >
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

                                <div class="form-box">
                                    <input type="text" name="accountid"  placeholder="Account-ID" required="required" data-error="Account-ID is required." autocomplete="off">
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-box">
                                    <input type="text" name="name"  placeholder="Name" required="required" data-error="Name is required." autocomplete="off">
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-box">
                                    <input type="text" name="hname"  placeholder="House-Name" required="required" data-error="House Nmae is required." autocomplete="off">
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-box">
                                    <input type="text" name="post"  placeholder="Post" required="required" data-error="Post is required." autocomplete="off">
                                </div>
                            </div>


                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-box">
                                    <input type="text" name="pin"  placeholder="Pin" required="required" data-error="Pincode is required." autocomplete="off">
                                </div>
                            </div>

                            <!-- end col -->
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-box">
                                    <input type="email" name="email" id="email" placeholder="E-Mail ID" required="required" data-error="E-mail id is required." autocomplete="off">
                                </div>
                            </div>
                            <!-- end col -->
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-box">
                                    <input type="tel" name="phone" id="phone"  pattern="[7896][0-9]{9}" placeholder="contact no." required="required" autocomplete="off">
                                </div>
                            </div>
                            <!-- end col -->

                             <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-box">
                                    <input type="password" id="password" name="password" value="" placeholder="password" required="required" autocomplete="off">
                                </div>
                            </div>
                            
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-box">
                                    <input type="password" id="confirm" name="confirm" value="" placeholder="Re-enter password" required="required" autocomplete="off">
                                </div>
                            </div>
                            
                            <!-- end col -->
                            
                            
                            <!-- ...................
 -->                   <!--  

 .....................................
 ..................................................... -->
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="reserve-book-btn text-center">
                                    <button  type="submit" value="SEND" id="submit">Register </button>
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
    
   <div id="look" class="gallery-main pad-top-100 pad-bottom-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                        <h2 class="block-title text-center">
						
					</h2>
                  
                    <form name="f1"> 
                    <input type="text" name="search" placeholder="Search.." onkeyup="add1()" class="text1">
                </form>
                <div id="demo">
                </div>
                    
                    </div>
                    <div class="gal-container clearfix">



<br>
<br>
<br>
<br>
<br><br><br><br><br><br><br><br><br><br><br>
</div>
</div>
</div>
</div>
</div>
<!--      ................................................ -->

    <div id="gallery" class="special-menu pad-top-100 parallax">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                        <h2 class="block-title color-white text-center">Books On Gallery</h2>
                       

                             <?php
        include 'dbcon.php';
        $sql="select * from tbbook,tbbooks where tbbook.book_id=tbbooks.book_id && tbbook.status='ok'";
        $result=mysqli_query($conn,$sql);
        while ($row=mysqli_fetch_assoc($result))
        {
            ?>



            <form  action="" method="post">
<div style="float:left; padding:30px;">

            <div class="background">
  <div class="transbox">

    <br>
    <br>
    <table border="5">
     <img src="images/<?php echo $row['photo']?>" width="200" height="300">
     <br><font color="white">
            Name: <?php echo $row['book_name']?><br>
           Author: <?php echo $row['author']?><br>
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

                    </div>
                  
                    </div>
                    <!-- end special-box -->
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
 
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
                                <br><br><br>
                                <h2 class="block-title">Join With Us</h2>
                 
                        
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
                                <h3>Some Books</h3>
                                <ul>
                                    <li><a href="#">Computer Networks</a></li>
                                    <li><a href="#">Mechine Learning with R</a></li>
                                    <li><a href="#">Artificial Intelligence</a></li>
                                    <li><a href="#">Cyber Security And Cryptography</a></li>
                                    <li><a href="#">Big Data Technologies</a></li>
                                    <li><a href="#">Python Programing</a></li>
                                    <li><a href="#">Cloud Computing</a></li>
                                    <li><a href="#">Computer Architechture</a></li>
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