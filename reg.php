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
                    alert("Password doenot Match try again") ;
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

<body>
   
    
    <div id="our_team" class="team-main pad-top-100 pad-bottom-100 parallax"> 
        <div class="container">
            <div class="row">
                <div class="form-reservations-box">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        

                    <div id="navbar" class="navbar-collapse collapse">
                                <form name="vinform" autocomplete="off" onclick="searchInfo()">  
                                <ul class="nav navbar-nav navbar-right">
                                    <li class="active"><a href="#banner"><font color="white">Home</font></a></li>
                                    <li><a href="#about"><font color="white">About us</font></a></li>
                                    <li><a href="#menu"><font color="white">Login</font></a></li>
                                    <li><a href="#our_team"><font color="white">Registration</font></a></li>
                                    <li><a href="#blog"><font color="white">Blog</font></a></li>
                                    <li><a href="#pricing"><font color="white">Book Details</font></a></li>
                                    <li><a href="#reservation"><font color="white">Latest Updates</font></a></li>
                                    <li><a href="#footer"><font color="white">Contact us</font></a></li>
                                </ul>
                                </form>
                            </div>



                        
                    
                        <form method="post" class="reservations-box" name="reg" onSubmit = "return checkPassword(this)" action="registration.jsp" >
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-box">
                                    <input type="text" name="name"  placeholder="Name" required="required" data-error="Firstname is required." autocomplete="off">
                                </div>
                            </div>
                            <!-- end col -->
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-box">
                                    <input type="email" name="email" id="email" placeholder="E-Mail ID" required="required" data-error="E-mail id is required." autocomplete="off">
                                </div>
                            </div>
                            <!-- end col -->
                            
                            <!-- end col -->
                             <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-box">
                                    <input type="password" id="password" name="password" value="" placeholder="password" required="required" autocomplete="off">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-box">
                                    <input type="tel" name="phone" id="phone"  pattern="[7896][0-9]{9}" placeholder="contact no." required="required" autocomplete="off">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-box">
                                    <input type="password" id="confirm" name="confirm" value="" placeholder="Re-enter password" required="required" autocomplete="off">
                                </div>
                            </div>
                            
                            <!-- end col -->

                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="reserve-book-btn text-center">
                                    <button  type="submit" value="SEND" id="submit">Register </button>
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
    

    
    <a href="#" class="scrollup" style="display: none;">Scroll</a>


    <!-- ALL JS FILES -->
    <script src="js/all.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/custom.js"></script>
  
</body>
</html>