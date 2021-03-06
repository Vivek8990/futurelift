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

    <!-- Header Section End -->
    <section class="return" id="retun_home">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 homebanner">
                    <img src="images/bannerCareer.png" alt="" class="img-fluid">
                </div>
                <div class=" col-lg-8 col-md-6 col-sm-12 homebannerText">
                    <a href="career-form.php" target="_blank" class="btn"> free demo</a>
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

    <!-- Home Section End -->

    <section class="psychometric" id="psychometric">
        <div class="container">
            <div class="row first_row">
                <div class="testCard d-flex flex-wrap align-items-center justify-content-center my-5">
                    <div class="cardTest mx-3 cardOne">
                        <div class="textPart">
                            <h4>Psychometric Test</h4>
                        <p>Psychology analysis the aspects 
                            and fields that provide long term 
                            satisfaction in career to a person</p>
                        <a href="psymetcriTest.html" target="_blank" class="btn testBtn">start test</a>
                        </div>
                        <div class="imagePart">
                            <a href=""><img src="images/psychometric-02.png" alt="" class="img-fluid"></a>
                        </div>
                    </div>
                    <div class="cardTest mx-3 cardTwo">
                        <div class="textPart">
                            <h4>Aptitude Test</h4>
                        <p>This test purports to asses
                            the skills, talents and abilities
                            of an individual across several
                            domains.
                           </p>
                        <a href="aptitudeTest.html" target="_blank" class="btn testBtn">start test</a>
                        </div>
                        <div class="imagePart">
                            <a href=""><img src="images/aptitude-02.png" alt="" class="img-fluid"></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row second_row">
                <div class="testCard d-flex flex-wrap align-items-center justify-content-center my-5">
                    <div class="cardTest mx-3 cardThree">
                        <div class="textPart">
                            <h4>Personality  Test</h4>
                        <p>Personality based test to 
                            explore and understand the 
                            individual's socioemotional 
                            characteristics.</p>
                        <a href="personalityTest.html" target="_blank" class="btn testBtn">start test</a>
                        </div>
                        <div class="imagePart">
                            <a href=""><img src="images/personality-02.png" alt="" class="img-fluid"></a>
                        </div>
                    </div>
                    
                    <div class="cardTest mx-3 cardThree">
                        <div class="textPart">
                            <h4>iQ  Test</h4>
                        <p>IQ (Intelligence Quotient) is
                            an assessment of cognitive
                            development with respect to
                            the developement age.</p>
                        <a href="IQTest.html" target="_blank" class="btn testBtn">start test</a>
                        </div>
                        <div class="imagePart">
                            <a href=""><img src="images/iqtestpart-01.png" alt="" class="img-fluid"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="counsellingBenefit" id="beniFitCoun">
        <div class="container">
            <h1 class="heading text-center text-uppercase pb-5">Benefits of Future Lift Counseling</h1>
            <div class="swiper mySwiper beniFitCoun">
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                        <div class="benifiCard">
                            <div class="beniBox">
                                <img src="images/assesment-02.png" alt="" class="img-assessment">
                                <h1 class="text-center benifiCardHead ">career assesment</h1>
                                <p class="text-center benifiCardText">Helps Plan & Prepare for the Best 
                                    Suitable Career for You</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="benifiCard">
                            <div class="beniBox">
                                <img src="images/sowt-02.png" alt="" class="img-assessment">
                            <h1 class="text-center benifiCardHead "> SWOT Analysis</h1>
                            <p class="text-center benifiCardText">Performs a SWOT Analysis for You</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="benifiCard">
                            <div class="beniBox">
                                <img src="images/techCounseling-02.png" alt="" class="img-assessment">
                            <h1 class="text-center benifiCardHead ">Tech-Enpowerd Counseling</h1>
                            <p class="text-center benifiCardText">Performs a SWOT Analysis for You</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="benifiCard">
                            <div class="beniBox">
                                <img src="images/repository-02.png" alt="" class="img-assessment">
                            <h1 class="text-center benifiCardHead ">Value- Added Service</h1>
                            <p class="text-center benifiCardText mb-3">Provides tools to conquer obstacles in the desired career path. Aligns Personal Interests for Professional Growth.</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="benifiCard">
                            <div class="beniBox">
                                <img src="images/knowldge-02.png" alt="" class="img-assessment">
                            <h1 class="text-center benifiCardHead "> Knowledge Repository</h1>
                            <p class="text-center benifiCardText">It helps understand the demands of aparticular occupation.Provides Educational Grooming.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
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

    <section class="program" id="ourProgram">
        <div class="container">
            <div class="row">
                <div class=" col-lg-3 col-md-6 col-sm-12 hidden">
                    <div class="progHeading py-3 hidden">
                        <!-- <h1>our programs</h1>
                        <p>Personalized expert services & suport for all stakeholders in the career guidance proce</p> -->
                    </div>
                </div>
                <div class=" col-lg-6 col-md-6 col-sm-12 ">
                    <div class="progHeading py-3 col_show">
                        <h1>our programs</h1>
                        <p>Personalized expert services & suport for all stakeholders in the career guidance proce</p>
                    </div>
                </div>
                <div class=" col-lg-3 col-md-6 col-sm-12 hidden">
                    <div class="progHeading py-3 hidden">
                        <!-- <h1>our programs</h1>
                        <p>Personalized expert services & suport for all stakeholders in the career guidance proce</p> -->
                    </div>
                </div>
                
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="progCard">
                        <div class="progCardDitail">
                            <img src="images/gate-02.png" alt="" class="img-fluid" style="width: 10rem;">
                            <h2>8th to 9th class</h2>
                            <p>Looking for the perfect stream and subjects you will enjoy?</p>
                            <a href="career-form.php" target="_blank" class="btn">Know More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="progCard">
                        <div class="progCardDitail">
                            <img src="images/education-02.png" alt="" class="img-fluid" style="width: 10rem;">
                            <h2>10th to 12th class</h2>
                            <p>Looking for the right course to pursue your dream?</p>
                            <a href="career-form.php" target="_blank" class="btn">Know More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="progCard">
                        <div class="progCardDitail">
                            <img src="images/diploma-02.png" alt="" class="img-fluid" style="width: 10rem;">
                            <h2>College Graduates</h2>
                            <p>Cought between choosing a specialization and getting job?</p>
                            <a href="career-form.php" target="_blank" class="btn">Know More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <section class="chooseCounsel" id="counsellingChoosing">
        <div class="container">
            <h1 class="heading text-center">Why Choose Future Lift Counseling</h1>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 points">
                    <div class="pointsBg mt-3 py-3">
                        <p>Advanceed Assessment & Best-Fit Matches.</p>
                    </div>
                    <div class="pointsBg mt-3 py-3">
                        <p>Interactive Stream & Career Actives.</p>
                    </div>
                    <div class="pointsBg mt-3 py-3">
                        <p>Personalised Guidance from Experts.</p>
                    </div>
                    <div class="pointsBg mt-3 py-3">
                        <p>Career Roadmap Planner..</p>
                    </div>
                    <div class="pointsBg mt-3 py-3">
                        <p>Extensive Support & Resources.</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 points">
                    <div class="formBg pb-4 mt-3">
                        <form action="">
                            <h2>Take the first step
                                towards career clarity!</h2>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Enter your email" required>
                                    <div class="row p-3">
                                        <button type="submit" class="btn">Take free Demo</button>
                                    </div>
                                    
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <!-- top collection start -->
    <section class="topCollection" id="topCollection">
        <div class="container">
            <h1 class="heading caption">top collection</h1>
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


    <section class="studentReview" id="reviewStudents">
        <div class="container my-5">
            <h1 class="text-center heading">students review</h1>
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








    <!-- Swiper JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="js/script.js"></script>

    <script>

    </script>

</body>

</html>