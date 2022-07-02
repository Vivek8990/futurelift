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
    <title>terms and conditions</title>
    <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
    <!-- Font Awesome CDN Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- Font Awesome Web Font Icons-->
    <link href="css/font-awesome.min.css" type="text/css" rel="stylesheet" media="screen" />


    <!-- Bootsrtap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Custome CSS Link -->
    <link rel="stylesheet" href="css/style.css">

    <!-- swiper js -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
</head>

<body>
    <!-- Header Section Start -->
    <header class="header" >
        <a href="index.php" class="logo"><img src="images/newlogo.png" alt=""></a>
        <nav class="navbar">
          <div class="user">
            <i class="fas fa-user"></i>
          </div>
          <a href="career.php" class="active">Career Solutions</a>
          <a href="explore-colleges.php" class="active">explore colleges</a>
          <a href="" class="active"> partner</a>
          <a href="admission.php" class="active">admission</a>
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
           </div>
        </nav>
        <i class="fas fa-bars" id="manu-bars"></i>
      </header>

    <!-- Header Section End -->


    <!-- About Section Start -->
    <section class="policy" id="policy">
        <div class="container">
            <h1 class="heading">terms and conditions</h1>
            <hr>
            <p>Your friend must not have registered with us before</p>
            <p>The phone number which your friend will use to sign up shouldn’t have been used earlier for a Future Lift
                transaction.</p>
            <p>Future LiftWebsite should not be installed using App runtime for Chrome, emulators or simulators.</p>
            <p>It is only for the users based in India. The mobile number provided to receive OTP should be an Indian
                mobile number.</p>
            <p>If your friend uses someone else’s referral code, the person whose referral code is used will get the
                benefits even if you had referred him/her first.</p>
            <p>earned from Refer & Earn will be credited to Future Lift Wallet as “My Points”.</p>
            <p><strong>Points have validity. Please check this information in the Future Lift Wallet section. If unutilized,points will cease to exist & will not be renewed.</strong></p>
            <p>Points can neither be exchanged nor be transferred.</p>
            <p>Only registered users can use My Points.</p>
            <p>The maximum referral bonus that can be earned by a referrer is capped and may differ for each referral
                offer.</p>
            <p>You cannot add funds directly to your Future Lift wallet account. Only referral amount will get added to
                the wallet.</p>
            <p>Future Lift reserves all rights to change the amounts conferred under Refer and Earn program at any point
                in time.</p>
            <p>Points can neither be exchanged nor be transferred.</p>
            <p>Only registered users can use My Points</p>
            <p>The maximum referral bonus that can be earned by a referrer is capped and may differ for each referral
                offer.</p>
            <p>You cannot add funds directly to your Future Lift wallet account. Only referral amount will get added to
                the wallet.</p>
            <p>Future Lift reserves all rights to change the amounts conferred under Refer and Earn program at any point
                in time.</p>
            <p>Future Lift may suspend or terminate the Refer and Earn program or any user’s ability to participate in
                the program at any time for any reason at their discretion. Points earned as a result of fraudulent
                activities will be revoked and deemed invalid.</p>
            <p>Future Lift reserves the right to amend these terms and conditions at any time without any prior notice.
                Modifications of these terms will be effective from the time they are updated in the Terms and
                Conditions section.</p>
        </div>
    </section>

    <!-- footer Start -->

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
              <li><a href="about.php">about us</a></li>
              <li><a href="">FAQs</a></li>
              <li><a href="policy.php">privacy policy</a></li>
              <li><a href="refund_cancelletion.php">refunds & cancellations</a></li>
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
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="js/script.js"></script>
</body>

</html>