<?php

$host_name = 'localhost';
$name = 'root';
$pass = '';
$db = 'nazim';

$con= mysqli_connect($host_name,$name,$pass) or die ('databae error!');
mysqli_select_db($con,$db);

$query="select * from emp_rec";
$result=mysqli_query($con,$query);

$t = 101;
if(isset($_POST['logoinne'])){
      $t = 201; 
 }else{}

if(isset($_POST['logoinnnme'])){
      $t = 251; 
 }else{}

if(isset($_POST['logininsert'])){
         $emp_idddin = $_POST['emp_iddln'];
         $emp_namin = $_POST['emp_namein'];
         $emp_addrin = $_POST['emp_addin'];
         $emp_phoin = $_POST['emp_phonein'];
         $emp_emmin = $_POST['emp_Emailin'];
         $emp_salin = $_POST['emp_Salaryin'];
         $emp_desgin = $_POST['emp_desin'];
         $emp_passwin = md5($_POST['emp_Passin']);
       $insertion = "insert into emp_rec values('$emp_idddin','$emp_namin','$emp_addrin','$emp_phoin','$emp_emmin','$emp_salin','$emp_desgin','$emp_passwin') ";
       mysqli_query($con,$insertion);
 }else{}

if(isset($_POST['logoinnnmme'])){
         $emp_iddd = $_POST['emp_iddd'];
       $insertion = "delete from emp_rec where Emp_ID='$emp_iddd'";
       mysqli_query($con,$insertion);
 }else{}

if(isset($_POST['logoinnnmmpemp'])){
         $emp_idddp = $_POST['emp_idddp'];
         $emp_idddpp = $_POST['emp_idddpp'];
       $insertion = "update emp_rec set Emp_Phone='$emp_idddpp' where Emp_ID='$emp_idddp'";
       mysqli_query($con,$insertion);
 }else{}

if(isset($_POST['logoinnnmmqemp'])){
         $emp_idddq = $_POST['emp_idddq'];
         $emp_idddqq = $_POST['emp_idddqq'];
       $insertion = "update emp_rec set Emp_Email='$emp_idddqq' where Emp_ID='$emp_idddq'";
       mysqli_query($con,$insertion);
 }else{}

if(isset($_POST['logoinnnmmpempd'])){
         $empd_idddp = $_POST['empd_idddp'];
         $empd_idddpp = $_POST['empd_idddpp'];
       $insertion = "update emp_rec set Emp_Salary='$empd_idddpp' where Emp_ID='$empd_idddp'";
       mysqli_query($con,$insertion);
 }else{}

if(isset($_POST['logoinnnmmqempd'])){
         $empd_idddq = $_POST['empd_idddq'];
         $empd_idddqq = $_POST['empd_idddqq'];
       $insertion = "update emp_rec set Emp_Password='$empd_idddqq' where Emp_ID='$empd_idddq'";
       mysqli_query($con,$insertion);
 }else{}


?>





<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Chocolate Shop</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700|Raleway" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    

    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body data-spy="scroll" data-target="#site-navbar" data-offset="200">
    
<!--
    <nav class="navbar navbar-expand-lg navbar-dark site_navbar bg-dark site-navbar-light" id="site-navbar" >
      <div class="container">
        <a class="navbar-brand" href="index.html">Crazy-Engineers</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#site-nav" aria-controls="site-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="site-nav">
          <ul class="navbar-nav ml-auto">
-->
          
<!--
            <li class="nav-item active"><a href="#section-home" class="nav-link">Home</a></li>
            <li class="nav-item"><a href="#section-about" class="nav-link">About</a></li>
            <li class="nav-item"><a href="#section-offer" class="nav-link">Offer</a></li>
            <li class="nav-item"><a href="#section-menu" class="nav-link">Menu</a></li>
            <li class="nav-item"><a href="#section-news" class="nav-link">News</a></li>
-->
<!--            <li class="nav-item"><a href="#section-gallery" class="nav-link">Manager</a></li>-->
<!--            <li class="nav-item"><a href="#nnsection-home" class="nav-link">user</a></li>-->
<!--
            <li class="nav-item"><a href="logout.php?logout" class="nav-link">Logout</a></li>
          </ul>
        </div>
      </div>
    </nav>
     END nav 
-->

<!--    <section class="site-cover" style="background-image: url(images/n1.jpg);" id="section-home">-->
  <section class="site-cover" style="background-color: white" id="section-home">
      <div class="container">
       <h1 align="center">Admin Page</h1>
       <div align="center" style="font-size:20px;">
       <a style="margin-right:15px;" href="admin.php">Product</a>
       <a style="margin-right:15px;" href="adminemp.php">Employee</a>
       <a style="margin-right:15px;" href="adminuser.php">User</a>
       <a style="margin-right:15px;" href="adminorder.php">Order</a>
       <a href="logout.php">Logout</a>
       </div><br><br>
       <h2 align="center">Employee Information</h2><br>
        
      <form action="adminemp.php" method="post">
      <input type="submit" name="logoinne" value="Details Show Button">
      <input type="submit" name="logoinnnmee" value="Refresh Page Button"><br><br>
      
   
      <h4>Employee Add</h4>
      <input type="text" name="emp_iddln" placeholder="Employee Id">
      <input type="text" name="emp_namein" placeholder="Employee Name">
      <input type="text" name="emp_addin" placeholder="Employee Address">
      <input type="text" name="emp_phonein" placeholder="Employee Phone">
      <input type="email" name="emp_Emailin" placeholder="Employee Email">
      <input type="text" name="emp_Salaryin" placeholder="Employee Salary"><br><br>
      <input type="text" name="emp_desin" placeholder="Employee Desigration"> 
      <input type="password" name="emp_Passin" placeholder="Employee Password">
      <input type="submit" name="logininsert" value="Insert Button"><br><br>
      

       <h4>Delete</h4>
      <input type="text" name="emp_iddd" placeholder="Employee Id">
      <input type="submit" name="logoinnnmme" value="Delete Button"><br><br>
  
     
       <div class="row">
      <div class="col-md-6 form-group">
      <h4>Update Phone Number</h4>
      <input type="text" name="emp_idddp" placeholder="Employee Id">
      <input type="text" name="emp_idddpp" placeholder="Employee Phone">
      <input type="submit" name="logoinnnmmpemp" value="Update Button"><br>
      </div>
         <div class="col-md-6 form-group">
      <h4>Update Email Address</h4>
      <input type="text" name="emp_idddq" placeholder="Employee Id">
      <input type="email" name="emp_idddqq" placeholder="Employee Email">
      <input type="submit" name="logoinnnmmqemp" value="Update Button"><br>
      </div>
      </div>
      
         <div class="row">
      <div class="col-md-6 form-group">
      <h4>Update Salary</h4>
      <input type="text" name="empd_idddp" placeholder="Employee Id">
      <input type="text" name="empd_idddpp" placeholder="Employee Salary">
      <input type="submit" name="logoinnnmmpempd" value="Update Button"><br>
      </div>
         <div class="col-md-6 form-group">
      <h4>Update Password</h4>
      <input type="text" name="empd_idddq" placeholder="Employee Id">
      <input type="password" name="empd_idddqq" placeholder="Employee Password">
      <input type="submit" name="logoinnnmmqempd" value="Update Button"><br>
      </div>
      </div>
  </form>
      <br>
    <table align="center" border="1px" style="width:600px; line-height:40px;" >
      <tr>
          <th colspan="8"><h2 align="center">Employee record</h2></th>
      </tr>
      <t>
          <th>Employee ID</th>
          <th>Employee Name</th>
          <th>Employee Address</th>
          <th>Employee Phone</th>
          <th>Employee Email</th>
          <th>Employee Salary</th>
          <th>Employee Desigration</th>
          <th>Employee Password</th>
      </t>
      <?php
    if ($t == 201) {
             
           while($rows=$result-> fetch_assoc())
       {
          ?>
          <tr>
              <td><?php echo $rows['Emp_ID']; ?></td>
              <td><?php echo $rows['Emp_Name']; ?></td>
              <td><?php echo $rows['Emp_Address']; ?></td>
              <td><?php echo $rows['Emp_Phone']; ?></td>
              <td><?php echo $rows['Emp_Email']; ?></td>
              <td><?php echo $rows['Emp_Salary']; ?></td>
              <td><?php echo $rows['Emp_Desigation']; ?></td>
              <td><?php echo $rows['Emp_Password']; ?></td>
          </tr> 
          <?php   
       }
       
    } else {
        echo "";
    }
       ?>
   </table>    
         
        <div class="row align-items-center justify-content-center text-center site-vh-100">
          <div class="col-md-12">
            <h1 class="site-heading site-animate mb-3"></h1>  
            <!-- 
            <h2 class="h5 site-subheading mb-5 site-animate">Come and eat well with our delicious &amp; healthy foods.</h2>   -->  
<!--
            <p><a href="https://colorlib.com/" target="_blank" class="btn btn-outline-white btn-lg site-animate" data-toggle="modal" data-target="#reservationModaln">Log In &nbsp</a></p>
            
            <p><a href="https://colorlib.com/" target="_blank" class="btn btn-outline-white btn-lg site-animate" data-toggle="modal" data-target="#reservationModal">Sign Up</a></p>
-->
            
          </div>
        </div>
      </div>
    </section>
    <!-- END section -->
    

      
            
            <!-- 
            <h2 class="h5 site-subheading mb-5 site-animate">Come and eat well with our delicious &amp; healthy foods.</h2>     
-
            <p><a href="https://colorlib.com/" target="_blank" class="btn btn-outline-white btn-lg site-animate" data-toggle="modal" data-target="#reservationModaln">Log In &nbsp</a></p>
            
            <p><a href="https://colorlib.com/" target="_blank" class="btn btn-outline-white btn-lg site-animate" data-toggle="modal" data-target="#reservationModal">Sign Up</a></p>

            
          </div>
        </div>
      </div>
    </section>
   
   
   
   
    
    <section class="site-section" id="section-about">
      <div class="container">
        <div class="row">
          <div class="col-md-5 site-animate mb-5">
            <h4 class="site-sub-title">Our Story</h4>
            <h2 class="site-primary-title display-4">Welcome</h2>
            <p>Our online chocolate shop management system is one of the famous chocolate shop in our country.</p>

            <p class="mb-4">In our shop, Customer find Various types of chocolate, Candy and branded chocolate which price is reasonable. So, Visit our website to buy your favourite chocolates.</p>
            <p><a href="#" class="btn btn-secondary btn-lg">Learn More About Us</a></p>
          </div>
          <div class="col-md-1"></div>
          <div class="col-md-6 site-animate img" data-animate-effect="fadeInRight">
            <img src="images/About_2.jpg" alt="Free Template by colorlib.com" class="img-fluid">
          </div>
        </div>
      </div>
    </section>
     END section 
    

    <section class="site-section bg-light" id="section-offer">
      <div class="container">
        
        <div class="row">
          <div class="col-md-12 text-center mb-5 site-animate">
            <h4 class="site-sub-title">Our Offers</h4>
            <h2 class="display-4">Our Offer This Winter</h2>
            <div class="row justify-content-center">
              <div class="col-md-7">
                <p class="lead">In this winter, We give an exclusive offer in our online chocolate shop. We give this fantastic offers on all branded and delicious chocolate for sale and more from December 1 to 31.</p>
              </div>
            </div>
          </div>
          <div class="col-md-12">
            <div class="owl-carousel site-owl">

              <div class="item">
                <div class="media d-block mb-4 text-center site-media site-animate border-0">
                  <img src="images/f1.jpg" alt="Free Template by colorlib.com" class="img-fluid">
                  <div class="media-body p-md-5 p-4">
                    <h5 class="text-primary">$4.50</h5>
                    <h5 class="mt-0 h4">Lindt & Sprungli</h5>
                    <p class="mb-4 text-manage">The Lindt & Sprungli chocolate brand is known all over the world for making the best white chocolate you have ever tasted.</p>

                    <p class="mb-0"><a href="#" class="btn btn-primary btn-sm">Order Now!</a></p>
                  </div>
                </div>
              </div>

              <div class="item">
                <div class="media d-block mb-4 text-center site-media site-animate border-0">
                  <img src="images/f2.jpg" alt="Free Template by colorlib.com" class="img-fluid">
                  <div class="media-body p-md-5 p-4">
                    <h5 class="text-primary">$5.50</h5>
                    <h5 class="mt-0 h4">Patchi</h5>
                    <p class="mb-4 text-manage">Their chocolate is known to be a perfect gift for a dear friend or loved one. Patchi is a combination of both Swiss and Belgium flavors.</p>

                    <p class="mb-0"><a href="#" class="btn btn-primary btn-sm">Order Now!</a></p>
                  </div>
                </div>
              </div>
              
              <div class="item">
                <div class="media d-block mb-4 text-center site-media site-animate border-0">
                  <img src="images/f3.jpg" alt="Free Template by colorlib.com" class="img-fluid">
                  <div class="media-body p-md-5 p-4">
                    <h5 class="text-primary">$3.50</h5>
                    <h5 class="mt-0 h4">Galaxy</h5>
                    <p class="mb-4 text-manage">Galaxy chocolate is made with fresh milk and intense, dark cocoa but is magically entwined with delicious and sweet fruit flavors.</p>

                    <p class="mb-0"><a href="#" class="btn btn-primary btn-sm">Order Now!</a></p>
                  </div>
                </div>
              </div>

              <div class="item">
                <div class="media d-block mb-4 text-center site-media site-animate border-0">
                  <img src="images/f4.jpg" alt="Free Template by colorlib.com" class="img-fluid">
                  <div class="media-body p-md-5 p-4">
                    <h5 class="text-primary">$4.00</h5>
                    <h5 class="mt-0 h4">Kit Kat</h5>
                    <p class="mb-4 text-manage">The famous brand Kit Kat has hit the number two spot on our list by more than the catchy jingle that goes along with the classic bar.</p>

                    <p class="mb-0"><a href="#" class="btn btn-primary btn-sm">Order Now!</a></p>
                  </div>
                </div>
              </div>

              <div class="item">
                <div class="media d-block mb-4 text-center site-media site-animate border-0">
                  <img src="images/f5.jpg" alt="Free Template by colorlib.com" class="img-fluid">
                  <div class="media-body p-md-5 p-4">
                    <h5 class="text-primary">$8.50</h5>
                    <h5 class="mt-0 h4">Ferrero Rocher</h5>
                    <p class="mb-4 text-manage">There are many reasons why Ferrero Rocher made the top 3 spot on our list.  the delicious chocolate that everyone so dearly loves.</p>

                    <p class="mb-0"><a href="#" class="btn btn-primary btn-sm">Order Now!</a></p>
                  </div>
                </div>
              </div>
              
              <div class="item">
                <div class="media d-block mb-4 text-center site-media site-animate border-0">
                  <img src="images/f6.jpg" alt="Free Template by colorlib.com" class="img-fluid">
                  <div class="media-body p-md-5 p-4">
                    <h5 class="text-primary">$7.50</h5>
                    <h5 class="mt-0 h4">Mars</h5>
                    <p class="mb-4 text-manage">The number one spot, Mars brand. The Mars chocolate bars are the number one selling chocolate brand across the globe.</p>

                    <p class="mb-0"><a href="#" class="btn btn-primary btn-sm">Order Now!</a></p>
                  </div>
                </div>
              </div>

              <div class="item">
                <div class="media d-block mb-4 text-center site-media site-animate border-0">
                  <img src="images/f7.jpg" alt="Free Template by colorlib.com" class="img-fluid">
                  <div class="media-body p-md-5 p-4">
                    <h5 class="text-primary">$7.50</h5>
                    <h5 class="mt-0 h4">Guylian</h5>
                    <p class="mb-4 text-manage">The chocolate brand Guylian originated in Belgium. Now, it’s famous chocolate is offered in more than 40 countries worldwide.</p>

                    <p class="mb-0"><a href="#" class="btn btn-primary btn-sm">Order Now!</a></p>
                  </div>
                </div>
              </div>

              <div class="item">
                <div class="media d-block mb-4 text-center site-media site-animate border-0">
                  <img src="images/f8.jpg" alt="Free Template by colorlib.com" class="img-fluid">
                  <div class="media-body p-md-5 p-4">
                    <h5 class="text-primary">$6.50</h5>
                    <h5 class="mt-0 h4">Toblerone</h5>
                    <p class="mb-4 text-manage">Toblerone began in Switzerland as a chocolate treat only fit for royalty. Today the Toblerone brand extends around the world.</p>

                    <p class="mb-0"><a href="#" class="btn btn-primary btn-sm">Order Now!</a></p>
                  </div>
                </div>
              </div>
              
              <div class="item">
                <div class="media d-block mb-4 text-center site-media site-animate border-0">
                  <img src="images/f9.jpg" alt="Free Template by colorlib.com" class="img-fluid">
                  <div class="media-body p-md-5 p-4">
                    <h5 class="text-primary">$9.50</h5>
                    <h5 class="mt-0 h4">Ghirardelli</h5>
                    <p class="mb-4 text-manage">Some of the main ingredients are milk, cream and cocoa. Who could resist such a sweet mixture made by the finest Italian craftsmen.</p>

                    <p class="mb-0"><a href="#" class="btn btn-primary btn-sm">Order Now!</a></p>
                  </div>
                </div>
              </div>

            </div>
          </div>
          
        </div>
      </div>
    </section>
     END section 

    <section class="site-section" id="section-menu">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center mb-5 site-animate">
            <h2 class="display-4">Chocolate Menu</h2>
            <div class="row justify-content-center">
              <div class="col-md-7">
                <p class="lead">There are two types of chocolates. One is local branded chocolate that means Bangladeshi chocolate and another is foreign branded chocolate.</p>
              </div>
            </div>
          </div>

          <div class="col-md-12 text-center">

            <ul class="nav site-tab-nav nav-pills mb-5" id="pills-tab" role="tablist">
              <li class="nav-item site-animate">
                <a class="nav-link active" id="pills-breakfast-tab" data-toggle="pill" href="#pills-breakfast" role="tab" aria-controls="pills-breakfast" aria-selected="true">Foreign</a>
              </li>
              <li class="nav-item site-animate">
                <a class="nav-link" id="pills-lunch-tab" data-toggle="pill" href="#pills-lunch" role="tab" aria-controls="pills-lunch" aria-selected="false">&nbsplocal</a>
              </li>

              <li class="nav-item site-animate">
                <a class="nav-link" id="pills-dinner-tab" data-toggle="pill" href="#pills-dinner" role="tab" aria-controls="pills-dinner" aria-selected="false">Dinner</a>
              </li>

            </ul>

            <div class="tab-content text-left">
              <div class="tab-pane fade show active" id="pills-breakfast" role="tabpanel" aria-labelledby="pills-breakfast-tab">
                <div class="row">
                  <div class="col-md-6 site-animate">
                    <div class="media menu-item">
                      <img class="mr-3" src="images/mm1.jpg" class="img-fluid" alt="Free Template by colorlib.com">
                      <div class="media-body">
                        <h5 class="mt-0">Kit Kat</h5>
                        <p>The famous brand Kit Kat has hit the number two spot on our list by more than the catchy jingle that goes along with the classic bar.</p>
                        <h6 class="text-primary menu-price">$4.50</h6>
                      </div>
                    </div>

                    <div class="media menu-item">
                      <img class="mr-3" src="images/mm2.jpg" class="img-fluid" alt="Free Template by colorlib.com">
                      <div class="media-body">
                        <h5 class="mt-0">Galaxy</h5>
                        <p>Galaxy chocolate is made with fresh milk and intense, dark cocoa but is magically entwined with delicious and sweet fruit flavors.</p>
                        <h6 class="text-primary menu-price">$4.50</h6>
                      </div>
                    </div>

                    <div class="media menu-item">
                      <img class="mr-3" src="images/mm3.jpg" class="img-fluid" alt="Free Template by colorlib.com">
                      <div class="media-body">
                        <h5 class="mt-0">Patchi</h5>
                        <p>Their chocolate is known to be a perfect gift for a dear friend or loved one. Patchi is a combination of both Swiss and Belgium flavors.</p>
                        <h6 class="text-primary menu-price">$6.50</h6>
                      </div>
                    </div>

                  </div>
                  <div class="col-md-6 site-animate">
                    <div class="media menu-item">
                      <img class="mr-3" src="images/mm4.jpg" class="img-fluid" alt="Free Template by colorlib.com">
                      <div class="media-body">
                        <h5 class="mt-0">Lindt & Sprungli</h5>
                        <p>The Lindt & Sprungli chocolate brand is known all over the world for making the best white chocolate you have ever tasted.</p>
                        <h6 class="text-primary menu-price">$5.50</h6>
                      </div>
                    </div>

                    <div class="media menu-item">
                      <img class="mr-3" src="images/mm5.jpg" class="img-fluid" alt="Free Template by colorlib.com">
                      <div class="media-body">
                        <h5 class="mt-0">Ghirardelli</h5>
                        <p>Some of the main ingredients are milk, cream and cocoa. Who could resist such a sweet mixture made by the finest Italian craftsmen.</p>
                        <h6 class="text-primary menu-price">$9.00</h6>
                      </div>
                    </div>

                    <div class="media menu-item">
                      <img class="mr-3" src="images/mm6.jpg" class="img-fluid" alt="Free Template by colorlib.com">
                      <div class="media-body">
                        <h5 class="mt-0">Mars</h5>
                        <p>The number one spot, Mars brand. The Mars chocolate bars are the number one selling chocolate brand across the globe.</p>
                        <h6 class="text-primary menu-price">$8.50</h6>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="pills-lunch" role="tabpanel" aria-labelledby="pills-lunch-tab">
                <div class="row">
                  <div class="col-md-6 site-animate">

                    <div class="media menu-item">
                      <img class="mr-3" src="images/mn1.jpg" class="img-fluid" alt="Free Template by colorlib.com">
                      <div class="media-body">
                        <h5 class="mt-0">Twix Candy Bar</h5>
                        <p>Each twix candy bar has a crispy crunchy cookie, smooth creamy chocolate, and delicious chewy caramel. Weight 50gm each.</p>
                        <h6 class="text-primary menu-price">$2.38</h6>
                      </div>
                    </div>

                    <div class="media menu-item">
                      <img class="mr-3" src="images/mn2.jpg" class="img-fluid" alt="Free Template by colorlib.com">
                      <div class="media-body">
                        <h5 class="mt-0">Cadbury Dairy Milk</h5>
                        <p>Price is shown for one chocolate bar, please increase quantity before adding this product to your gift basket if you want to send more than one.</p>
                        <h6 class="text-primary menu-price">$2.25</h6>
                      </div>
                    </div>

                    <div class="media menu-item">
                      <img class="mr-3" src="images/mn3.jpg" class="img-fluid" alt="Free Template by colorlib.com">
                      <div class="media-body">
                        <h5 class="mt-0">Kinder Joy</h5>
                        <p>It can be a perfect gift for any chocolate lover. Kinder Joy chocolates are made from milky and cocoa spreads with 2 coated wafer biscuits, including a toy.</p>
                        <h6 class="text-primary menu-price">$2.13</h6>
                      </div>
                    </div>

                  </div>
                  <div class="col-md-6 site-animate">

                    <div class="media menu-item">
                      <img class="mr-3" src="images/mn4.jpg" class="img-fluid" alt="Free Template by colorlib.com">
                      <div class="media-body">
                        <h5 class="mt-0">Bohem assorted</h5>
                        <p>Order chocolate for your loved ones on birthday, anniversary, valentine’s day, father’s day, mother’s day and all other special occasion.</p>
                        <h6 class="text-primary menu-price">$15.10</h6>
                      </div>
                    </div>

                    <div class="media menu-item">
                      <img class="mr-3" src="images/mn5.jpg" class="img-fluid" alt="Free Template by colorlib.com">
                      <div class="media-body">
                        <h5 class="mt-0">Kinder bueno</h5>
                        <p>With a creamy hazelnut filling wrapped in a crispy wafer and smooth chocolate, Kinder Bueno is an indulgent taste without the full feeling afterwards.</p>
                        <h6 class="text-primary menu-price">$2.26</h6>
                      </div>
                    </div>

                    <div class="media menu-item">
                      <img class="mr-3" src="images/mn6.jpg" class="img-fluid" alt="Free Template by colorlib.com">
                      <div class="media-body">
                        <h5 class="mt-0">Toblerone Swiss</h5>
                        <p>Order this gift online for your loved ones to wish on birthday, anniversary, valentines day and all other gift occasions in Bangladesh.</p>
                        <h6 class="text-primary menu-price">$2.51</h6>
                      </div>
                    </div>

                    
                  </div>
                </div>
              </div>
                
              <div class="tab-pane fade" id="pills-dinner" role="tabpanel" aria-labelledby="pills-dinner-tab">
                <div class="row">
                  <div class="col-md-6 site-animate">

                    <div class="media menu-item">
                      <img class="mr-3" src="images/menu_2.jpg" class="img-fluid" alt="Free Template by colorlib.com">
                      <div class="media-body">
                        <h5 class="mt-0">Italian Sauce Mushroom</h5>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                        <h6 class="text-primary menu-price">$24.50</h6>
                      </div>
                    </div>

                    <div class="media menu-item">
                      <img class="mr-3" src="images/menu_1.jpg" class="img-fluid" alt="Free Template by colorlib.com">
                      <div class="media-body">
                        <h5 class="mt-0">Salted Fried Chicken</h5>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                        <h6 class="text-primary menu-price">$35.50</h6>
                      </div>
                    </div>

                    <div class="media menu-item">
                      <img class="mr-3" src="images/menu_3.jpg" class="img-fluid" alt="Free Template by colorlib.com">
                      <div class="media-body">
                        <h5 class="mt-0">Fried Potato w/ Garlic</h5>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                        <h6 class="text-primary menu-price">$14.50</h6>
                      </div>
                    </div>

                  </div>
                  <div class="col-md-6 site-animate">

                    <div class="media menu-item">
                      <img class="mr-3" src="images/menu_3.jpg" class="img-fluid" alt="Free Template by colorlib.com">
                      <div class="media-body">
                        <h5 class="mt-0">Fried Potato w/ Garlic</h5>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                        <h6 class="text-primary menu-price">$18.50</h6>
                      </div>
                    </div>

                    <div class="media menu-item">
                      <img class="mr-3" src="images/menu_2.jpg" class="img-fluid" alt="Free Template by colorlib.com">
                      <div class="media-body">
                        <h5 class="mt-0">Italian Sauce Mushroom</h5>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                        <h6 class="text-primary menu-price">$35.50</h6>
                      </div>
                    </div>

                    <div class="media menu-item">
                      <img class="mr-3" src="images/menu_1.jpg" class="img-fluid" alt="Free Template by colorlib.com">
                      <div class="media-body">
                        <h5 class="mt-0">Salted Fried Chicken</h5>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                        <h6 class="text-primary menu-price">$12.50</h6>
                      </div>
                    </div>

                    
                  </div>
                </div> -->
              </div>
            </div>

          </div>
        </div>
      </div>
    </section>
    <!-- END section -->
  <!--  News hide
    <section class="site-section bg-light" id="section-news">
      <div class="container">

        <div class="row">
          <div class="col-md-12 text-center mb-5 site-animate">
            <h2 class="display-4">News</h2>
            <div class="row justify-content-center">
              <div class="col-md-7">
                <p class="lead">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="media d-block mb-4 text-center site-media site-animate">
              <img src="images/offer_1.jpg" alt="Free Template by colorlib.com" class="img-fluid">
              <div class="media-body p-md-5 p-4">
                <h5 class="mt-0 h4">We Have Dilecious Food</h5>
                <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>

                <p class="mb-0"><a href="#" class="btn btn-primary btn-sm">Read More</a></p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="media d-block mb-4 text-center site-media site-animate">
              <img src="images/offer_2.jpg" alt="Free Template by colorlib.com" class="img-fluid">
              <div class="media-body p-md-5 p-4">
                <h5 class="mt-0 h4">Chef Special Menu</h5>
                <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>

                <p class="mb-0"><a href="#" class="btn btn-primary btn-sm">Read More</a></p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="media d-block mb-4 text-center site-media site-animate">
              <img src="images/offer_3.jpg" alt="Free Template by colorlib.com" class="img-fluid">
              <div class="media-body p-md-5 p-4">
                <h5 class="mt-0 h4">Merriage Celebrations</h5>
                <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>

                <p class="mb-0"><a href="#" class="btn btn-primary btn-sm">Read More</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>  News hide  
     END section 

    <section class="site-section" id="section-gallery">
      <div class="container">
        <div class="row site-custom-gutters">

          <div class="col-md-12 text-center mb-5 site-animate">
            <h2 class="display-4">Gallery</h2>
            <div class="row justify-content-center">
              <div class="col-md-7">
               <p class="lead">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              </div>
            </div>
          </div>

          <div class="col-md-4 site-animate">
            <a href="images/g1.jpg" class="site-thumbnail image-popup">
              <img src="images/g1.jpg" alt="Free Template by colorlib.com" class="img-fluid">
            </a>
          </div>
          <div class="col-md-4 site-animate">
            <a href="images/g2.jpg" class="site-thumbnail image-popup">
              <img src="images/g2.jpg" alt="Free Template by colorlib.com" class="img-fluid">
            </a>
          </div>
          <div class="col-md-4 site-animate">
            <a href="images/g3.JPG" class="site-thumbnail image-popup">
              <img src="images/g3.JPG" alt="Free Template by colorlib.com" class="img-fluid">
            </a>
          </div>

          <div class="col-md-4 site-animate">
            <a href="images/g4.JPG" class="site-thumbnail image-popup">
              <img src="images/g4.JPG" alt="Free Template by colorlib.com" class="img-fluid">
            </a>
          </div>
          <div class="col-md-4 site-animate">
            <a href="images/g5.jpg" class="site-thumbnail image-popup">
              <img src="images/g5.jpg" alt="Free Template by colorlib.com" class="img-fluid">
            </a>
          </div>
          <div class="col-md-4 site-animate">
            <a href="images/g6.jpg" class="site-thumbnail image-popup">
              <img src="images/g6.jpg" alt="Free Template by colorlib.com" class="img-fluid">
            </a>
          </div>

        </div>
      </div>
    </section>
     END section 

    <section class="site-section bg-light" id="section-contact">
      <div class="container">
        <div class="row">

          <div class="col-md-12 text-center mb-5 site-animate">
            <h2 class="display-4">Get In Touch</h2>
            <div class="row justify-content-center">
              <div class="col-md-7">
                <p class="lead">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              </div>
            </div>
          </div>

          <div class="col-md-7 mb-5 site-animate">
            <form action="" method="post">
              <div class="form-group">
                <label for="name" class="sr-only">Name</label>
                <input type="text" class="form-control" id="name" placeholder="Name">
              </div>
              <div class="form-group">
                <label for="email" class="sr-only">Email</label>
                <input type="text" class="form-control" id="email" placeholder="Email">
              </div>
              <div class="form-group">
                <label for="message" class="sr-only">Message</label>
                <textarea name="message" id="message" cols="30" rows="10" class="form-control" placeholder="Write your message"></textarea>
              </div>
              <div class="form-group">
                <input type="submit" class="btn btn-primary btn-lg" value="Send Message">
              </div>
            </form>
          </div>
          <div class="col-md-1"></div>
          <div class="col-md-4 site-animate">
            <p><img src="images/contact.jpg" alt="" class="img-fluid"></p>
            <p class="text-black">
              Address: <br> Fortune Shopping Mall, Mouchak, Dhaka <br> Bangladesh <br> <br>
              Phone: <br> 01728-075753 <br> <br>
              Email: <br> <a href="mailto:nazimuddin075753@gmail.com">nazimuddin075753@gmail.com</a>
            </p>

          </div>
          
        </div>
      </div>
    </section>
   <div id="map"></div>
<div><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d20353.964612337462!2d90.41266666890219!3d23.741561428502592!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b95be5d7de05%3A0x19dcf1c2e97b2e94!2sFortune%20Shopping%20Mall!5e1!3m2!1sen!2sbd!4v1574656808386!5m2!1sen!2sbd" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe></div>
    END section -->
    

    <footer class="site-footer site-bg-dark site-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-12">
            <div class="row">
              <div class="col-md-4 site-animate">
                <h2 class="site-heading-2">About Us</h2>
                <p>In our shop, Customer find Various types of chocolate, Candy and branded chocolate which price is reasonable. So, Visit our website to buy your favourite chocolates.</p>
              </div>
              <div class="col-md-1"></div>
              <div class="col-md-3 site-animate">
                <div class="site-footer-widget mb-4">
                  <h2 class="site-heading-2">Chocolate Shop</h2>
                  <ul class="list-unstyled">
                    <li><a href="#" class="py-2 d-block">About Us</a></li>
                    <li><a href="#" class="py-2 d-block">History</a></li>
                    <li><a href="#" class="py-2 d-block">Events</a></li>
                    <li><a href="#" class="py-2 d-block">Contact</a></li>
                  </ul>
                </div>
              </div>
              <div class="col-md-2 site-animate">
                 <div class="site-footer-widget mb-4">
                  <h2 class="site-heading-2">Our collection</h2>
                  <ul class="list-unstyled">
                    <li><a href="#" class="py-2 d-block">Chocolate Boxes</a></li>
                    <li><a href="#" class="py-2 d-block">Chocolate Bars</a></li>
                    <li><a href="#" class="py-2 d-block">Sharing packs</a></li>
                    <li><a href="#" class="py-2 d-block">Birthdays</a></li>
                    <li><a href="#" class="py-2 d-block">Say "Thankyou"</a></li>
                  </ul>
                </div>
              </div>
              <div class="col-md-2 site-animate">
                 <div class="site-footer-widget mb-4">
                  <h2 class="site-heading-2">Experience</h2>
                  <ul class="list-unstyled">
                    <li><a href="#" class="py-2 d-block">Introducing</a></li>
                    <li><a href="#" class="py-2 d-block">Book Now</a></li>
                    <li><a href="#" class="py-2 d-block">Parties</a></li>
                    <li><a href="#" class="py-2 d-block">School Tours</a></li>
                    <li><a href="#" class="py-2 d-block">Reviews</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
         
        </div>
        <div class="row site-animate">
           <div class="col-md-12 text-center">
            <div class="site-footer-widget mb-4">
              <ul class="site-footer-social list-unstyled ">
                <li class="site-animate"><a href="https://twitter.com/"><span class="icon-twitter"></span></a></li>
                <li class="site-animate"><a href="https://www.facebook.com/"><span class="icon-facebook"></span></a></li>
                <li class="site-animate"><a href="https://www.instagram.com/"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-12 text-center">
            <p>&copy; <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Crazy Engineers</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>

    
    
 
    <!-- Modal 
    <div class="modal fade" id="reservationModal" tabindex="-1" role="dialog" aria-labelledby="reservationModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-body">
            <div class="row">
              <div class="col-lg-12">
                <div class="bg-image" style="background-image: url(images/signup.jpg);"></div>
              </div>
              <div class="col-lg-12 p-5">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <small>CLOSE </small><span aria-hidden="true">&times;</span>
                </button>
                <!-- 
                <h1 class="mb-4">Reserve A Table</h1>   
                <form action="main.php" method="POST">
                   
                  <div class="row">
                    <div class="col-md-6 form-group">
                      <label for="m_fname">Name</label>
                      <input type="text" name="name" class="form-control" id="m_fname">
                    </div>  
                    <div class="col-md-6 form-group">
                      <label for="m_lname">Address</label>
                      <input type="text" name="address" class="form-control" id="m_lname">
                    </div> 
                  </div>
                  
                    <div class="row">
                    <div class="col-md-6 form-group">
                      <label for="m_fname">Phone Number</label>
                      <input type="text" name="phone" class="form-control" id="m_fname">
                    </div>  
                    <div class="col-md-6 form-group">
                      <label for="m_lname">Email</label>
                      <input type="email" name="email" class="form-control" id="m_lname">
                    </div> 
                  </div>
                  
                  <div class="row">
                    <div class="col-md-6 form-group">
                      <label for="m_email">Password</label>
                      <input type="password" name="pass" class="form-control" id="m_email">
                    </div>
                    <div class="col-md-6 form-group">
                      <label for="m_email">Confirm Password</label>
                      <input type="password" name="cpass" class="form-control" id="m_email">
                    </div>
                  </div>  
                  <div class="row">
                    <div class="col-md-6 form-group">
                      <label for="m_people">How Many People</label>
                      <select name="" id="m_people" class="form-control">
                        <option value="1">1 People</option>
                        <option value="2">2 People</option>
                        <option value="3">3 People</option>
                        <option value="4+">4+ People</option>
                      </select>
                    </div>
                    <div class="col-md-6 form-group">
                      <label for="m_phone">Phone</label>
                      <input type="text" class="form-control" id="m_phone">
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-6 form-group">
                      <label for="m_date">Date</label>
                      <input type="text" class="form-control" id="m_date">
                    </div>
                    <div class="col-md-6 form-group">
                      <label for="m_time">Time</label>
                      <input type="text" class="form-control" id="m_time">
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-12 form-group">
                      <label for="m_message">Message</label>
                      <textarea class="form-control" id="m_message" cols="30" rows="7"></textarea>
                    </div>
                  </div>  
                  
                  <div class="row">
                    <div class="col-md-12 form-group">
                      <input type="submit" name="reg" class="btn btn-primary btn-lg btn-block" value="Sign Up">
                    </div>
                  </div>

                </form>
              </div>
            </div>
            
          </div>
        </div>
      </div>
    </div>

    <!-- END Modal -->
    <!-- modal 2 
    
       <div class="modal fade" id="reservationModaln" tabindex="-1" role="dialog" aria-labelledby="reservationModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-body">
            <div class="row">
              <div class="col-lg-12">
                <div class="bg-image" style="background-image: url(images/login.jpg);"></div>
              </div>
              <div class="col-lg-12 p-5">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <small>CLOSE </small><span aria-hidden="true">&times;</span>
                </button>
                <!-- 
                <h1 class="mb-4">Reserve A Table</h1>   
                <form action="main.php" method="post">
                   
                  <div class="row">
                    <div class="col-md-6 form-group">
                      <label for="m_fname">Email</label>
                      <input type="email" name="email" class="form-control" id="m_fname">
                    </div>  
                    <div class="col-md-6 form-group">
                      <label for="m_lname">Password</label>
                      <input type="password" name="pass" class="form-control" id="m_lname">
                    </div> 
                  </div>
                  <!--  
                    <div class="row">
                    <div class="col-md-6 form-group">
                      <label for="m_fname">Address</label>
                      <input type="text" class="form-control" id="m_fname">
                    </div>  
                    <div class="col-md-6 form-group">
                      <label for="m_lname">Phone Number</label>
                      <input type="text" class="form-control" id="m_lname">
                    </div> 
                  </div>
                  
                  <div class="row">
                    <div class="col-md-12 form-group">
                      <label for="m_email">Email</label>
                      <input type="email" class="form-control" id="m_email">
                    </div>
                  </div>   -->  <!-- 
                  <div class="row">
                    <div class="col-md-6 form-group">
                      <label for="m_people">How Many People</label>
                      <select name="" id="m_people" class="form-control">
                        <option value="1">1 People</option>
                        <option value="2">2 People</option>
                        <option value="3">3 People</option>
                        <option value="4+">4+ People</option>
                      </select>
                    </div>
                    <div class="col-md-6 form-group">
                      <label for="m_phone">Phone</label>
                      <input type="text" class="form-control" id="m_phone">
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-6 form-group">
                      <label for="m_date">Date</label>
                      <input type="text" class="form-control" id="m_date">
                    </div>
                    <div class="col-md-6 form-group">
                      <label for="m_time">Time</label>
                      <input type="text" class="form-control" id="m_time">
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-12 form-group">
                      <label for="m_message">Message</label>
                      <textarea class="form-control" id="m_message" cols="30" rows="7"></textarea>
                    </div>
                  </div>  
                  
                  <div class="row">
                    <div class="col-md-12 form-group">
                      <input type="submit" name="login" class="btn btn-primary btn-lg btn-block" value="Log In">
                    </div>
                  </div>

                </form>
              </div>
            </div>
            
          </div>
        </div>
      </div>
    </div>
    
     END Modal2 -->

    <!-- loader -->
    <div id="site-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>

    <script src="js/bootstrap-datepicker.js"></script>
    <script src="js/jquery.timepicker.min.js"></script>
    
    <script src="js/jquery.animateNumber.min.js"></script>
    

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="js/google-map.js"></script>

    <script src="js/main.js"></script>

  </body>
</html>