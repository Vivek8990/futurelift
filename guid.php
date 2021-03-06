<?php

require_once 'functions.php';
$login = $_SESSION['userIsLoggedIn'];
$data=$_SESSION['userdata'];
// $courses= getCollegeGroupByCategoury();
 $collage = getCollegeByRank();
 $blog = getBlog();
 $city = getcity();
$State = getstate();
$degreelist = getdegreelists();

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
    <title>Future Lift Guidline</title>
</head>
<body>
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
              <li><a class="dropdown-item" href="counselerForm.html">counseler</a></li>
              <li><a class="dropdown-item" href="#">news</a></li>
            </ul>
          </div>
          <div class="btnGroup">
            <a href="log-in.html" class="btn btn-sign">log in</a>
            <a href="sign-up.html" class="btn">sign up</a>
          </div>
        </nav>
        <i class="fas fa-bars" id="manu-bars"></i>
      </header>

      <section class="return" id="retun_home">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-6 col-sm-12 homebanner">
                    <img src="images/Group 71.png" alt="" class="img-fluid">
                    <h2 class="heading counselling_heading afterHead4">future lift guidance</h2>
                </div>
            </div>
        </div>
    </section>
    <section class="counsellingFormPart" id="careerCounsellingFormPart">
        <div class="container">
            <div class="row">
                <div class="col-10 careerFormPart">
                    <form action="">
                        <div class="mb-3">
                            <label for="First-Name" class="form-label">Name</label>
                            <input type="text" class="form-control" placeholder="Name" required>
                        </div>
                        <div class="mb-3">
                            <label for="MobileNumber" class="form-label">Mobile Number</label>
                            <input type="mobile" class="form-control" placeholder="Mobile Number" required>
                        </div>
                        <div class="mb-3">
                            <label for="EmailId" class="form-label">Email Id</label>
                            <input type="email" class="form-control" placeholder="Email Id" required>
                        </div>
                        
                        <div class="mb-3">
                            <label for="Education" class="form-label">state</label>
                            <select for="state" class="form-select">state
                            <option value="">Select Your State</option>
            <?php      while($row =mysqli_fetch_array($State,MYSQLI_ASSOC))

{
    echo "	 
          <option value='".$row['state_name']."'>".$row['state_name']."</option>
          ";
        } ?> 
                            </select>
                        </div>
                        <div class="mb-3">
                          <label for="Education" class="form-label">city</label>
                          <select for="Education" class="form-select">
                          <option>Select Your City</option>
    <?php      while($row =mysqli_fetch_array($city,MYSQLI_ASSOC))

  {
			echo "	 
            <option value='".$row['city_name']."'>".$row['city_name']."</option>
            ";
          } ?> 
                          </select>
                      </div>
                        <div class="mb-3">
                          <label for="Education" class="form-label">course</label>
                          <select for="Education" class="form-select">
                          <option value="">Select Course</option>
            <?php      while($row =mysqli_fetch_array($degreelist,MYSQLI_ASSOC))

{
    echo "	 
          <option value='".$row['degree_name']."'>".$row['degree_name']."</option>
          ";
        } ?> 
                          </select>
                      </div>
                        <button type="submit" class="btn center-block"> submit</button>
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
              <img src="images/newlogo.png" alt="" class="img-fluid">
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
          <p>Copyright ?? 2022 future lift All Right Reserved</p>
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