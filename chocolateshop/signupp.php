<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Chocolate Shop</title>
    
    <!-- Animate CSS -->
    <link rel="stylesheet" href="assetss/css/animate.min.css" />
    
    <!-- FontAwesome CSS -->
    <link rel="stylesheet" href="assetss/fonts/font-awesome/css/font-awesome.min.css" />
    
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="assetss/css/owl.carousel.min.css" />
    
    <!-- Bootsnav Menu -->
    <link rel="stylesheet" href="assetss/css/bootsnav.css" />
    
    <!-- Bootstrap -->
    <link rel="stylesheet" href="assetss/bootstrap/css/bootstrap.min.css" />
    
    <!-- Style CSS -->
    <link rel="stylesheet" type="text/css" href="assetss/css/style.css" />
    
    <!-- Responsive CSS -->
    <link rel="stylesheet" type="text/css" href="assetss/css/responsive.css" /> 
</head>

<body>
    <!-- ::::::::::::::::::::: HEADER AREA :::::::::::::::::::::::::: -->
    <div id="home"></div>
    
    <header class="menu-section">
        <!-- Start Navigation -->
        <nav class="navbar navbar-default bootsnav">
            <!-- Start Top Search -->
            <div class="top-search">
                <div class="container">
                    <div class="input-group"> 
                        <span class="input-group-addon"><i class="fa fa-search"></i></span>
                        <input type="text" class="form-control" placeholder="Search"> 
                        <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
                     </div>
                </div>
            </div>
            <!-- End Top Search -->
            
            <div class="container">
                <!-- Start Atribute Navigation -->
                <div class="attr-nav social-links">
                    <ul>
                        <li class="search"><a href="#"><i class="fa fa-search"></i></a></li>
                    </ul>
                </div>
                <!-- End Atribute Navigation -->
                
                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">     <i class="fa fa-bars"></i> 
                    </button> 
                    
<!--        <a class="navbar-brand" href="index.html"><img src="assets/img/logo.png" alt="Crazy-Engineers"></a> -->
             
               <h3>Crazy-Engineers</h3>
                </div>
                <!-- End Header Navigation -->
                
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse mainmenu" id="navbar-menu">
                    <ul class="nav navbar-nav navbar-right" data-in="#" data-out="#">
<!--
                        <li class="smooth-menu"><a href="#home">Home</a></li>
                        <li class="smooth-menu"><a href="#about-us">About Us</a></li>
                        <li class="smooth-menu"><a href="#work">Work</a></li>
                        <li class="smooth-menu"><a href="#services">Service</a></li>
                        <li class="smooth-menu"><a href="#testimonial">Testimonial</a></li>
-->
                        <li class="smooth-menu"><a href="index.php">Home</a></li>
                        <li class="active smooth-menu"><a href="#contact"></a></li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
        </nav>
        <!-- END: NAVIGATION -->
    </header>
    <!-- END: HEADER AREA -->

    
    
    <!-- ::::::::::::::::::::: CONTACT AREA :::::::::::::::::::::::::: -->
    <section id="contact" class="section-padding contact-area wow fadeIn" data-wow-duration="2s">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- START: CONTACT TITLE -->
                    <div class="contact-title">
                        <h2><span>Regestation Page</span></h2> 
                    </div>
                    <!-- End: CONTACT TITLE -->
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <!-- START: FORM SECTION -->
                    <form action="main.php" method="post">
                        <div class="row">
                            <div class="col-md-6">
                                <!-- START: FORM-1 SECTION -->
                                <div class="form-1">
                                    <input type="text" id="name" name="email" required autocomplete="off" />
                                    <label for="name">Name</label>
                                </div>
                                <!-- END: FORM-1 SECTION -->
                            </div>
                            
                            <div class="col-md-6">
                                <!-- START: FORM-1 SECTION -->
                                <div class="form-1">
                                    <input type="text" id="mail" name="address" required autocomplete="off" />
                                    <label for="mail">Address</label>
                                </div>
                                <!-- END: FORM-1 SECTION -->
                            </div>
                        </div>
                             <div class="row">
                            <div class="col-md-6">
                                <!-- START: FORM-1 SECTION -->
                                <div class="form-1">
                                    <input type="text" id="name" name="phone" required autocomplete="off" />
                                    <label for="name">Phone Number</label>
                                </div>
                                <!-- END: FORM-1 SECTION -->
                            </div>
                            
                            <div class="col-md-6">
                                <!-- START: FORM-1 SECTION -->
                                <div class="form-1">
                                    <input type="email" id="mail" name="email" required autocomplete="off" />
                                    <label for="mail">Email Address</label>
                                </div>
                                <!-- END: FORM-1 SECTION -->
                            </div>
                        </div>
                             <div class="row">
                            <div class="col-md-6">
                                <!-- START: FORM-1 SECTION -->
                                <div class="form-1">
                                    <input type="password" id="name" name="pass" required autocomplete="off" />
                                    <label for="name">Password</label>
                                </div>
                                <!-- END: FORM-1 SECTION -->
                            </div>
                            
                            <div class="col-md-6">
                                <!-- START: FORM-1 SECTION -->
                                <div class="form-1">
                                    <input type="password" id="mail" name="cpass" required autocomplete="off" />
                                    <label for="mail">Confirm Password</label>
                                </div>
                                <!-- END: FORM-1 SECTION -->
                            </div>
                        </div>
                        <!--  
                        <div class="row">
                            <div class="col-md-4">
                                <!-- START: FORM-1 SECTION -
                                <div class="form-1">
                                    <input type="password" id="password" name="password" required autocomplete="off" />
                                    <label for="password">Password</label>
                                </div>
                                <!-- END: FORM-1 SECTION 
                            </div>
                            
                            <div class="col-md-8">
                                <!-- START: FORM-1 SECTION 
                                <div class="form-1">
                                    <input type="text" id="subject" name="subject" required autocomplete="off" />
                                    <label for="subject">Subject</label>
                                </div>
                               - END: FORM-1 SECTION
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-12">
                                 START: FORM-1 SECTION 
                                <div class="form-1">
                                    <textarea name="message" id="message" cols="30" rows="1" required autocomplete="off"></textarea>
                                    <label for="message">Your Message</label>
                                </div>
                                 END: FORM-1 SECTION -->
                            </div>
                        </div>
                        
                        <!-- START: CONTACT US BUTTON -->
                        <div class="contact-us-btn">
<!--                           <input type="submit" class="button-text button-contact" name="login" value="Login">-->
                            <button name="reg" class="button-text button-contact">Sign Up</button> <br>
                            <a href="loginp.php"><h5 align="center">Back</h5></a>
                           
                            
                        </div>
                        <!-- END: CONTACT US BUTTON -->
                    </form>
                    <!-- END: FORM SECTION -->
                </div>
            </div>
        </div>
    </section>
    <!-- END: CONTACT AREA -->
    
     <?php
                        if(isset($_GET['msg'])) 
                        $user = $_GET['msg'];
                    ?>
    

 
    
    
    
    <!-- JQUERY -->
    <script src="assetss/js/jquery-2.1.3.min.js"></script>
    
    <!-- BOOTSTRAP -->
    <script src="assetss/bootstrap/js/bootstrap.min.js"></script>
    
    <!-- BOOTSNAV -->
    <script src="assetss/js/bootsnav.js"></script>
    
    <!-- OWL CAROUSEL -->
    <script src="assetss/js/owl.carousel.min.js"></script>
    
    <!-- ISOTOPE -->
    <script src="assetss/js/isotope-3.0.4.min.js"></script>
    
    <!-- JQUARY COUNTER UP -->
    <script src="assetss/js/jquery.counterup.js"></script>
    
    <!-- JQUARY EASING -->
    <script src="assetss/js/jquery.easing.min.js"></script>
    
    <!-- WOW JS  -->
    <script src="assetss/js/wow.min.js"></script>
    
    <!-- WAYPOINTS JS -->
    <script src="assetss/js/waypoints.min.js"></script>
    
    <!-- EXTERNAL SCRIPTS -->
    <script src="assetss/js/script.js"></script>
    
     
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

<script type="text/javascript">
    
    var user = "<?php echo $user; ?>";
    
$(function(){
    
    if (user == 1) {
     Swal.fire({
  position: 'center',
  icon: 'success',
  title: 'you are successfully regestered',
  showConfirmButton: false,
  timer: 2000
 })
       
} else if (user == 2){
  Swal.fire({
  position: 'center',
  icon: 'success',
  title: 'Email Already In Use',
  showConfirmButton: false,
  timer: 2000
 })
    
}else if (user == 99){
  Swal.fire({
  position: 'center',
  icon: 'success',
  title: 'Message send successfully',
  showConfirmButton: false,
  timer: 2000
 })   
}else if (user == 3){
  Swal.fire({
  position: 'center',
  icon: 'success',
  title: 'Connction Faild',
  showConfirmButton: false,
  timer: 2000
 })   
}else if (user == 4){
  Swal.fire({
  position: 'center',
  icon: 'success',
  title: 'Database Error',
  showConfirmButton: false,
  timer: 2000
 })   
}else if (user == 5){
  Swal.fire({
  position: 'center',
  icon: 'success',
  title: 'Password & conform pass Does not match',
  showConfirmButton: false,
  timer: 2000
 })   
}else if (user == 51){
  Swal.fire({
  position: 'center',
  icon: 'success',
  title: 'Email or passwor not correct',
  showConfirmButton: false,
  timer: 2000
 })   
}else if (user == 52){
  Swal.fire({
  position: 'center',
  icon: 'success',
  title: 'Dtabase Error',
  showConfirmButton: false,
  timer: 2000
 })   
}
    
});
</script>

</body>

</html>