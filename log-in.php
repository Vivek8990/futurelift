<?php
  
session_start();?>




<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
  
  
  
  
    <!-- Font Awesome CDN Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    
    <script src="https://kit.fontawesome.com/c9c459e62c.js" crossorigin="anonymous"></script>
  
    <!-- General Initialization -->
    <script src="js/general.js" type="text/javascript"> </script>
    
    <!-- Bootsrtap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" ></script>
  
    <!-- Custome CSS Link -->
    <link rel="stylesheet" href="css/style.css">
  
    <!-- swiper js -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
    <title>Future Lift</title>
  </head>
  

<body>
  <!-- Header Section Start -->
  <header class="header" >
    <a href="index.html" class="logo"><img src="images/logoBrand-01.png" alt=""></a>
    <nav class="navbar">
      <div class="user">
        <i class="fas fa-user"></i>
      </div>
      <a href="career.html" class="active">Career Solutions</a>
      <a href="explore-colleges.html" class="active">explore colleges</a>
      <a href="" class="active"> partner</a>
      <a href="admission.html" class="active">admission</a>
      <div class="dropdown">
        <a herf="" type="button" class=" active dropdown-toggle" data-bs-toggle="dropdown">
          more
        </a>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="#">Colleges</a></li>
          <li><a class="dropdown-item" href="#">counseler</a></li>
          <li><a class="dropdown-item" href="#">news</a></li>
        </ul>
      </div>
      <?php if($login){?>
       
        <a  href="#" class="active"><?php  echo ($data['email_id']);?></a>
        <a class="active" href="functions.php?logout">Signout</a><?php }
       ?>
       <div class="btnGroup">
         <?php if(!$login){ ?>
         <a href="log-in.php" class="btn btn-sign">log in</a>
         <a href="sign-up.php" class="btn">sign up</a>
         <?php    
         } 
         ?>



      <div class="btnGroup">
        <a href="log-in.html" class="btn btn-sign">log in</a>
        <a href="sign-up.html" class="btn">sign up</a>
      </div>
    </nav>
    <i class="fas fa-bars" id="manu-bars"></i>
  </header>

  <!-- Header Section End -->

  <section class="form-section" id="form-section">
    <div class="formBox ">
      <div class="formContainer">
        <div class="boxForm">
          <div class="imgBox1">
            <img src="images/signup.png" alt="">
          </div>
          <h1 style="color: #fff;" class="text-center my-3">Welcome Back</h1>
          <div class="imgBox2">
            <img src="images/logoBrand-01.png" alt="">
          </div>
        </div>
        <div class="signBox">
          <h1>sign in</h1>
          <form action="sign-up.html" class="text-center">
            <div class="form-group ">
              <div class="row ">
                <div class="col-2">
                  <label for="" class="form-label"><i class="fa fa-user"></i></label>
                </div>
                <div class="col-10">
                  <input type="text" name="name" class="form-control" placeholder="name" id="user" autocomplete="off">
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="row">
                <div class="col-2">
                  <label for="Email" class="form-label"><i class="fa fa-envelope"></i></label>
                </div>
                <div class="col-10">
                  <input type="email" name="email" class="form-control" placeholder="Email" id="emails" autocomplete="off">
                </div>
              </div>
              
            </div>
            <div class="form-group">
              <div class="row">
                <div class="col-2">
                  <label for="password" class="form-label"><i class="fa fa-lock"></i></label>
                </div>
                <div class="col-10">
                  <input type="password" name="password" class="form-control" placeholder="password" id="pass" autocomplete="off">
                </div>
                
              </div>
            </div>
            
            <p class=" text-center"> have not an account?<a href="sign-up.html">sign up</a></p>
            <button type="submit" class="btn text-center">Submit</button>
            <a href="" class="linkForgt">forgot password?</a>
          </form>
          <?php
          if(isset($_SESSION['msg'])){
              foreach($_SESSION['msg'] as $message){
                  ?>
          <div class="alert alert-danger" role="alert">
          <?=$message?>
          </div>
                  <?php
              }
          }
              ?>
        </div>
      </div>
    </div>
    <!-- <div class="round"></div> -->
  </section>

  <!-- footer start -->
  <footer id="footer" class="footer-area section-padding">
    <div class="container">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12 footer_div" data-wow-delay="0.2s">
            <div class="footer-logo mb-3">
              <img src="images/logoBrand-01.png" alt="" class="img-fluid">
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12 footer_div" data-wow-delay="0.4s">
            <h3 class="footer-titel">quick links</h3>
            <ul>
              <li><a href="about.html">about us</a></li>
              <li><a href="">FAQs</a></li>
              <li><a href="policy.html">privacy policy</a></li>
              <li><a href="refund_cancelletion.html">refunds & cancellations</a></li>
            </ul>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12 footer_div" data-wow-delay="0.6s">
            <h3 class="footer-titel">our services</h3>
            <ul>
              <li><a href="#">Career</a></li>
              <li><a href="#">Team</a></li>
              <li><a href="#">Clients</a></li>
            </ul>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12 footer_div" data-wow-delay="0.8s">
            <h3 class="footer-titel">Find us on</h3>
            <div class="social-icon">
              <a href="https://www.facebook.com/Future-Lift-Education-PVT-LTD-112127913993548/"><i class="fab fa-facebook-square"></i></a>
              <a href="https://instagram.com/futurelift_education?utm_medium=copy_link"><i class="fab fa-instagram-square"></i></a>
              <a href=" https://twitter.com/Futurelift_edu?s=09"><i class="fab fa-twitter-square"></i></a>
              <a href="https://youtube.com/channel/UCvY_1Aon-HqSHzqWwvIU2zQ"><i class="fab fa-youtube-square"></i></a>
              <a href="https://www.linkedin.com/company/futurelift-duication"><i class="fab fa-linkedin"></i></a>
            </div>
          </div>
        </div>
      </div>  
    </div>     
  </footer> 
  <!-- footer end -->

  <section id="copyright">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <p>Copyright © 2022 future lift All Right Reserved</p>
        </div>
      </div>
    </div>
  </section>

  <script src="js/script.js"></script>
 
</body>

</html>