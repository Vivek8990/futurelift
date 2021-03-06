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
    <title>Future Lift scholership</title>
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
          <div class="imgBox2">
            <img src="images/newlogo.png" alt="">
          </div>
          <div class="imgBox1">
            <img src="images/Scholarship-01.png" alt="">
          </div>
          <h1 style="color: #fff;" class="text-center my-3">scholership</h1>
        </div>
        <div class="signBox">
          <h1>student</h1>
          <form action="functions.php?scholership" class="text-center" method="post">
            <div class="form-group ">
              <div class="row ">
                <div class="col-2">
                  <label for="" class="form-label"><i class="fa fa-user"></i></label>
                </div>
                <div class="col-10">
                  <input type="text" name="fullname" class="form-control" required placeholder="fullname"autocomplete="off">
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="row">
                <div class="col-2">
                  <label for="Email" class="form-label"><i class="fa fa-envelope"></i></label>
                </div>
                <div class="col-10">
                  <input type="email" name="email" class="form-control" placeholder="Email" id="emails"
                    autocomplete="off" required>
                </div>
              </div>
              <span id="mailids" class="text-dark"></span>
            </div>
            <div class="form-group">
              <div class="row">
                <div class="col-2">
                  <label for="password" class="form-label text-center"><i class="fa fa-pass"></i></label>
                </div>
                <div class="col-10">
                  <input type="password" name="password" class="form-control" placeholder="password" autocomplete="off"
                    id="password" required>
                </div>
                <span id="password" class="text-dark"></span>
              </div>
            </div>
            <div class="form-group">
              <div class="row">
                <div class="col-2">
                  <label for="mobile" class="form-label text-center"><i class="fa fa-mobile"></i></label>
                </div>
                <div class="col-10">
                  <input type="number" name="mobile" class="form-control" placeholder="mobile" autocomplete="off"
                    id="mobile" required>
                </div>
                <span id="mobileNum" class="text-dark"></span>
              </div>
            </div>
            <div class="form-group">
              <div class="row">
                <div class="col-2">
                  <label for="admission" class="form-label"><i class="fa fa-id-card"></i></label>
                </div>
                <div class="col-10">
                  <input type="text" name="admission" class="form-control" placeholder="admission iD" required
                    autocomplete="off">
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="row ">
                <div class="col-2">
                  <label for="hspersentage" class="form-label"><i class="fa fa-percent"></i></label>
                </div>
                <div class="col-10">
                  <input type="text" name="hspersentage" class="form-control" placeholder="10+2 persentage" required
                    autocomplete="off">
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="row ">
                <div class="col-2">
                  <label for="collegeName" class="form-label"><i class="fa fa-university"></i></label>
                </div>
                <div class="col-10">
                  <input type="text" name="collegeName" class="form-control" placeholder="college name"required
                    autocomplete="off">
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="row ">
                <div class="col-2">
                  <label for="courese" class="form-label"><i class="fa fa-file-text-o"></i></label>
                </div>
                <div class="col-10">
                  <input type="text" name="courese" class="form-control" placeholder="course name" required
                    autocomplete="off">
                </div>
              </div>
            </div>
            <button type="submit" class="btn">Submit</button>
            <p class=" text-center"><a href="refer_earn_TC.php">terms & conditions</a></p>
          
          </form>
          <br>
          
          <?php print_r( $_SESSION['msg'][0]); ?>
        </div>
      </div>
    </div>
  </section>
  <section class="timeline">
    <div class="container">
      <h1 class="heading text-center"> how it's work?</h1>
      <div class="main-timeline">

        <!-- start experience section-->
        <div class="timeline">
            <div class="icon"></div>
            <div class="date-content">
                <div class="date-outer">
                    <span class="date">
                            <span class="month">Step 1</span>
                    <!-- <span class="year">2013</span> -->
                    </span>
                </div>
            </div>
            <div class="timeline-content">
                <h5 class="title">Apply for Scholarship</h5>
                <p class="description">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed efficitur ex sit amet massa scelerisque scelerisque. Aliquam erat volutpat. Aenean interdum finibus efficitur. Praesent dapibus dolor felis, eu ultrices elit molestie.
                </p>
            </div>
        </div>
        <!-- end experience section-->
  
        <!-- start experience section-->
        <div class="timeline">
            <div class="icon"></div>
            <div class="date-content">
                <div class="date-outer">
                    <span class="date">
                            <span class="month">Step 2</span>
                    <!-- <span class="year">2015</span> -->
                    </span>
                </div>
            </div>
            <div class="timeline-content">
                <h5 class="title">Check Eligibility Avail Scholarship</h5>
                <p class="description">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed efficitur ex sit amet massa scelerisque scelerisque. Aliquam erat volutpat. Aenean interdum finibus efficitur. Praesent dapibus dolor felis, eu ultrices elit molestie.
                </p>
            </div>
        </div>
        <!-- end experience section-->
  
        <!-- start experience section-->
        <div class="timeline">
            <div class="icon"></div>
            <div class="date-content">
                <div class="date-outer">
                    <span class="date">
                            <span class="month">Step 3</span>
                    <!-- <span class="year">2016</span> -->
                    </span>
                </div>
            </div>
            <div class="timeline-content">
                <h5 class="title">Pay the first Installment</h5>
                <p class="description">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed efficitur ex sit amet massa scelerisque scelerisque. Aliquam erat volutpat. Aenean interdum finibus efficitur. Praesent dapibus dolor felis, eu ultrices elit molestie.
                </p>
            </div>
        </div>
        <!-- end experience section-->
  
        <!-- start experience section-->
        <div class="timeline">
            <div class="icon"></div>
            <div class="date-content">
                <div class="date-outer">
                    <span class="date">
                            <span class="month">Step 4</span>
                    <!-- <span class="year">2018</span> -->
                    </span>
                </div>
            </div>
            <div class="timeline-content">
                <h5 class="title">Scholarship Approval</h5>
                <p class="description">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed efficitur ex sit amet massa scelerisque scelerisque. Aliquam erat volutpat. Aenean interdum finibus efficitur. Praesent dapibus dolor felis, eu ultrices elit molestie.
                </p>
            </div>
        </div>
        <!-- end experience section-->
      </div>
    </div>
  </section>
  
    
    
  </div>
  <!-- signup form end -->

<!-- Footer Start -->
<footer class="footer">
  <div class="row">
    <div class="main-first d-flex flex-wrap align-items-center">
      <div class="main1 col-3">
          <a href="index.php" class="logo"><img src="images/newlogo.png" alt=""></a>
      </div>
      <div class="footerHead col-3">
          <h4 class="text-light ">quick links</h4>
          <ul>
              <li><a href="about.php">about us</a></li>
              <li><a href="">FAQs</a></li>
              <li><a href="policy.php">privacy policy</a></li>
              <li><a href="refund_cancelletion.php">refunds & cancellations</a></li>
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
  <script src="js/script.js"></script>
  

  
</body>

</html>