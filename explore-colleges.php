
<?php

require_once 'functions.php';
$login = $_SESSION['userIsLoggedIn'];
$data=$_SESSION['userdata'];
// $courses= getCollegeGroupByCategoury();
 $collage = getCollegeByRank();
 $blog = getBlog();
 

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
      <div class="btnGroup">
        <a href="log-in.html" class="btn btn-sign">log in</a>
        <a href="sign-up.html" class="btn">sign up</a>
      </div>
    </nav>
    <i class="fas fa-bars" id="manu-bars"></i>
  </header>

  <!-- Header Section End -->
  <section class="return" id="retun_home">
    <div class="d-flex justify-content-center align-items-center">
      <img src="images/EXPLORBANNER.png" alt="" class="img-fluid">
    </div>
  </section>
  <section class="TopColleges" id="TopColleges">
    <div class="container">
      <h1 class="heading text-center xpoHeading mt-5">top Study Places</h1>
      <div class="" data-aos="fade-up" data-aos-delay="300">
        <div class="swiper mySwiper topSwiper ">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <figure class="items">
                <img src="images/cityicon6-02.png" alt="">
                <figcaption>
                <a href="college-filter-management-city.php?city=Bangalore" style="color: #FF0000; text-decoration: none;">
                  <h4 class="text-center">bangalore</h4>
                  </a>
                </figcaption>
              </figure>
            </div>
            <div class="swiper-slide">
              <figure class="items">
                <img src="images/cityicon3-02.png" alt="">
                <figcaption>
                <a href="college-filter-management-state.php?state=Delhi" style="color: #FF0000; text-decoration: none;">
                  <h4 class="text-center">delhi</h4>
                  </a>
                </figcaption>
              </figure>
            </div>
            <div class="swiper-slide">
              <figure class="items">
                <img src="images/cityicon2-02.png" alt="">
                <figcaption>
                <a href="college-filter-management-city.php?city=Pune" style="color: #FF0000;text-decoration: none;">
                  <h4 class="text-center">pune</h4>
                  </a>
                </figcaption>
              </figure>
            </div>
            <div class="swiper-slide">
              <figure class="items">
                <img src="images/cityicon4-02.png" alt="">
                <figcaption>
                <a href="college-filter-management-city.php?city=Hyderabad" style="color: #FF0000;text-decoration: none;">
                  <h4 class="text-center">hyadrabad</h4>
                  </a>
                </figcaption>
              </figure>
            </div>
            <div class="swiper-slide">
              <figure class="items">
                <img src="images/cityicon5-02.png" alt="">
                <figcaption>
                <a href="college-filter-management-city.php?city=Chennai" style="color: #FF0000;text-decoration: none;">
                  <h4 class="text-center">chennai</h4>
                  </a>
                </figcaption>
              </figure>
            </div>
            <div class="swiper-slide">
              <figure class="items">
                <img src="images/cityicon7-02.png" alt="">
                <figcaption>
                <a href="college-filter-management-city.php?city=Mumbai" style="color: #FF0000;text-decoration: none;">
                  <h4 class="text-center">mumbai</h4>
                  </a>
                </figcaption>
              </figure>
            </div>
            <div class="swiper-slide">
              <figure class="items">
                <img src="images/cityicon8-02.png" alt="">
                <figcaption>
                <a href="college-filter-management-city.php?city=Kolkata" style="color: #FF0000;text-decoration: none;">
                  <h4 class="text-center">Kolkata</h4>
                  </a>
                </figcaption>
              </figure>
            </div>
            <div class="swiper-slide">
              <figure class="items">
                <img src="images/bhopal-02.png" alt="">
                <figcaption>
                <a href="college-filter-management-city.php?city=Bhopal" style="color: #FF0000;text-decoration: none;">
                  <h4 class="text-center">bhopal</h4>
                  </a>
                </figcaption>
              </figure>
            </div>
            <div class="swiper-slide">
              <figure class="items">
                <img src="images/cityicon1-02.png" alt="">
                <figcaption>
                <a href="college-filter-management-city.php?city=Agra" style="color: #FF0000;text-decoration: none;">
                  <h4 class="text-center">agra</h4>
                  </a>
                </figcaption>
              </figure>
            </div>
            <div class="swiper-slide">
              <figure class="items">
                <img src="images/rajasthan-02.png" alt="">
                <figcaption>
                <a href="college-filter-management-state.php?state=Rajasthan" style="color: #FF0000;text-decoration: none;">
                  <h4 class="text-center">rajsthan</h4>
                  </a>
                </figcaption>
              </figure>
            </div>
          </div>
          <div class="swiper-button-next"></div>
          <div class="swiper-button-prev"></div>
          <!-- <div class="swiper-pagination"></div> -->
        </div>

        <div class="guidePart">
          <div class="row">
            <div class="col-md-8 guidCard">
              <div class="cardHeadline">
                <h2>are you looking perfect college for you?</h2>
              </div>
              <div class="cardImgButton">
                <img src="images/looking search-06.png" alt="">
                <a href="guid.php" target="_blank" class="btn">free guide</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="homeSearc" id="searchForHome">
    <div class="homeHeading d-none">
      <div class="container">
        <div class="barsearch">
            <input type="text" placeholder="search anything..." id="mySearch"  autocomplete="off">
            <input type="submit" value="search" class="searchBtn">
        </div>
      </div>
    </div>
  </section>
  
  
  <section class="topCollection" id="topCollection">
    <div class="container">
      <h1 class="heading">Top Universities/Colleges</h1>
      <div class="swiper mySwiper cardDetails">
        <div class="swiper-wrapper">
        <?php
while($row = mysqli_fetch_array($collage ,MYSQLI_ASSOC))

{
    echo "      <div class='swiper-slide'>
            <div class='topUniCol'>
              <div class='colInfo'>
                <div class='colimg'>
                  <img src='images/partner/images (10).png' alt=''>
                </div>
                <div class='colDitail'>
                  <h4>".$row['collage_name']."</h4>
                  <p>".$row['state_name'].", ".$row['city_name']."<span>| ".$row['approval_name']."</span> </p>
                </div>
              </div>
              <div class='reviweRating'>
                <div class='courseDitail'>
                  <h4>".$row['degree_name']."</h4>
                  <p>2.5 lakhs <span>for 1st year</span> </p>
                </div>
                <div class='reting'>
                  <i class='fa fa-star'>".$row['rating']."/10</i>
                  <p>".$row['rv']." reviews</p>
                </div>
              </div>
              <div class='courseDownloadPart'>
                <div class='couresFess'>
                  <h4><a href='javascript:void(0);'> view course and fees</a></h4>
                  <i class='fa fa-angle-right'></i>
                </div>
                <div class='downlodPart'>
                  <h4><a href='javascript:void(0);'>downlod bruchre</a></h4>
                  <i class='fa fa-angle-right'></i>
                </div>
              </div>
            </div>
          </div>";
        }
?>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-pagination"></div>
      </div>
      <div class="swiper mySwiper cardDetails">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div class="topUniCol">
              <div class="colInfo">
                <div class="colimg">
                  <img src="images/partner/images (10).png" alt="">
                </div>
                <div class="colDitail">
                  <h4>guru nakak institue of hotel Management</h4>
                  <p>west bengal, Kolkata <span>| aicte,ugc</span> </p>
                </div>
              </div>
              <div class="reviweRating">
                <div class="courseDitail">
                  <h4>be/btech</h4>
                  <p>2.5 lakhs <span>for 1st year</span> </p>
                </div>
                <div class="reting">
                  <i class="fa fa-star">7.5/10</i>
                  <p>83 reviews</p>
                </div>
              </div>
              <div class="courseDownloadPart">
                <div class="couresFess">
                  <h4><a href=""> view course and fees</a></h4>
                  <i class="fa fa-angle-right"></i>
                </div>
                <div class="downlodPart">
                  <h4><a href="">downlod bruchre</a></h4>
                  <i class="fa fa-angle-right"></i>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="topUniCol">
              <div class="colInfo">
                <div class="colimg">
                  <img src="images/partner/images (10).png" alt="">
                </div>
                <div class="colDitail">
                  <h4>guru nakak institue of hotel Management</h4>
                  <p>west bengal, Kolkata <span>| aicte,ugc</span> </p>
                </div>
              </div>
              <div class="reviweRating">
                <div class="courseDitail">
                  <h4>be/btech</h4>
                  <p>2.5 lakhs <span>for 1st year</span> </p>
                </div>
                <div class="reting">
                  <i class="fa fa-star">7.5/10</i>
                  <p>83 reviews</p>
                </div>
              </div>
              <div class="courseDownloadPart">
                <div class="couresFess">
                  <h4><a href=""> view course and fees</a></h4>
                  <i class="fa fa-angle-right"></i>
                </div>
                <div class="downlodPart">
                  <h4><a href="">downlod bruchre</a></h4>
                  <i class="fa fa-angle-right"></i>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="topUniCol">
              <div class="colInfo">
                <div class="colimg">
                  <img src="images/partner/images (10).png" alt="">
                </div>
                <div class="colDitail">
                  <h4>guru nakak institue of hotel Management</h4>
                  <p>west bengal, Kolkata <span>| aicte,ugc</span> </p>
                </div>
              </div>
              <div class="reviweRating">
                <div class="courseDitail">
                  <h4>be/btech</h4>
                  <p>2.5 lakhs <span>for 1st year</span> </p>
                </div>
                <div class="reting">
                  <i class="fa fa-star">7.5/10</i>
                  <p>83 reviews</p>
                </div>
              </div>
              <div class="courseDownloadPart">
                <div class="couresFess">
                  <h4><a href=""> view course and fees</a></h4>
                  <i class="fa fa-angle-right"></i>
                </div>
                <div class="downlodPart">
                  <h4><a href="">downlod bruchre</a></h4>
                  <i class="fa fa-angle-right"></i>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="topUniCol">
              <div class="colInfo">
                <div class="colimg">
                  <img src="images/partner/images (10).png" alt="">
                </div>
                <div class="colDitail">
                  <h4>guru nakak institue of hotel Management</h4>
                  <p>west bengal, Kolkata <span>| aicte,ugc</span> </p>
                </div>
              </div>
              <div class="reviweRating">
                <div class="courseDitail">
                  <h4>be/btech</h4>
                  <p>2.5 lakhs <span>for 1st year</span> </p>
                </div>
                <div class="reting">
                  <i class="fa fa-star">7.5/10</i>
                  <p>83 reviews</p>
                </div>
              </div>
              <div class="courseDownloadPart">
                <div class="couresFess">
                  <h4><a href=""> view course and fees</a></h4>
                  <i class="fa fa-angle-right"></i>
                </div>
                <div class="downlodPart">
                  <h4><a href="">downlod bruchre</a></h4>
                  <i class="fa fa-angle-right"></i>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="topUniCol">
              <div class="colInfo">
                <div class="colimg">
                  <img src="images/partner/images (10).png" alt="">
                </div>
                <div class="colDitail">
                  <h4>guru nakak institue of hotel Management</h4>
                  <p>west bengal, Kolkata <span>| aicte,ugc</span> </p>
                </div>
              </div>
              <div class="reviweRating">
                <div class="courseDitail">
                  <h4>be/btech</h4>
                  <p>2.5 lakhs <span>for 1st year</span> </p>
                </div>
                <div class="reting">
                  <i class="fa fa-star">7.5/10</i>
                  <p>83 reviews</p>
                </div>
              </div>
              <div class="courseDownloadPart">
                <div class="couresFess">
                  <h4><a href=""> view course and fees</a></h4>
                  <i class="fa fa-angle-right"></i>
                </div>
                <div class="downlodPart">
                  <h4><a href="">downlod bruchre</a></h4>
                  <i class="fa fa-angle-right"></i>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="topUniCol">
              <div class="colInfo">
                <div class="colimg">
                  <img src="images/partner/images (10).png" alt="">
                </div>
                <div class="colDitail">
                  <h4>guru nakak institue of hotel Management</h4>
                  <p>west bengal, Kolkata <span>| aicte,ugc</span> </p>
                </div>
              </div>
              <div class="reviweRating">
                <div class="courseDitail">
                  <h4>be/btech</h4>
                  <p>2.5 lakhs <span>for 1st year</span> </p>
                </div>
                <div class="reting">
                  <i class="fa fa-star">7.5/10</i>
                  <p>83 reviews</p>
                </div>
              </div>
              <div class="courseDownloadPart">
                <div class="couresFess">
                  <h4><a href=""> view course and fees</a></h4>
                  <i class="fa fa-angle-right"></i>
                </div>
                <div class="downlodPart">
                  <h4><a href="">downlod bruchre</a></h4>
                  <i class="fa fa-angle-right"></i>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="topUniCol">
              <div class="colInfo">
                <div class="colimg">
                  <img src="images/partner/images (10).png" alt="">
                </div>
                <div class="colDitail">
                  <h4>guru nakak institue of hotel Management</h4>
                  <p>west bengal, Kolkata <span>| aicte,ugc</span> </p>
                </div>
              </div>
              <div class="reviweRating">
                <div class="courseDitail">
                  <h4>be/btech</h4>
                  <p>2.5 lakhs <span>for 1st year</span> </p>
                </div>
                <div class="reting">
                  <i class="fa fa-star">7.5/10</i>
                  <p>83 reviews</p>
                </div>
              </div>
              <div class="courseDownloadPart">
                <div class="couresFess">
                  <h4><a href=""> view course and fees</a></h4>
                  <i class="fa fa-angle-right"></i>
                </div>
                <div class="downlodPart">
                  <h4><a href="">downlod bruchre</a></h4>
                  <i class="fa fa-angle-right"></i>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="topUniCol">
              <div class="colInfo">
                <div class="colimg">
                  <img src="images/partner/images (10).png" alt="">
                </div>
                <div class="colDitail">
                  <h4>guru nakak institue of hotel Management</h4>
                  <p>west bengal, Kolkata <span>| aicte,ugc</span> </p>
                </div>
              </div>
              <div class="reviweRating">
                <div class="courseDitail">
                  <h4>be/btech</h4>
                  <p>2.5 lakhs <span>for 1st year</span> </p>
                </div>
                <div class="reting">
                  <i class="fa fa-star">7.5/10</i>
                  <p>83 reviews</p>
                </div>
              </div>
              <div class="courseDownloadPart">
                <div class="couresFess">
                  <h4><a href=""> view course and fees</a></h4>
                  <i class="fa fa-angle-right"></i>
                </div>
                <div class="downlodPart">
                  <h4><a href="">downlod bruchre</a></h4>
                  <i class="fa fa-angle-right"></i>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="topUniCol">
              <div class="colInfo">
                <div class="colimg">
                  <img src="images/partner/images (10).png" alt="">
                </div>
                <div class="colDitail">
                  <h4>guru nakak institue of hotel Management</h4>
                  <p>west bengal, Kolkata <span>| aicte,ugc</span> </p>
                </div>
              </div>
              <div class="reviweRating">
                <div class="courseDitail">
                  <h4>be/btech</h4>
                  <p>2.5 lakhs <span>for 1st year</span> </p>
                </div>
                <div class="reting">
                  <i class="fa fa-star">7.5/10</i>
                  <p>83 reviews</p>
                </div>
              </div>
              <div class="courseDownloadPart">
                <div class="couresFess">
                  <h4><a href=""> view course and fees</a></h4>
                  <i class="fa fa-angle-right"></i>
                </div>
                <div class="downlodPart">
                  <h4><a href="">downlod bruchre</a></h4>
                  <i class="fa fa-angle-right"></i>
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

  <section class="topCollection" id="topCollection">
    <div class="container">
      <h1 class="heading">top collection</h1>
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
  <section class="upComingFeatures" id="upCmngFtre">
    <div class="container mb-5">
      <h1 class="heading text-center">up comimg features</h1>
      <div class="row">
        <div class="col-3 ftureCadr">
          <div class="fturDitail">
            <img src="images/smart app-05.png" alt="">
            <h2>Smart Application</h2>
          </div>
        </div>
        <div class="col-3 ftureCadr">
          <div class="fturDitail">
            <img src="images/target-05.png" alt="">
          <h2>My Target</h2>
          </div>
        </div>
        <div class="col-3 ftureCadr">
          <div class="fturDitail">
            <img src="images/compair-05.png" alt="">
            <h2>College Compare</h2>
          </div>
        </div>
        <div class="col-3 ftureCadr">
          <div class="fturDitail">
            <img src="images/predictor-05.png" alt="">
            <h2>Rank Predictor</h2>
          </div>
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