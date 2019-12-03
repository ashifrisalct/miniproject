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
  xhttp.open("GET", "combouser.php?a="+str, true);
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
  width: 50%;
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
    
    <!-- end reservations-main -->
    
   <div id="look" class="gallery-main pad-top-100 pad-bottom-100">
        
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                        <h2 class="block-title text-center">
                        
                    </h2>
                   

                   
                    <br>
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