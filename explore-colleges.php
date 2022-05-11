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
  <title>Explore Colleges</title>
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
  <title>Future Lift</title>
  <script src="https://use.fontawesome.com/2054339f84.js"></script>
  <script src="https://kit.fontawesome.com/78ddd3cd4c.js" crossorigin="anonymous"></script>
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
  <section class="return" id="retun_home">
    <div class="d-flex justify-content-center align-items-center">
      <img src="images/EXPLORBANNER.png" alt="" class="img-fluid">
    </div>

    <div class="container-fluid">
      <div class="allBtn">
        <div class="btn-group">
          <a href="index.php" class="homebtn">home</a><span>/</span><a href="" class="homebtn">explore colleges</a>
        </div>
        <div class="btn-group">
          <a href="" class="homebtn">free counselling</a>
        </div>

      </div>
      <!-- <div class=" explore">
            <div class=" exploimg">
                <img src="images/explore-02.png" alt="" class="img-fluid">
            </div>
            <div class="arrowDownR">
                <i class="fa fa-long-arrow-down" aria-hidden="true"></i>
            </div>
        </div> -->
    </div>
  </section>
  <div class="homeHeading d-none">
    <div class="container">
      <div class="searchBar">
          <input type="text" placeholder="search anything..." id="mySearch" onkeyup="myFunction()" autocomplete="off">
          <input type="submit" value="search" class="searchBtn">
      </div>
      <ul id="myUl" class="listCollege">
        <li><a href="about.html">Barasat Government college</a><span>MBA</span></li>
        <li><a href="#">agra university</a></li>
      
        <li><a href="#">nalanda university</a></li>
        <li><a href="#">aligarh university</a></li>
      
        <li><a href="#">chandigarh university</a></li>
        <li><a href="#">nataji open university</a></li>
        <li><a href="#">delhi IIT</a></li>
      </ul>
    </div>
  </div>
  
  <section class="topCollection" id="topCollection">
    <div class="container">
      <h1 class="heading">Top Universities/Colleges</h1>
      <hr>
      <div class="swiper mySwiper cardDetails">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div class="ab">
              <div class="at">
                <h4>name</h4>
              </div>
              <div class="ap">
                <img src="images/team-1.jpg" alt="" class="imgmain">
              </div>
              <div class="tb">
                <h3>title</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing, elit. Reprehenderit, optio?</p>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="ab">
              <div class="at">
                <h4>name</h4>
              </div>
              <div class="ap">
                <img src="images/team-1.jpg" alt="" class="imgmain">
              </div>
              <div class="tb">
                <h3>title</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing, elit. Reprehenderit, optio?</p>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="ab">
              <div class="at">
                <h4>name</h4>
              </div>
              <div class="ap">
                <img src="images/team-1.jpg" alt="" class="imgmain">
              </div>
              <div class="tb">
                <h3>title</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing, elit. Reprehenderit, optio?</p>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="ab">
              <div class="at">
                <h4>name</h4>
              </div>
              <div class="ap">
                <img src="images/team-1.jpg" alt="" class="imgmain">
              </div>
              <div class="tb">
                <h3>title</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing, elit. Reprehenderit, optio?</p>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="ab">
              <div class="at">
                <h4>name</h4>
              </div>
              <div class="ap">
                <img src="images/team-1.jpg" alt="" class="imgmain">
              </div>
              <div class="tb">
                <h3>title</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing, elit. Reprehenderit, optio?</p>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="ab">
              <div class="at">
                <h4>name</h4>
              </div>
              <div class="ap">
                <img src="images/team-1.jpg" alt="" class="imgmain">
              </div>
              <div class="tb">
                <h3>title</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing, elit. Reprehenderit, optio?</p>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="ab">
              <div class="at">
                <h4>name</h4>
              </div>
              <div class="ap">
                <img src="images/team-1.jpg" alt="" class="imgmain">
              </div>
              <div class="tb">
                <h3>title</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing, elit. Reprehenderit, optio?</p>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="ab">
              <div class="at">
                <h4>name</h4>
              </div>
              <div class="ap">
                <img src="images/team-1.jpg" alt="" class="imgmain">
              </div>
              <div class="tb">
                <h3>title</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing, elit. Reprehenderit, optio?</p>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="ab">
              <div class="at">
                <h4>name</h4>
              </div>
              <div class="ap">
                <img src="images/team-1.jpg" alt="" class="imgmain">
              </div>
              <div class="tb">
                <h3>title</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing, elit. Reprehenderit, optio?</p>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-pagination"></div>
      </div>
      <div class="swiper mySwiper cardDetails">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div class="ab">
              <div class="at">
                <h4>name</h4>
              </div>
              <div class="ap">
                <img src="images/team-1.jpg" alt="" class="imgmain">
              </div>
              <div class="tb">
                <h3>title</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing, elit. Reprehenderit, optio?</p>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="ab">
              <div class="at">
                <h4>name</h4>
              </div>
              <div class="ap">
                <img src="images/team-1.jpg" alt="" class="imgmain">
              </div>
              <div class="tb">
                <h3>title</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing, elit. Reprehenderit, optio?</p>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="ab">
              <div class="at">
                <h4>name</h4>
              </div>
              <div class="ap">
                <img src="images/team-1.jpg" alt="" class="imgmain">
              </div>
              <div class="tb">
                <h3>title</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing, elit. Reprehenderit, optio?</p>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="ab">
              <div class="at">
                <h4>name</h4>
              </div>
              <div class="ap">
                <img src="images/team-1.jpg" alt="" class="imgmain">
              </div>
              <div class="tb">
                <h3>title</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing, elit. Reprehenderit, optio?</p>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="ab">
              <div class="at">
                <h4>name</h4>
              </div>
              <div class="ap">
                <img src="images/team-1.jpg" alt="" class="imgmain">
              </div>
              <div class="tb">
                <h3>title</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing, elit. Reprehenderit, optio?</p>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="ab">
              <div class="at">
                <h4>name</h4>
              </div>
              <div class="ap">
                <img src="images/team-1.jpg" alt="" class="imgmain">
              </div>
              <div class="tb">
                <h3>title</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing, elit. Reprehenderit, optio?</p>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="ab">
              <div class="at">
                <h4>name</h4>
              </div>
              <div class="ap">
                <img src="images/team-1.jpg" alt="" class="imgmain">
              </div>
              <div class="tb">
                <h3>title</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing, elit. Reprehenderit, optio?</p>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="ab">
              <div class="at">
                <h4>name</h4>
              </div>
              <div class="ap">
                <img src="images/team-1.jpg" alt="" class="imgmain">
              </div>
              <div class="tb">
                <h3>title</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing, elit. Reprehenderit, optio?</p>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="ab">
              <div class="at">
                <h4>name</h4>
              </div>
              <div class="ap">
                <img src="images/team-1.jpg" alt="" class="imgmain">
              </div>
              <div class="tb">
                <h3>title</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing, elit. Reprehenderit, optio?</p>
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

  <section class="topCollection" id="topCollection">
    <div class="container">
      <h1 class="heading">top collection</h1>
      <hr>
      <div class="row">
        <div class="d-flex flex-wrap justify-content-center">
          <div class="col-lg-3">
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
          <div class="col-lg-3">
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
          <div class="col-lg-3">
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
          <div class="col-lg-3">
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
      </div>
    </div>
  </section>
  <section class="TopColleges topCollg" id="TopColleges">
    <div class="container">
      <h1 class="heading">top Study Places</h1>
      <hr>
      <div class=>
        <div class="swiper topSwiper ">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <figure class="items">
                <img src="/images/cityicon6-02.png" alt="">
                <figcaption>
                  <h4 class="text-center">bangalore</h4>
                </figcaption>
              </figure>
            </div>
            <div class="swiper-slide">
              <figure class="items">
                <img src="/images/cityicon3-02.png" alt="">
                <figcaption>
                  <h4 class="text-center">delhi</h4>
                </figcaption>
              </figure>
            </div>
            <div class="swiper-slide">
              <figure class="items">
                <img src="/images/cityicon2-02.png" alt="">
                <figcaption>
                  <h4 class="text-center">pune</h4>
                </figcaption>
              </figure>
            </div>
            <div class="swiper-slide">
              <figure class="items">
                <img src="/images/cityicon4-02.png" alt="">
                <figcaption>
                  <h4 class="text-center">hyadrabad</h4>
                </figcaption>
              </figure>
            </div>
            <div class="swiper-slide">
              <figure class="items">
                <img src="/images/cityicon5-02.png" alt="">
                <figcaption>
                  <h4 class="text-center">chennai</h4>
                </figcaption>
              </figure>
            </div>
            <div class="swiper-slide">
              <figure class="items">
                <img src="/images/cityicon7-02.png" alt="">
                <figcaption>
                  <h4 class="text-center">mumbai</h4>
                </figcaption>
              </figure>
            </div>
            <div class="swiper-slide">
              <figure class="items">
                <img src="/images/cityicon8-02.png" alt="">
                <figcaption>
                  <h4 class="text-center">Kolkata</h4>
                </figcaption>
              </figure>
            </div>
            <div class="swiper-slide">
              <figure class="items">
                <img src="/images/cityicon1-02.png" alt="">
                <figcaption>
                  <h4 class="text-center">agra</h4>
                </figcaption>
              </figure>
            </div>
            <div class="swiper-slide">
              <figure class="items">
                <img src="/images/cityicon1-02.png" alt="">
                <figcaption>
                  <h4 class="text-center">agra</h4>
                </figcaption>
              </figure>
            </div>
          </div>
          <div class="swiper-button-next"></div>
          <div class="swiper-button-prev"></div>
          <!-- <div class="swiper-pagination"></div> -->
        </div>
      </div>
  </section>
  <section class="get_started">
    <div class="container">
      <h3 class="heading text-center">subscribe our news letter</h3>
      <p>Stay updated about latest happenings, events and campus news.</p>
      <div class="subscribe">
        <form action="" class="d-flex align-tems-center justify-content-center">
          <div class="form-group col-lg-12 col-md-10 col-sm-12">
            <div class="row">
              <div class="col-lg-4">
                <input type="Email" class="form-control p-4" placeholder="Email" required>
              </div>
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
    <section id="partner" class="partner">
    <div class="container">
      <div class="row d-flex">
        <h2 class="heading">our partners</h2>
        <div class="swiper pertnerSwiper">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <img src="images/patners/Ct_logo.png" alt="">
            </div>
            <div class="swiper-slide">
              <img src="images/patners/channels4_profile.jpg" alt="">
            </div>
            <div class="swiper-slide">
              <img src="images/patners/download.jpeg" alt="">
            </div>
            <div class="swiper-slide">
              <img src="images/patners/ECE LOGO.png" alt="">
            </div>
            <div class="swiper-slide">
              <img src="images/patners/images (1).jpeg" alt="">
            </div>
            <div class="swiper-slide">
              <img src="images/patners/images (1).png" alt="">
            </div>
            <div class="swiper-slide">
              <img src="images/patners/images (10).jpeg" alt="">
            </div>
            <div class="swiper-slide">
              <img src="images/patners/images (2).jpeg" alt="">
            </div>
            <div class="swiper-slide">
              <img src="images/patners/images (2).png" alt="">
            </div>
            <div class="swiper-slide">
              <img src="images/patners/images (3).jpeg" alt="">
            </div>
            <div class="swiper-slide">
              <img src="images/patners/images (3).png" alt="">
            </div>
            <div class="swiper-slide">
              <img src="images/patners/images (4).jpeg" alt="">
            </div>
            <div class="swiper-slide">
              <img src="images/patners/images (4).png" alt="">
            </div>
            <div class="swiper-slide">
              <img src="images/patners/images (5).jpeg" alt="">
            </div>
            <div class="swiper-slide">
              <img src="images/patners/images (5).png" alt="">
            </div>
            <div class="swiper-slide">
              <img src="images/patners/images (7).jpeg" alt="">
            </div>
            <div class="swiper-slide">
              <img src="images/patners/images (8).jpeg" alt="">
            </div>
            <div class="swiper-slide">
              <img src="images/patners/images (9).jpeg" alt="">
            </div>
            <div class="swiper-slide">
              <img src="images/patners/images.jpeg" alt="">
            </div>
            <div class="swiper-slide">
              <img src="images/patners/images.png" alt="">
            </div>
            <div class="swiper-slide">
              <img src="images/patners/ISME-Logo.png" alt="">
            </div>
            <div class="swiper-slide">
              <img src="images/patners/logo-au-web.png" alt="">
            </div>
            <div class="swiper-slide">
              <img src="images/patners/logo-wide.png" alt="">
            </div>
            <div class="swiper-slide">
              <img src="images/patners/medisky-ff.png" alt="">
            </div>
            <div class="swiper-slide">
              <img src="images/patners/RRI-logo.png" alt="">
            </div>
            <div class="swiper-slide">
              <img src="images/patners/Short-Logo-Black new.png" alt="">
            </div>
            <div class="swiper-slide">
              <img src="images/partner/b9034e_281dafa7977c40a69a4f94eaf73d71c8_mv2.png" alt="">
            </div>
            <div class="swiper-slide">
              <img src="images/partner/Budge_Budge_Institute_of_Technology_Logo.png" alt="">
            </div>
            <div class="swiper-slide">
              <img src="images/partner/download.png" alt="">
            </div>
            <div class="swiper-slide">
              <img src="images/partner/Guru_Nanak_Institute_of_Dental_Sciences_and_Research_logo.png" alt="">
            </div>
            <div class="swiper-slide">
              <img src="images/partner/images (10).png" alt="">
            </div>
            <div class="swiper-slide">
              <img src="images/partner/images (12).jpeg" alt="">
            </div>
            <div class="swiper-slide">
              <img src="images/partner/images (11).jpeg" alt="">
            </div>
            <div class="swiper-slide">
              <img src="images/partner/images (13).jpeg" alt="">
            </div>
            <div class="swiper-slide">
              <img src="images/partner/images (14).jpeg" alt="">
            </div>
            <div class="swiper-slide">
              <img src="images/partner/images (15).jpeg" alt="">
            </div>
            <div class="swiper-slide">
              <img src="images/partner/images (16).jpeg" alt="">
            </div>
            <div class="swiper-slide">
              <img src="images/partner/images (17).jpeg" alt="">
            </div>
            <div class="swiper-slide">
              <img src="images/partner/images (19).jpeg" alt="">
            </div>
            <div class="swiper-slide">
              <img src="images/partner/images (20).jpeg" alt="">
            </div>
            <div class="swiper-slide">
              <img src="images/partner/images (21).jpeg" alt="">
            </div>
            <div class="swiper-slide">
              <img src="images/partner/images (22).jpeg" alt="">
            </div>
            <div class="swiper-slide">
              <img src="images/partner/images (23).jpeg" alt="">
            </div>
            <div class="swiper-slide">
              <img src="images/partner/images (24).jpeg" alt="">
            </div>
            <div class="swiper-slide">
              <img src="images/partner/images (25).jpeg" alt="">
            </div>
            <div class="swiper-slide">
              <img src="images/partner/images (26).jpeg" alt="">
            </div>
            <div class="swiper-slide">
              <img src="images/partner/images (27).jpeg" alt="">
            </div>
            <div class="swiper-slide">
              <img src="images/partner/images (28).jpeg" alt="">
            </div>
            <div class="swiper-slide">
              <img src="images/partner/images (6).png" alt="">
            </div>
            <div class="swiper-slide">
              <img src="images/partner/images (7).png" alt="">
            </div>
            <div class="swiper-slide">
              <img src="images/partner/images (8).png" alt="">
            </div>
            <div class="swiper-slide">
              <img src="images/partner/images (9).png" alt="">
            </div>
            <div class="swiper-slide">
              <img src="images/partner/logo (1).png" alt="">
            </div>
            <div class="swiper-slide">
              <img src="images/partner/logo (2).png" alt="">
            </div>
            <div class="swiper-slide">
              <img src="images/partner/logo.png" alt="">
            </div>
            
          </div>
          <!-- <div class="swiper-button-next"></div> -->
          <div class="swiper-pagination"></div>

        </div>
      </div>
    </div>
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
          <a href="https://www.facebook.com/Future-Lift-Education-PVT-LTD-112127913993548/"><i
              class="fab fa-facebook-square"></i></a>
          <a href="https://instagram.com/futurelift_education?utm_medium=copy_link"><i
              class="fab fa-instagram-square"></i></a>
          <a href=" https://twitter.com/Futurelift_edu?s=09"><i class="fab fa-twitter-square"></i></a>
          <a href="https://youtube.com/channel/UCvY_1Aon-HqSHzqWwvIU2zQ"><i class="fab fa-youtube-square"></i></a>
          <a href="https://www.linkedin.com/company/futurelift-duication"><i class="fab fa-linkedin"></i></a>

        </div>
      </div>
    </div>
    <hr>
    <p>copyrights&copy;<span> future lift</span>-2022</p>
  </footer>
  <!-- Footer End -->
  <!-- <div _ngcontent-c6="" class="centre cbenefit-margin" fxhide.sm="" fxhide.xs="" fxlayout="row" style="flex-direction: row; box-sizing: border-box; display: flex;"><div _ngcontent-c6="" fxflex="" fxlayout="column" style="flex: 1 1 0%;box-sizing: border-box;flex-direction: column;display: flex;"><div _ngcontent-c6="" class="d-size" fxflex="40%" fxflex.sm="40%" fxflex.xs="50%" style="text-align: left; width: 95%; flex: 1 1 100%; box-sizing: border-box; max-height: 40%;"><p _ngcontent-c6="" class="content-description purple-font">Build a happier, more productive workforce.</p><p _ngcontent-c6="" class="content-description grey-font">Parents work hard to provide a safe, secure future for their children. De-stressing them by enabling their children to choose the right career creates huge amounts of trust, goodwill and happiness amongst employees.</p></div><div _ngcontent-c6="" fxflex="10%" fxflex.sm="20%" fxflex.xs="0%" style="flex: 1 1 100%; box-sizing: border-box; max-height: 10%;"></div><div _ngcontent-c6="" class="d-size" fxflex="50%" fxflex.sm="40%" fxflex.xs="50%" style="text-align: left; width: 95%; flex: 1 1 100%; box-sizing: border-box; max-height: 50%;"><p _ngcontent-c6="" class="content-description purple-font">Employer branding.</p><p _ngcontent-c6="" class="content-description grey-font">Organisations can move beyond superficial employee engagement activities and make a sustaining impact on employees. Talent Acquisition teams can use this as a welfare initiative to emotionally engage quality talent.</p></div></div><div _ngcontent-c6="" fxflex="" style="flex: 1 1 0%; box-sizing: border-box;"><img _ngcontent-c6="" alt="Corporate-infographic" src="//mentoriawebimages.azureedge.net/Corporate-infographic.png" style="width: 100%;"></div><div _ngcontent-c6="" fxflex="" fxlayout="column" style="flex: 1 1 0%; box-sizing: border-box; flex-direction: column; display: flex;"><div _ngcontent-c6="" fxflex="30%" fxflex.sm="35%" style="flex: 1 1 100%; box-sizing: border-box; max-height: 30%;"></div><div _ngcontent-c6="" fxflex="25%" fxflex.sm="50%" style="text-align: left; width: 100%; flex: 1 1 100%; box-sizing: border-box; max-height: 25%;"><p _ngcontent-c6="" class="content-description purple-font">Employee retention.</p><p _ngcontent-c6="" class="content-description grey-font">When organisations send out a ‘we care’ message, not just to employees but their families as well, it is bound to result in greater employee retention.</p></div><div _ngcontent-c6="" fxflex="35%" fxflex.sm="25%" style="flex: 1 1 100%; box-sizing: border-box; max-height: 35%;"></div><div _ngcontent-c6="" fxflex="25%" fxflex.sm="50%" style="text-align: left; width: 100%; flex: 1 1 100%; box-sizing: border-box; max-height: 25%;"><p _ngcontent-c6="" class="content-description purple-font">Connecting with the next generation of employees.</p><p _ngcontent-c6="" class="content-description grey-font">The Mentoria Solution can enable organisations to build a strong bond with the next generation of their workforce - employees’ children.</p></div></div></div> -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script src="js/script.js"></script>
</body>
</html>