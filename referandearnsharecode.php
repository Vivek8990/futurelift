<?php 
require_once('functions.php');
$login = $_SESSION['userIsLoggedIn'];
$data=$_SESSION['userdata'];
$id=$data['id'];
$totalrefer = gettotalrefer($id);
$balance = getBalance($id);
$kyc = checkkyc($id);
print_r($data);
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
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
  <title>Refer And Earn</title>
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
  <div class="homeHeading d-none">
    <div class="container">
      <div class="searchBar">
        <input type="text" placeholder="search anything..." id="mySearch"  autocomplete="off">
        <input type="submit" value="search" class="searchBtn">
      </div>
      
    </div>
  </div>

  <!-- Header Section End -->
  <section class="return" id="retun_home">
    <div class="d-flex justify-content-center align-items-center">
      <img src="images/refercode.png" alt="" class="img-fluid">
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

  <!-- Home Section End -->

  [Fullname]
  <section class="referErn" id="referErn">
    <h1 class="text-center heading">Your Account </h1>
    <h1 class="text-center "><?php echo $data['fullname']; ?></h1>
    <div class="container">
      <div class="row">
        <div class="accountMain">
          <div class="userDiv">
            <div class="currenAc">
              <div class="currentBlnc">
                <p>current balecne</p>
                <div class="tag">
                  <i class="fa fa-inr"></i>
                  <h3><?php echo $balance['available']; ?></h3>
                </div>
                <span></span>
              </div>
              <div class="withdrwa">
                <div class="withdrText">
                  <h4>withdrwal</h4>
                </div>
              </div>
            </div>

          </div>
          <div class="acountDiv">
            <div class="balance1">
              <h3 class="text-center">Total Balance</h3>
              <h4 class="text-center"><?php echo $balance['total']; ?>/-</h4>
              <a href="" class="btn">Recommendation</a>
            </div>
            <div class="balance1">
              <h3 class="text-center">My Network</h3>
              <h4 class="text-center"><?php echo $totalrefer; ?></h4>
              <a href="" class="btn">Refer a Friend</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
<section> 
<div class="container">
<h4>
KYC : <?php if($kyc == 'Pending'){
  echo "<a href='kyc.php'>click here to complete your KYC</a>";
}
elseif($kyc['status']=='processing') {
  echo "KYC is under processing";
}
elseif($kyc['status']=='approved') {
  echo "APPROVED";
}
?>
</h4>
</div>

 </section>
  <section class="shareCode">
    <div class="container">
      <h4 class="heading text-center">share your code </h4>
      <div class="row g-2">
        <div class="col-md">
          <div class="form-group mb-3">
            <label class="form-label" for="inputGroupSelect01">select program</label>
            <select class="form-control p-4" id="inputGroupSelect01" >
              <option>program</option>
              <option value="upi transfer" <?php if($data['salary']=='UPI'){ echo 'selected';} ?>>UPI transfer</option>
              <option value="Credit Card"  <?php if($datar['salary']=='Credit Card'){echo 'selected';} ?>>Credit Card</option>
              <option value="Bank Account"  <?php if($data['salary']=='Bank Account'){echo 'selected';} ?>>Bank Account</option>
              <option value="Cheque"   <?php if($data['salary']=='Cheque'){echo 'selected';} ?>>Cheque</option>
              <option value="NEFT"  <?php if($data['salary']=='NEFT'){echo 'selected';} ?>>NEFT</option>
              <option value="Demand Draft"  <?php if($data['salary']=='Demand Draft'){echo 'selected';} ?>>Demand Draft</option>
            </select>
          </div>
        </div>
        <div class="col-md">
          <div class="form-group mb-3">
            <label for="" class="form-label">copy code</label>
            <div class="input-group">
              <input type="text" class="form-control" id="copyCode" value="<?php echo $data['refercode']; ?>" placeholder="copy code">
              <button class="btn btn-info btn-clipboard" type="button" onclick="copy()">copy</button>
            </div>
          </div>
        </div>
      </div>
      
      <div class="form-group mb-3">
        <label for="floatingInput" class="form-label label">Share The Link</label>
        <div class="input-group">
          <input type="text" class="form-control" id="floatingInput" placeholder="share the link" value="share the link">
          <button class="btn" type="button" onclick="copyLink()">copy</button>
        </div>
      </div>
      <h5 class="text-center pt-3">or <span>share via</span></h5>
      <div class="socialGroup">
        
        <div class="socialDiv">
          <i class="fa fa-envelope"></i>
          <h6> <a href="https://mail.google.com/mail/?view=cm&fs=1&tf=1&to=&su=Your+Subject+here&body='+msgbody+'&ui=2&tf=1&pli=1" target="blank">email</a></h6>
        </div>
        <div class="socialDiv">
          <i class="fa fa-facebook-square"></i>
          <h6><a href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2use+my+code+651UO1+to+register+and+get+discount&oq=use+my+code+651UO1+to+register+and+get+discount" target="blank">facebook</a></h6>
        </div>
        <div class="socialDiv">
          <i class="fa fa-whatsapp"></i>
          <h6><a href="https://api.whatsapp.com/send?text=Hello+Vinod+kumar">whatsapp</a></h6>
          
        </div>
        <div class="socialDiv">
          <i class="fa fa-linkedin-square"></i>
          <h6><a href="https://www.linkedin.com/shareArticle?mini=true&url=https%3A//www.w3schools.com/&title=w3schools.com&summary=&source=">linkedin</a></h6>
        </div>
        <div class="socialDiv">
          <i class="fa fa-instagram"></i>
          <h6><a href="https://www.instagram.com/?url=https://www.drdrop.co/" target="_blank" rel="noopener">instagram</a> </h6>
        </div>
      </div>
    </div>
    
  </section>
  <!-- code refer section -->
  <section class="howDoRfr" id="howDoRfr">
    <div class="container">
      <h1 class="text-center heading">how do i refer</h1>
      <p>it’s only takes simple 4 steps and change someone life</p>
      <div class="row">
        <div class=shereBox>
          <div class="dofere">
            <img src="images/share-02.png" alt="" class="img-fluid">
            <h1>Sign up</h1>
            <p>Sign up on Our website 
              and get Your Referral Code to Share.</p>

          </div>
          <div class="dofere">
            <img src="images/share1-02.png" alt="" class="img-fluid">
            <h1>Share Code</h1>
            <p>Share Your Referral Code with Someone you know Who Wishes toJoin one College Course.</p>
          </div>
          <div class="dofere ">
            <img src="images/share2-02.png" alt="" class="img-fluid">
            <h1>Apply Code.</h1>
            <p>Your Friend can Apply Your referral Code on the Application Form to be eligible for the Scholarship.</p>
          </div>
          <div class="dofere">
            <img src="images/share3-02.png" alt="" class="img-fluid">
            <h1>Get Referral Benefit.</h1>
            <p>Once the referral makes the full payment then You will Earn Yourreward Money in the Wallet.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="freeCourseExplore" id="freeCourseExplore">
    <div class="container">
      <h1 class="text-center heading">exlpore free course</h1>
      <div class="d-flex flex-wrap justify-content-center">
        <div class="courseCard">
          <div class="imgCard">
            <img src="images/digitalMarketing.jpg" alt="" class="img-fluid">
          </div>
          <div class="imgText">
            <h4>digital marketing</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Enim malesuada diam ultricies blandit pretium adipiscing cras. Donec in facilisis molestie maecenas eleifend at lacus ultrices magna. Dui duis faucibus in varius consectetur </p>
          </div>
          <div class="btnShare">
            <a href="" class="btn">know more</a>
          </div>
        </div>
        <div class="courseCard">
          <div class="imgCard">
            <img src="images/daraScience.jpg" alt="" class="img-fluid">
          </div>
          <div class="imgText">
            <h4>digital marketing</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Enim malesuada diam ultricies blandit pretium adipiscing cras. Donec in facilisis molestie maecenas eleifend at lacus ultrices magna. Dui duis faucibus in varius consectetur </p>
          </div>
          <div class="btnShare">
            <a href="" class="btn">know more</a>
          </div>
        </div>
        <div class="courseCard">
          <div class="imgCard">
            <img src="images/management.jpg" alt="" class="img-fluid">
          </div>
          <div class="imgText">
            <h4>digital marketing</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Enim malesuada diam ultricies blandit pretium adipiscing cras. Donec in facilisis molestie maecenas eleifend at lacus ultrices magna. Dui duis faucibus in varius consectetur </p>
          </div>
          <div class="btnShare">
            <a href="" class="btn">know more</a>
          </div>
          
        </div>
      </div>
      
    </div>

  </section>


  <section class="university_partner" id="univerPart">
    <h1 class="heading text-center">our top university partners</h1>
    <div class="container">
      <div class="swiper referParnerSwiper">
        <div class="swiper-wrapper">
          <div data-hash="slide1" class="swiper-slide"><img src="images//partner/images (11).jpeg" alt="" ></div>
          <div data-hash="slide2" class="swiper-slide"><img src="images/partner/images (10).png" alt="" ></div>
          <div data-hash="slide3" class="swiper-slide"><img src="images//partner/images (11).jpeg" alt=""></div>
          <div data-hash="slide4" class="swiper-slide"><img src="images//partner/images (11).jpeg" alt=""></div>
          <div data-hash="slide5" class="swiper-slide"><img src="images//partner/images (11).jpeg" alt=""></div>
          <div data-hash="slide6" class="swiper-slide"><img src="images//partner/images (11).jpeg" alt=""></div>
          <div data-hash="slide7" class="swiper-slide"><img src="images//partner/images (11).jpeg" alt=""></div>
          <div data-hash="slide8" class="swiper-slide"><img src="images//partner/images (11).jpeg" alt=""></div>
          <div data-hash="slide9" class="swiper-slide"><img src="images//partner/images (11).jpeg" alt=""></div>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-pagination"></div>
      </div>
    </div>
    

  </section>

  <!-- share FAQs -->

  <section class="referfaQs" id="referfaQs">
    <div class="container">
      <h1 class="heading text-center">FAQs</h1>
      <hr>
      <div class="row">
        <div class="accordion" id="accordionPanelsStayOpenExample">
              <div class="accordion-item">
                <h2 class="accordion-header faqHead" id="flush-headingOne">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                    <h3>How to receive Referral Money after referring a friend?</h3>
                  </button>
                </h2>
                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne"
                  data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">
                    <h5 class="pb-2">1. The referee has used the code either while signed up or on the Application.</h5>
                    <h5>2. The referee has paid the full fees for the program.</h5>

                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header faqHead" id="panelsStayOpen-headingTwo">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false"
                    aria-controls="panelsStayOpen-collapseTwo">
                    <h3>Do I need to be an Future Lift students to refer my friend?</h3>
                  </button>
                </h2>
                <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse"
                  aria-labelledby="panelsStayOpen-headingTwo">
                  <div class="accordion-body">
                    <h5>No, every user who has signed up on Future Lift can be part of Future Lift referral reward program.
                      Benefits very for a user as per the terms and conditions.</h5>

                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header faqHead" id="panelsStayOpen-headingThree">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false"
                    aria-controls="panelsStayOpen-collapseThree">
                    <h3>My friend missed applying my Referral Code?</h3>
                  </button>
                </h2>
                <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse"
                  aria-labelledby="panelsStayOpen-headingThree">
                  <div class="accordion-body">
                    <h5 class="pb-2">Referee applying referral code while signing up or filling the application for the program of interest is
                      a mandatory requirement for a referrer to be eligible for the referral benefit.</h5>
                      <p>In case referral code is not applied, Future Lift will not be able to assist further.</p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header faqHead" id="panelsStayOpen-headingFour">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#panelsStayOpen-collapseFour" aria-expanded="false"
                    aria-controls="panelsStayOpen-collapseFour">
                    <h3>How can I refer my Friends/Connections?</h3>
                  </button>
                </h2>
                <div id="panelsStayOpen-collapseFour" class="accordion-collapse collapse"
                  aria-labelledby="panelsStayOpen-headingFour">
                  <div class="accordion-body">
                    <p>Visit futureliftedu.com / referenda.</p>
                    <p>If you have already signed up with Future Lift, simply share the Referral invite link with Friends.</p>
                    <p>If you haven&#39;t yet signed up with Future Lift, do that first and then follow the above-mentioned
                      step.</p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header faqHead" id="panelsStayOpen-headingFive">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#panelsStayOpen-collapseFive" aria-expanded="false"
                    aria-controls="panelsStayOpen-collapseFive">
                    <h3>When can you expect to receive Referral Money?</h3>
                  </button>
                </h2>
                <div id="panelsStayOpen-collapseFive" class="accordion-collapse collapse"
                  aria-labelledby="panelsStayOpen-headingFive">
                  <div class="accordion-body">
                    <p>Once the referee meets the above-mentioned eligibility criteria, our team will reach out to you
                      asking for your bank details by filling a form.
                    </p>
                    <p>Once the form is filled out by you, we take 7-10 working days to process the amount.
                      The payment can only be made online by Net Banking/Credit Card/ Debit Card.
                      The payment gateway is verified and is secure for making payments. Select
                      only the Career Test which is relevant/ recommended for you this year.
                      Career Tests once paid for can be refunded on specific terms and conditions
                      which will totally investigated and analyzed by us only. 
                      The referral code applied by the friend who has booked the seat and has enrolled with Future Lift,
                      the referral code once entered by the friend can&#39;t be modified/ change from the backend team. In
                      this case, learner is not entitled to any referral money.
                    </p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header faqHead" id="panelsStayOpen-headingSix">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#panelsStayOpen-collapseSix" aria-expanded="false"
                    aria-controls="panelsStayOpen-collapseSix">
                    <h3>I have still not received my Referral Money.</h3>
                  </button>
                </h2>
                <div id="panelsStayOpen-collapseSix" class="accordion-collapse collapse"
                  aria-labelledby="panelsStayOpen-headingSix">
                  <div class="accordion-body">
                    <p>The referee has not used your code on the application.</p>
                    <p>The referee has not paid the full fees for the course.</p>
                    <p>The referee’s batch has not yet started.</p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header faqHead" id="panelsStayOpen-headingSeven">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#panelsStayOpen-collapseSeven" aria-expanded="false"
                    aria-controls="panelsStayOpen-collapseSeven">
                    <h3>The Referral Benefit I have received is incorrect (example: instead of rs 30,000, rs 28,500 is
                      credited).</h3>
                  </button>
                </h2>
                <div id="panelsStayOpen-collapseSeven" class="accordion-collapse collapse"
                  aria-labelledby="panelsStayOpen-headingSeven">
                  <div class="accordion-body">
                    <p>Referral benefit is subject to TDS deduction and tax rules as may be applicable at the time of
                      processing the pay out.</p>
                      <p>A Referrers amount is based on the referee’s program and college.</p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header faqHead" id="panelsStayOpen-headingEight">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#panelsStayOpen-collapseEight" aria-expanded="false"
                    aria-controls="panelsStayOpen-collapEight">
                    <h3>Where can I find my code?</h3>
                  </button>
                </h2>
                <div id="panelsStayOpen-collapseEight" class="accordion-collapse collapse"
                  aria-labelledby="panelsStayOpen-headingEight">
                  <div class="accordion-body">
                    <p>Visit the Future Lift website and navigate to the “Refer and Earn” tab on the top panel of the
                      website.</p>
                      <p>If you are already enrolled, Login and navigate to the drop down available on the top right corner.</p>
                      <p>You will see the “Refer and Earn” option in the account section. Share the referral code with your
                        friend/connection or drop their email or invite them using the referral invite link.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- condition share -->

  <section class="referTermsAndCondition" id="earnTerms">
    <div class="container">
      <h1 class="heading text-center">terms and conditions</h1>
      <p class="termPara">The Final admission decision will be taken by Future Lift and
        Partner College/University on Respective Course/Program.
      </p>
      <p class="termPara">Authorised Business Counsellor are not allowed to collect fees or aadmission amount behalf of
        future Lift.
      </p>
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
  <!-- <script src="aos/aos.js"></script> -->
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  <script src="js/script.js"></script>

</body>

</html>