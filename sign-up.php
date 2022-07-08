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
    
    <script src="https://kit.fontawesome.com/c9c459e62c.js"></script>
  
    <!-- General Initialization -->
    <!-- <script src="js/general.js" type="text/javascript"></script> -->
    
    <!-- Bootsrtap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" ></script>
  
    <!-- Custome CSS Link -->
    <link rel="stylesheet" href="css/style.css">
  
    <!-- swiper js -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
    <title>Future Lift signup</title>
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
        <a class="active" href="functions.php?logout">Signout</a> <?php }
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

  <!-- sign up form start -->
  
  
  <section class="form-section" id="form-section">
    <div class="formBox">
      <div class="formContainer">
        <div class="boxForm">
          <div class="imgBox1">
            <img src="images/signup.png" alt="">
          </div>
          <h1 style="color: #fff;" class="text-center my-3">Welcome to</h1>
          <div class="imgBox2">
            <img src="images/newlogo.png" alt="">
          </div>
        </div>
        <div class="signBox">
          <h1>sign up</h1>
          <form action="functions.php?signup" onsubmit="return validation()" class="text-center" method="post">
            <div class="form-group ">
              <div class="row ">
                <div class="col-2">
                  <label for="" class="form-label"><i class="fa fa-user"></i></label>
                </div>
                <div class="col-10">
                  <input type="text" name="name" class="form-control" placeholder="name" id="user" autocomplete="off">
                </div>
                <span id="username" class="text-dark"></span>
              </div>
            </div>
            <div class="form-group">
              <div class="row">
                <div class="col-2">
                  <label for="Email" class="form-label"><i class="fa fa-envelope"></i></label>
                </div>
                <div class="col-10">
                  <input type="email" name="email" class="form-control" placeholder="Email" id="emails"
                    autocomplete="off">
                </div>
              </div>
              <span id="mailids" class="text-dark"></span>
            </div>
            <div class="form-group">
              <div class="row">
                <div class="col-2">
                  <label for="mobile" class="form-label text-center"><i class="fa fa-mobile"></i></label>
                </div>
                <div class="col-10">
                  <input type="text" name="mobile" class="form-control" placeholder="mobile" autocomplete="off"
                    id="mobile"  maxlength="10">
                </div>
                <span id="mobileNum" class="text-dark"></span>
              </div>
            </div>
            <div class="form-group">
              <div class="row">
                <div class="col-2">
                  <label for="password" class="form-label"><i class="fa fa-lock"></i></label>
                </div>
                <div class="col-10">
                  <input type="password" name="password" class="form-control" placeholder="password" id="pass"
                    autocomplete="off">
                </div>
                <span id="password" class="text-dark"></span>
              </div>
            </div>
            <div class="form-group">
              <div class="row ">
                <div class="col-2">
                  <label for="conpassword" class="form-label"><i class="fa fa-lock"></i></label>
                </div>
                <div class="col-10">
                  <input type="password" name="cfn_password" class="form-control" placeholder="confirm password" id="conPas"
                    autocomplete="off">
                </div>
                <span id="confirmPasword" class="text-dark"></span>
              </div>
            </div>
            <div class="form-group">
              <div class="row ">
                <div class="col-2">
                <label for="" class="form-label"><i class="fa fa-user"></i></label>
                </div>
                <div class="col-10">
                  <input type="text" name="refercode" class="form-control" placeholder="Refer code (Optional)" id="conPas"
                    autocomplete="off">
                </div>
                
              </div>
            </div>
            <p class=" text-center"> have an account?<a href="log-in.php">log in</a></p>
            <button type="submit" class="btn">Submit</button>
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
  </section>
  <!-- signup form end -->

<!-- footer start -->
<footer id="footer" class="footer-area section-padding">
  <div class="container">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12 footer_div" data-wow-delay="0.2s">
          <div class="footer-logo mb-3">
            <img src="images/newlogo.png" alt="" class="img-fluid">
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

  <script src="js/script.js"></script>
  

  
</body>

</html>