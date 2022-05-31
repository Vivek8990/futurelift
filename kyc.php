<?php 
session_start();
$login = $_SESSION['userIsLoggedIn'];
$data=$_SESSION['userdata'];

?>




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
  <link href="aos/aos.css" rel="stylesheet">

  <!-- Bootsrtap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Bootstrap JS --> 
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

  <!-- Custome CSS Link -->
  <link rel="stylesheet" href="css/style.css">
  <!-- aos css -->
  <link rel="stylesheet" href="aos/aos.css">

  <!-- swiper js -->
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
  <title>Future Lift kyc part</title>
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
          <li><a class="dropdown-item" href="counselerForm.html">counseler</a></li>
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

  <section class="kycPart" id="identification">
    <div class="container">
        <div class="row">
            <h1 class="heading text-center">complete your KYC</h1>
            <div class="kyc_form mt-5">
                <div class="kycImg p-4">
                    <figure>
                        <img src="images/kyc-01.png" alt="" class="img-fluid" style="width: 300px;">
                    </figure>
                </div>
                <form action="referandearnsharecode.html" class="kycForm" >
                    <fieldset>
                        <legend>upload your aadhar</legend>
                        <div class="input-group">
                            <input type="file" class="form-control" required id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload">
                          </div>
                    </fieldset>
                    <fieldset>
                      <legend>your pan card</legend>
                      <div class="input-group">
                          <input type="file" class="form-control" required id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload">
                          
                        </div>
                  </fieldset>
                  <fieldset>
                    <legend>your pan number</legend>
                    <div class="input-group">
                        <input type="number" class="form-control" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload">
                        
                      </div>
                </fieldset>
                  <button class="btn btn-outline-secondary mt-3" type="submit" id="inputGroupFileAddon04">submit</button>
                </form>
                
            </div>
        </div>
    </div>
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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="aos/aos.js"></script>
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  <script src="js/script.js"></script>
  
</body>
</html>