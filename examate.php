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

  <!-- Bootsrtap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

  <!-- Custome CSS Link -->
  <link rel="stylesheet" href="css/style.css">

  <!-- swiper js -->
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
  <title>examate</title>
</head>

<body>
  

  <!-- Header Section Start -->
  <header class="header" >
    <a href="index.php" class="logo"><img src="images/logoBrand-01.png" alt=""></a>
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

  <!-- Home Section Start -->
  <section class="return" id="retun_home">
    <div class="d-flex justify-content-center align-items-center">
        <img src="images/examate.png" alt="" class="img-fluid">
    </div>
   
    <div class="container-fluid">
        <div class="allBtn">
            <div class="btn-group">
                <a href="index.php" class="homebtn">home</a><span>/</span><a href="" class="homebtn">career crown</a>
            </div>
            <div class="btn-group">
                <a href="" class="homebtn">free counselling</a>
            </div>
            
        </div>
    </div>
</section>
<!-- cominig soon -->
<section class="commingSoong" id="commingSoon">
    <h1 class="landingExamate text-center">404 error</h1>
    <p class="examatePara">comming soon</p>
</section>
  




  <!-- footer Start -->
  <footer class="footer">
    <div class="row">
      <div class="main-first d-flex flex-wrap align-items-center">
        <div class="main1 col-3">
            <a href="index.php" class="logo"><img src="images/logoBrand-01.png" alt=""></a>
        </div>
        <div class="footerHead col-3">
            <h4 class="text-light ">quick links</h4>
            <ul>
                <li><a href="about.html">about us</a></li>
                <li><a href="">FAQs</a></li>
                <li><a href="policy.html">privacy policy</a></li>
                <li><a href="refund_cancelletion.html">refunds & cancellations</a></li>
            </ul>
        </div>
        <div class="footerHead col-3">
            <h4 class="text-light">our services</h4>
            <ul>
                <li><a href="">contact us</a></li>
                <li><a href="">....</a></li>
                <li><a href="">....</a></li>
            </ul>
        </div>
        <div class="main2 col-3">
            <a href="https://www.facebook.com/Future-Lift-Education-PVT-LTD-112127913993548/"><i class="fab fa-facebook-square"></i></a>
            <a href="https://instagram.com/futurelift_education?utm_medium=copy_link"><i class="fab fa-instagram-square"></i></a>
            <a href=" https://twitter.com/Futurelift_edu?s=09"><i class="fab fa-twitter-square"></i></a>
            <a href="https://youtube.com/channel/UCvY_1Aon-HqSHzqWwvIU2zQ"><i class="fab fa-youtube"></i></a>
            <a href="https://www.linkedin.com/company/futurelift-duication"><i class="fab fa-linkedin"></i></a>

        </div>
    </div>
  </div>
    <hr>
    <p>copyrights&copy;<span> future lift</span>-2022</p>
</footer>
  <!-- Footer End -->








  <!-- Swiper JS -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  <script src="js/script.js"></script>

  <script>

  </script>

</body>

</html>