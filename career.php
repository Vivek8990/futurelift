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

    <!-- General Initialization -->
    <script src="js/general.js" type="text/javascript"> </script>

    <!-- Bootsrtap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Custome CSS Link -->
    <link rel="stylesheet" href="css/style.css">

    <!-- swiper js -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <title>Career Future Lift</title>
    <script src="https://use.fontawesome.com/2054339f84.js"></script>
    <script src="https://kit.fontawesome.com/78ddd3cd4c.js" crossorigin="anonymous"></script>
</head>

<body>

    <!-- Header Section Start -->
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
          </div>
          <?php if($login){?>
       
       <a  href="#" class="active"><?php  echo ($data['email_id']);?></a>
       <a class="active" href="functions.php?logout">Signout</a>
       <?php }
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

    <!-- Header Section End -->
    <section class="return" id="retun_home">
        <div class="d-flex justify-content-center align-items-center">
            <img src="images/crownbanner.png" alt="" class="img-fluid">
        </div>

        <div class="container-fluid">
            <div class="allBtn">
                <div class="btn-group">
                    <a href="index.php" class="homebtn">home</a><span>/</span><a href="" class="homebtn">career
                        crown</a>
                </div>
                <div class="btn-group">
                    <a href="" class="homebtn">free counselling</a>
                </div>
            </div>
        </div>
    </section>
    <div class="homeHeading d-none">
        <div class="container">
          <div class="searchBar">
              <input type="text" placeholder="search anything..." id="mySearch" onkeyup="myFunction()" autocomplete="off">
              <input type="submit" value="search" class="searchBtn">
          </div>
          <ul id="myUl" class="listCollege">
            <li><a href="about.php">Barasat Government college</a><span>MBA</span></li>
            <li><a href="#">agra university</a></li>
          
            <li><a href="#">nalanda university</a></li>
            <li><a href="#">aligarh university</a></li>
          
            <li><a href="#">chandigarh university</a></li>
            <li><a href="#">nataji open university</a></li>
            <li><a href="#">delhi IIT</a></li>
          </ul>
        </div>
      </div>
    <!-- Home Section End -->

    <section class="psychometric" id="psychometric">
        <div class="container">
            <div class="row">
                <div class="testCard d-flex flex-wrap align-items-center justify-content-center my-5">
                    <div class="cardTest mx-3 cardOne">
                        <div class="textPart">
                            <h4>Psychometric Test</h4>
                        <p>Evaluation of Dynamic Behavior</p>
                        <a href="" class="btn testBtn">start test</a>
                        </div>
                        <div class="imagePart">
                            <a href=""><img src="images/psychometric-02.png" alt="" class="img-fluid"></a>
                        </div>
                    </div>
                    <div class="cardTest mx-3 cardTwo">
                        <div class="textPart">
                            <h4>Aptitude Test</h4>
                        <p>Prediction of Your Capabilities</p>
                        <a href="" class="btn testBtn">start test</a>
                        </div>
                        <div class="imagePart">
                            <a href=""><img src="images/aptitude-02.png" alt="" class="img-fluid"></a>
                        </div>
                    </div>
                    <div class="cardTest mx-3 cardThree">
                        <div class="textPart">
                            <h4>Personality  Test</h4>
                        <p>Examine the Emotional Status of the individual</p>
                        <a href="" class="btn testBtn">start test</a>
                        </div>
                        <div class="imagePart">
                            <a href=""><img src="images/personality-02.png" alt="" class="img-fluid"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="subscriptionDetails">
        <div class="container">
            <h4 class="caption text-center">india's most relaible career discover platform</h4>
            <div class="row">
                <div class="content d-flex align-items-center">
                    <div class="boxOne">
                        <h3>10,000 <span>+</span></h3>
                        <h2>students overall</h2>
                    </div>
                    <div class="boxTwo">
                        <h3>120 <span>+</span></h3>
                        <h2>partner institute's</h2>
                    </div>
                    <div class="boxThree">
                        <h3>92 <span>+</span></h3>
                        <h2>counseller partners</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="subscribe subscribeA ">
            <div class="container">
                <form action="" class="d-flex align-tems-center justify-content-center">
                    <div class="form-group col-lg-12 col-md-10 col-sm-12">
                        <div class="row">
                            <div class="col-lg-4">
                                <input type="mobile" class="form-control p-4" placeholder="mobile" required>
                            </div>
                            <div class="col-lg-4 pb-4">
                                <button type="submit" class="btn">get started</button>
                            </div>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </section>
    <!-- top collection start -->
    <section class="topCollection" id="topCollection">
        <div class="container">
            <h1 class="heading">top collection</h1>
            <hr>
            <div class="swiper mySwiper topCardDetails">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="maiBox">
                            <div class="box">
                                <p class="boxText">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                <img src="images/team-2.jpg" alt="" class="imgIcon">
                                <div class="details">
                                    <h3>Lorem, ipsum, dolor.</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="maiBox">
                            <div class="box">
                                <p class="boxText">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                <img src="images/team-2.jpg" alt="" class="imgIcon">
                                <div class="details">
                                    <h3>Lorem, ipsum, dolor.</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="maiBox">
                            <div class="box">
                                <p class="boxText">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                <img src="images/team-2.jpg" alt="" class="imgIcon">
                                <div class="details">
                                    <h3>Lorem, ipsum, dolor.</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="maiBox">
                            <div class="box">
                                <p class="boxText">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                <img src="images/team-2.jpg" alt="" class="imgIcon">
                                <div class="details">
                                    <h3>Lorem, ipsum, dolor.</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="maiBox">
                            <div class="box">
                                <p class="boxText">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                <img src="images/team-2.jpg" alt="" class="imgIcon">
                                <div class="details">
                                    <h3>Lorem, ipsum, dolor.</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="maiBox">
                            <div class="box">
                                <p class="boxText">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                <img src="images/team-2.jpg" alt="" class="imgIcon">
                                <div class="details">
                                    <h3>Lorem, ipsum, dolor.</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="maiBox">
                            <div class="box">
                                <p class="boxText">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                <img src="images/team-2.jpg" alt="" class="imgIcon">
                                <div class="details">
                                    <h3>Lorem, ipsum, dolor.</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="maiBox">
                            <div class="box">
                                <p class="boxText">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                <img src="images/team-2.jpg" alt="" class="imgIcon">
                                <div class="details">
                                    <h3>Lorem, ipsum, dolor.</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>
    <section class="subcrib" id="subscribtion">
        <div class="container">
            <h1 class="heading">subscription package</h1>
            <hr>
            <div class="row">
                <h3 class="text-center py-3 subsSubHead">futureLift Solution For Class 10-12</h3>
                <div class="d-flex flex-wrap justify-content-center subscribtion">
                    <div class="col-lg-3 col-md-6 col-sm-6 xs-6 py-5">
                        <div class="subContent">
                            <div class="subHead">
                                <h4>career counselling</h4>
                                <h5>Phycolomatric Test & Discussion</h5>
                            </div>
                            <p> Discussion with expert</p>
                            <ul>
                                <li><i class="fa fa-check-circle"></i>Phycolomatric Career Test</li>
                                <li><i class="fa-solid fa-user-tie"></i>Expert understand you</li>
                                <li><i class="fa fa-question-circle"></i>You can ask Questions</li>
                                <li><i class="fa fa-commenting"></i>Expert explain required services.</li>
                                <li style="text-decoration: line-through;"><i class="fa fa-times disabled"
                                        style="color: #ddd;"></i>Career Counseling Session </li>
                                <li style="text-decoration: line-through;">
                                    <i class="fa fa-times"style="color: #ddd;"></i>Career Recommendation</li>
                            </ul>
                            <div class="subBottom">
                                <h2>free</h2>
                                <a href=""><i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 xs-6 py-5">
                        <div class="subContent">
                            <div class="subHead subHeadF">
                                <h4> basic</h4>
                                <h5>Phycolomatric Test & Career Counseling</h5>
                            </div>
                            <p>Session with the expert.</p>
                            <ul>
                                <li><i class="fa fa-users"></i>1 Counseling Session</li>
                                <li><i class="fa fa-check-circle"></i>Phycolomatric Test</li>
                                <li><i class="fa fa-signal"></i>Career Report</li>
                                <li><i class="fa fa-briefcase"></i>Career Recommendation</li>
                                <li><i class="fa fa-building"></i>College/ Course Counseling</li>
                                <li><i class="fa-solid fa-phone-volume"></i>1 Follow-up call with expert</li>
                            </ul>
                            <div class="subBottom">
                                <h2>1499/-</h2>
                                <a href=""><i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 xs-6 py-5">
                        <div class="subContent">
                            <div class="subHead subHeadP">
                                <h4>Advance</h4>
                                <h5>Phycolomatric Test & Career Counseling</h5>
                            </div>
                            <p>Session with expert</p>
                            <ul>
                                <li><i class="fa fa-check-circle"></i>Phycolomatric Career Test</li>
                                <li><i class="fa fa-users"></i>2 career Counseling Session</li>
                                <li><i class="fa fa-signal"></i>Career Report & Explain</li>
                                <li><i class="fa fa-briefcase"></i>Career Recommendation</li>
                                <li><i class="fa fa-building"></i>College/ Course Counseling</li>
                                <li><i class="fa-solid fa-phone-volume"></i>1 Follow-up call with expert</li>
                                <li><i class="fa fa-info-circle"></i> Admission Guide</li>
                                <li><i class="fa-solid fa-eye"></i>1 Year students guidance </li>
                            </ul>
                            <div class="subBottom">
                                <h2>1999/-</h2>
                                <a href=""><i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 xs-6 py-5">
                        <div class="subContent">
                            <div class="subHead subHeadL">
                                <h4> Premium </h4>
                                <h5>Phycolomatric Test & Career Counseling</h5>
                            </div>
                            <p>Session with Mr. Rahul Sir </p>
                            <ul>
                                <li><i class="fa fa-check-circle"></i>Phycolomatric Career Test</li>
                                <li><i class="fa fa-users"></i>2 career Counseling Session</li>
                                <li><i class="fa fa-signal"></i>Career Report & Explain</li>
                                <li><i class="fa fa-briefcase"></i>Career Recommendation</li>
                                <li><i class="fa fa-building"></i>College/ Course Counseling</li>
                                <li><i class="fa-solid fa-phone-volume"></i>1 Follow-up call with expert</li>
                                <li><i class="fa fa-info-circle"></i> Admission Guid</li>
                                <li><i class="fa-solid fa-eye"></i>2 year Student Guidance </li>
                            </ul>
                            <div class="subBottom">
                                <h2>4999/-</h2>
                                <a href=""><i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="studentReview" id="reviewStudents">
        <div class="container">
            <h1 class="text-center">students review</h1>
            <div class="swiper mySwiper reviwSwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="card">
                            <div class="card-content">
                                <div class="image">
                                    <img src="images/team-3.jpg" alt="">
                                </div>
                                <div class="text-content">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam quam deleniti
                                        enim!</p>
                                    <h3>lolypop</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card">
                            <div class="card-content">
                                <div class="image">
                                    <img src="images/team-1.jpg" alt="">
                                </div>
                                <div class="text-content">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam quam deleniti
                                        enim!</p>
                                    <h3>lolypop</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card">
                            <div class="card-content">
                                <div class="image">
                                    <img src="images/team-1.jpg" alt="">
                                </div>
                                <div class="text-content">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam quam deleniti
                                        enim!</p>
                                    <h3>lolypop</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card">
                            <div class="card-content">
                                <div class="image">
                                    <img src="images/team-4.jpg" alt="">
                                </div>
                                <div class="text-content">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam quam deleniti
                                        enim!</p>
                                    <h3>lolypop</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card">
                            <div class="card-content">
                                <div class="image">
                                    <img src="/images/team-3.jpg" alt="">
                                </div>
                                <div class="text-content">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam quam deleniti
                                        enim!</p>
                                    <h3>lolypop</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card">
                            <div class="card-content">
                                <div class="image">
                                    <img src="images/team-2.jpg" alt="">
                                </div>
                                <div class="text-content">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam quam deleniti
                                        enim!</p>
                                    <h3>lolypop</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card">
                            <div class="card-content">
                                <div class="image">
                                    <img src="images/team-1.jpg" alt="">
                                </div>
                                <div class="text-content">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam quam deleniti
                                        enim!</p>
                                    <h3>lolypop</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card">
                            <div class="card-content">
                                <div class="image">
                                    <img src="images/team-2.jpg" alt="">
                                </div>
                                <div class="text-content">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam quam deleniti
                                        enim!</p>
                                    <h3>lolypop</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card">
                            <div class="card-content">
                                <div class="image">
                                    <img src="images/team-3.jpg" alt="">
                                </div>
                                <div class="text-content">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam quam deleniti
                                        enim!</p>
                                    <h3>lolypop</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div> -->
                <div class="swiper-pagination"></div>
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








    <!-- Swiper JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="js/script.js"></script>

    <script>

    </script>

</body>

</html>