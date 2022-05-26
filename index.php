

<?php 
require_once 'functions.php';
$login = $_SESSION['userIsLoggedIn'];
$data=$_SESSION['userdata'];
$courses= getCollegeGroupByCategoury();
$collage = getCollegeByRank();

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
  <title>Future Lift Home</title>
</head>

<body>
  <div id="mainPopUp" style="display: none;">
    <div class="formBox" id="popUpForm">
      <div class="boxForm">
        <div class="popImg mx-5 py-3">
          <img src="/images/logoBrand-01.png" alt="" class="img-fluid">
        </div>
        <div class="popHeding">
          <h2 style="color: #fff;">Quick Contact: +91 84155 77889</h2>
          <h2 class="text-center" style="color: #fff;">admission open 2022</h2>
        </div>

      </div>
      <form>
        <div class="form-group">
          <input type="text" name="name" class="form-control" placeholder="Name" required="">
        </div>
        <div class="form-group">
          <input type="email" name="email" class="form-control" placeholder="Email" required="">
        </div>
        <div class="form-group">
          <input type="text" name="mobile" class="form-control" placeholder="Phone" required="">
        </div>
        <div class="form-group">
          <select id="state3" name="state" class="form-control" required="">
            <option value="">Select Your State</option>
            <option value="Andaman &amp; Nicobar">Andaman &amp; Nicobar</option>
            <option value="Andhra Pradesh">Andhra Pradesh</option>
            <option value="Arunachal Pradesh">Arunachal Pradesh</option>
            <option value="Assam">Assam</option>
            <option value="Bihar">Bihar</option>
            <option value="Chandigarh">Chandigarh</option>
            <option value="Chandigarh">Wes Bengal</option>
          </select>
        </div>
        <div class="form-group">
          <select name="city" id="city3" class="form-control" required="">
            <option>Select Your City</option>

            <option value="B. Pharm">Kolkata</option>
            <option value="B.A. LLB">Banglore</option>
            <option value="B.A.M.S">Mumbai</option>
            <option value="B.Arch">Delhi</option>
            <option value="B.Com">haydrabad</option>
          </select>
        </div>
        <div class="form-group">
          <select class="form-control" name="course" id="popupcourse" required="">
            <option value="">Select Course</option>

            <option value="B. Pharm">B. Pharm</option>
            <option value="B.A. LLB">B.A. LLB</option>
            <option value="B.A.M.S">B.A.M.S</option>
            <option value="B.Arch">B.Arch</option>
            <option value="B.Com">B.Com</option>

          </select>
        </div>
        <div class="form-group">
          <textarea name="message" placeholder="Message" class="form-control"></textarea>
        </div>
        <button type="submit" class="btn btn3">Submit</button>
        <button type="submit" class="btn btn3" id="closeBtn">cancel</button>
      </form>
    </div>
  </div>

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
      <a href="admission.html" class="active">admission</a>
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

  <section class="home" id="home_banner">
    <div class="swiper mySwiper homeSwper">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <img src="images/college1.jpg" />
        </div>
        <div class="swiper-slide">
          <img src="images/college2.jpg" />
        </div>
        <div class="swiper-slide">
          <img src="images/college3.jpg" />
        </div>
        <div class="swiper-slide">
          <img src="images/college4.jpg" />
        </div>
      </div>

  </section>
  <!-- Home Section End -->
  <div class="homeHeading">
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

  <!-- Service Section Start -->

  <section id="service" class="service load">
    <!-- <h1 class="heading">select your best</h1> -->
    <div class="container" data-aos="fade-up" data-aos-delay="100">
      <div class="box-container">
        <a href="examate.php">
          <div class="corsBox">
            <i>
              <img src="images/examate-02.png" alt="">
            </i>
            <h3></h3>
            <p class="dailog">examet</p>
          </div>
        </a>
        <a href="career.php">
          <div class="corsBox">
            <i>
              <img src="images/icons-02.png" alt="">
            </i>
            <h3></h3>
            <p class="dailog">carear crown</p>
          </div>
        </a>
        <a href="explore-colleges.php">
          <div class="corsBox">
            <i>
              <img src="images/explore-02.png" alt="">
            </i>
            <h3></h3>
            <p class="dailog">explore colleges,exams & more</p>
          </div>
        </a>
        <a href="scholership.php">
          <div class="corsBox">
            <i>
              <img src="images/eduloan-02.png" alt="">
            </i>
            <h3></h3>
            <p class="dailog">scholership</p>
          </div>
        </a>
        <a href="https://www.youtube.com/watch?v=Hv0AiWFAiRg">
          <div class="corsBox">
            <i>
              <img src="images/hostels-02.png" alt="">
            </i>
            <h3></h3>
            <p class="dailog">pg and hostels</p>
          </div>
        </a>
      </div>
    </div>


  </section>
  
  <!-- Service Section End -->
  <section class="futureLift" id="exploreFutute">
    <h2 class="heading text-center pt-5">discover Future Lift</h2>
    <h2 class="text-center">explore Colleges, Careers, and Courses.</h2>
    <div class="container">
      <div class="futureTabs">
        <input type="radio" id="Colleges" name="futureTabs" checked="checked">
        <label for="Colleges">top colleges in india</label>
        <div class="allTabs">
          <div class="conteintBox">

            <div class="collgBox">
              <img src="images/courseIcon-02.png" alt="">
              <h5>
                <a href="college-filter-management.php?q=Management" title="B.M.S. Colleges in India">Management</a>
              </h5>
              <p>607 Colleges</p>
            </div>
            <div class="collgBox">
              <img src="images/courseIcon1-02.png" alt="">
              <h5>
                <a href="college-filter-management.php?q=Medical" title="B.M.S. Colleges in India">medical</a>
              </h5>
              <p>6077 Colleges</p>
            </div>
            <div class="collgBox">
              <img src="images/engineering-02.png" alt="">
              <h5>
                <a href="college-filter-management.php?q=engineering" title="B.M.S. Colleges in India">engineering</a>
              </h5>
              <p>6077 Colleges</p>
            </div>
            <div class="collgBox">
              <img src="images/courseIcon3-02.png" alt="">
              <h5>
                <a href="college-filter-management.php?q=law" title="B.M.S. Colleges in India">law</a>
              </h5>
              <p>6077 Colleges</p>
            </div>
            <div class="collgBox">
              <img src="images/science-02.png" alt="">
              <h5>
                <a href="college-filter-management.php?q=science" title="B.M.S. Colleges in India">science</a>
              </h5>
              <p>6077 Colleges</p>
            </div>
            <div class="collgBox">
              <img src="images/phamecy-02.png" alt="">
              <h5>
                <a href="college-filter-management.php?q=pharmacy" title="B.M.S. Colleges in India">pharmacy</a>
              </h5>
              <p>6077 Colleges</p>
            </div>
            <div class="collgBox">
              <img src="images/agriculture-02.png" alt="">
              <h5>
                <a href="college-filter-management.php?q=agriculture" title="B.M.S. Colleges in India">agriculture</a>
              </h5>
              <p>6077 Colleges</p>
            </div>
            <div class="collgBox">
              <img src="images/it-02.png" alt="">
              <h5>
                <a href="college-filter-management.php?q=InformationTechnology" title="B.M.S. Colleges in India">Information Technology</a>
              </h5>
              <p>6077 Colleges</p>
            </div>
            <div class="collgBox">
              <img src="images/dental-02.png" alt="">
              <h5>
                <a href="college-filter-management.php?q=dental" title="B.M.S. Colleges in India">dental</a>
              </h5>
              <p>6077 Colleges</p>
            </div>
            <div class="collgBox">
              <img src="images/design-02.png" alt="">
              <h5>
                <a href="college-filter-management.php?q=design" title="B.M.S. Colleges in India">design</a>
              </h5>
              <p>6077 Colleges</p>
            </div>
            <div class="collgBox">
              <img src="images/education-02.png" alt="">
              <h5>
                <a href="college-filter-management.php?q=education" title="B.M.S. Colleges in India">education</a>
              </h5>
              <p>6077 Colleges</p>
            </div>
            <div class="collgBox">
              <img src="images/hotel-02.png" alt="">
              <h5>
                <a href="college-filter-management.php?q=hotelManagement" title="B.M.S. Colleges in India">hotel Management</a>
              </h5>
              <p>6077 Colleges</p>
            </div>
            <div class="collgBox">
              <img src="images/art-02.png" alt="">
              <h5>
                <a href="college-filter-management.php?q=InformationTechnology" title="B.M.S. Colleges in India">Information Technology</a>
              </h5>
              <p>6077 Colleges</p>
            </div>
            <div class="collgBox">
              <img src="images/art-02.png" alt="">
              <h5>
                <a href="college-filter-management.php?q=art" title="B.M.S. Colleges in India">art</a>
              </h5>
              <p>6077 Colleges</p>
            </div>
            <div class="collgBox">
              <img src="images/para-02.png" alt="">
              <h5>
                <a href="college-filter-management.php?q=paramedical" title="B.M.S. Colleges in India">paramedical</a>
              </h5>
              <p>6077 Colleges</p>
            </div>
            <div class="collgBox">
              <img src="images/para-02.png" alt="">
              <h5>
                <a href="college-filter-management.php?q=paramedical" title="B.M.S. Colleges in India">paramedical</a>
              </h5>
              <p>6077 Colleges</p>
            </div>
          </div>
        </div>
        <input type="radio" id="Exams" name="futureTabs">
        <label for="Exams">Exams</label>
        <div class="allTabs">
          <div class="conteintBox">
            <div class="collgBox">
              <img src="images/jee-02.png" alt="">
              <h5>
                <a href="/information-technology-stream/" title="B.M.S. Colleges in India">JEE</a>
              </h5>
              <p>6077 Colleges</p>
            </div>
            <div class="collgBox">
              <img src="images/Jeem-02.png" alt="">
              <h5>
                <a href="/information-technology-stream/" title="B.M.S. Colleges in India">JEE MAIN</a>
              </h5>
              <p>6077 Colleges</p>
            </div>
            <div class="collgBox">
              <img src="images/NEET-02.png" alt="">
              <h5>
                <a href="/information-technology-stream/" title="B.M.S. Colleges in India">NEET</a>
              </h5>
              <p>6077 Colleges</p>
            </div>
            <div class="collgBox">
              <img src="images/cat-02.png" alt="">
              <h5>
                <a href="/information-technology-stream/" title="B.M.S. Colleges in India">CAT</a>
              </h5>
              <p>6077 Colleges</p>
            </div>
            <div class="collgBox">
              <img src="images/janapas-02.png" alt="">
              <h5>
                <a href="/information-technology-stream/" title="B.M.S. Colleges in India">JEN PAS</a>
              </h5>
              <p>6077 Colleges</p>
            </div>
            <div class="collgBox">
              <img src="images/wbjee-02.png" alt="">
              <h5>
                <a href="/information-technology-stream/" title="B.M.S. Colleges in India">WBJEE</a>
              </h5>
              <p>6077 Colleges</p>
            </div>
            <div class="collgBox">
              <img src="images/upsee-02.png" alt="">
              <h5>
                <a href="/information-technology-stream/" title="B.M.S. Colleges in India">UPSEE</a>
              </h5>
              <p>6077 Colleges</p>
            </div>
            <div class="collgBox">
              <img src="images/gate-02.png" alt="">
              <h5>
                <a href="/information-technology-stream/" title="B.M.S. Colleges in India">GATE</a>
              </h5>
              <p>6077 Colleges</p>
            </div>
            <div class="collgBox">
              <img src="images/cmat-02.png" alt="">
              <h5>
                <a href="/information-technology-stream/" title="B.M.S. Colleges in India">CMAT</a>
              </h5>
              <p>6077 Colleges</p>
            </div>
            <div class="collgBox">
              <img src="images/12thwb-02.png" alt="">
              <h5>
                <a href="/information-technology-stream/" title="B.M.S. Colleges in India">12th WB</a>
              </h5>
              <p>6077 Colleges</p>
            </div>
            <div class="collgBox">
              <img src="images/aieee-02.png" alt="">
              <h5>
                <a href="/information-technology-stream/" title="B.M.S. Colleges in India">AIEEE</a>
              </h5>
              <p>6077 Colleges</p>
            </div>
            <div class="collgBox">
              <img src="images/ailet-02.png" alt="">
              <h5>
                <a href="/information-technology-stream/" title="B.M.S. Colleges in India">AILET</a>
              </h5>
              <p>6077 Colleges</p>
            </div>
            <div class="collgBox">
              <img src="images/mat-02.png" alt="">
              <h5>
                <a href="/information-technology-stream/" title="B.M.S. Colleges in India">MAT</a>
              </h5>
              <p>6077 Colleges</p>
            </div>
            <div class="collgBox">
              <img src="images/xat-02.png" alt="">
              <h5>
                <a href="/information-technology-stream/" title="B.M.S. Colleges in India">XAT</a>
              </h5>
              <p>6077 Colleges</p>
            </div>
            <div class="collgBox">
              <img src="images/atma-02.png" alt="">
              <h5>
                <a href="/information-technology-stream/" title="B.M.S. Colleges in India">ATMA</a>
              </h5>
              <p>6077 Colleges</p>
            </div>
            <div class="collgBox">
              <img src="images/atimpt-02.png" alt="">
              <h5>
                <a href="/information-technology-stream/" title="B.M.S. Colleges in India">AIPMT</a>
              </h5>
              <p>6077 Colleges</p>
            </div>
          </div>
        </div>
        <input type="radio" id="Courses" name="futureTabs">
        <label for="Courses">Courses</label>
        <div class="allTabs">
          <div class="conteintBox">
            <div class="collgBox">
              <img src="images/btech-02.png" alt="">
              <h5>
                <a href="/information-technology-stream/" title="B.M.S. Colleges in India">B.TECH</a>
              </h5>
              <p>6077 Colleges</p>
            </div>
            <div class="collgBox">
              <img src="images/mba-02.png" alt="">
              <h5>
                <a href="/information-technology-stream/" title="B.M.S. Colleges in India">MBA</a>
              </h5>
              <p>6077 Colleges</p>
            </div>
            <div class="collgBox">
              <img src="images/bsc-02.png" alt="">
              <h5>
                <a href="/information-technology-stream/" title="B.M.S. Colleges in India">B.Sc</a>
              </h5>
              <p>6077 Colleges</p>
            </div>
            <div class="collgBox">
              <img src="images/bed-02.png" alt="">
              <h5>
                <a href="/information-technology-stream/" title="B.M.S. Colleges in India">B.Ed</a>
              </h5>
              <p>6077 Colleges</p>
            </div>
            <div class="collgBox">
              <img src="images/bpharma-02.png" alt="">
              <h5>
                <a href="/information-technology-stream/" title="B.M.S. Colleges in India">B.Pharm</a>
              </h5>
              <p>6077 Colleges</p>
            </div>
            <div class="collgBox">
              <img src="images/mtech-02.png" alt="">
              <h5>
                <a href="/information-technology-stream/" title="B.M.S. Colleges in India">M.Tech</a>
              </h5>
              <p>6077 Colleges</p>
            </div>
            <div class="collgBox">
              <img src="images/mcom-02.png" alt="">
              <h5>
                <a href="/information-technology-stream/" title="B.M.S. Colleges in India">M.Com</a>
              </h5>
              <p>6077 Colleges</p>
            </div>
            <div class="collgBox">
              <img src="images/ma-02.png" alt="">
              <h5>
                <a href="/information-technology-stream/" title="B.M.S. Colleges in India">M.A.</a>
              </h5>
              <p>6077 Colleges</p>
            </div>
            <div class="collgBox">
              <img src="images/ba-02.png" alt="">
              <h5>
                <a href="/information-technology-stream/" title="B.M.S. Colleges in India">B.A</a>
              </h5>
              <p>6077 Colleges</p>
            </div>
            <div class="collgBox">
              <img src="images/diploma-02.png" alt="">
              <h5>
                <a href="/information-technology-stream/" title="B.M.S. Colleges in India">Diploma</a>
              </h5>
              <p>6077 Colleges</p>
            </div>
            <div class="collgBox">
              <img src="images/bcom-02.png" alt="">
              <h5>
                <a href="/information-technology-stream/" title="B.M.S. Colleges in India">B.Com</a>
              </h5>
              <p>6077 Colleges</p>
            </div>
            <div class="collgBox">
              <img src="images/llb-02.png" alt="">
              <h5>
                <a href="/information-technology-stream/" title="B.M.S. Colleges in India">LLB</a>
              </h5>
              <p>6077 Colleges</p>
            </div>
            <div class="collgBox">
              <img src="images/gnm-02.png" alt="">
              <h5>
                <a href="/information-technology-stream/" title="B.M.S. Colleges in India">GNM</a>
              </h5>
              <p>6077 Colleges</p>
            </div>
            <div class="collgBox">
              <img src="images/bds-02.png" alt="">
              <h5>
                <a href="/information-technology-stream/" title="B.M.S. Colleges in India">BDS</a>
              </h5>
              <p>6077 Colleges</p>
            </div>
            <div class="collgBox">
              <img src="images/md-02.png" alt="">
              <h5>
                <a href="/information-technology-stream/" title="B.M.S. Colleges in India">M.D.</a>
              </h5>
              <p>6077 Colleges</p>
            </div>
          </div>
        </div>
        <!-- <input type="radio" id="Career" name="futureTabs">
        <label for="Career">Career</label>
        <div class="allTabs">
          <h1>Career</h1>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Maiores incidunt pariatur itaque laudantium, nesciunt minima,
            fugit earum officiis placeat assumenda quisquam labore tenetur
            odio dolor! Eaque quisquam suscipit sit ut!</p>
        </div> -->
      </div>
    </div>
  </section>

  <!-- Top Colleges Section End -->

  <!-- Top Colleges Section Start -->
  <section class="TopColleges" id="TopColleges">
    <div class="container">
      <h1 class="heading">top Study Places</h1>
      <hr>
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
      </div>

  </section>

  <!-- Contact Section Start -->

  <section id="clients" class="clients">

    <!-- Button trigger modal -->
    <button type="button" class="eqry" data-bs-toggle="modal" data-bs-target="#exampleModal">
      enquiry now
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h2 class="modal-title" id="exampleModalLabel">quick contact +91 1202548587</h2>
            <h2 class="modal-title" id="exampleModalLabel">Admission open 2022</h2>
          </div>
          <div class="modal-body">
            <div class="topBox">
              <div class="imgBox1">
                <img src="images/modalpic-01.png" alt="">
              </div>
              <!-- <div class="imgBox2">
                <img src="images/logoBrand-01.png" alt="">
              </div> -->
            </div>
            <form>
              <div class="form-group">
                <div class="row">
                  <div class="col-4"><input type="text" name="name" class="form-control" placeholder="Name" required="">
                  </div>
                  <div class="col-4"><input type="email" name="email" class="form-control" placeholder="Email"
                      required=""></div>
                  <div class="col-4"><input type="text" name="mobile" class="form-control" placeholder="Phone number"
                      required=""></div>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col-4">
                    <select id="state3" name="state" class="form-control" required="">
                      <option value="">Select Your State</option>
                      <option value="Andaman &amp; Nicobar">Andaman &amp; Nicobar</option>
                      <option value="Andhra Pradesh">Andhra Pradesh</option>
                      <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                      <option value="Assam">Assam</option>
                      <option value="Bihar">Bihar</option>
                      <option value="Chandigarh">Chandigarh</option>
                      <option value="Chandigarh">Wes Bengal</option>
                    </select>
                  </div>
                  <div class="col-4">
                    <select name="city" id="city3" class="form-control" required="">
                      <option>Select Your City</option>

                      <option value="B. Pharm">Kolkata</option>
                      <option value="B.A. LLB">Banglore</option>
                      <option value="B.A.M.S">Mumbai</option>
                      <option value="B.Arch">Dwlhi</option>
                      <option value="B.Com">haydrabad</option>
                    </select>
                  </div>
                  <div class="col-4">
                    <select class="form-control" name="course" id="popupcourse" required="">
                      <option value="">Select course</option>

                      <option value="B. Pharm">B. Pharm</option>
                      <option value="B.A. LLB">B.A. LLB</option>
                      <option value="B.A.M.S">B.A.M.S</option>
                      <option value="B.Arch">B.Arch</option>
                      <option value="B.Com">B.Com</option>

                    </select>
                  </div>
                </div>
              </div>

              <div class="form-group">
                <textarea name="message" placeholder="Message" class="form-control"></textarea>
              </div>
              <button type="submit" class="btn btn3">Submit</button>
              <button type="reset" class="btn btn3" id="closeBtn">Reset</button>
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Contact Section End -->



  <!-- counselling start -->

  <section class="image-bg endCounselling" id="end-counselling">
    <div class="container">

      <!-- <p class="main-p">At Future Lift, academic experts help you evaluate your career and
        course choices accurately while taking into account your educational background,
        strengths &amp; skills. From shortlisting the best colleges to tracking your entire
        admission process, the counselling by our experts will make your higher education
        journey hassle-free and put you on the path of success.
      </p> -->
      <div class="row">
        <h2 class="main-h1">Free Counselling with experts</h2>
        <h3 class="sub-h1">Looking to get the best career guidance? Our experts know exactly what you need!</h3>
        <div class="col-12 col-md-6">
          <div class="counselling-left">
            <img src="images/counselling-01.png" alt="" class="img-fluid">
            <!-- <div class="video" data-video="-7vZeUhWn-E" data-width="100%" data-height="350px">
              <span class="watch-video">Watch video</span>
            </div> -->
            <div class="popUpVideoContent">
              <div class="container">
                <div class="closeIcon"></div>
                <div class="block lavelBlock" id="watchvideo">
                  <!-- -->
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-6 counselling-right">
          <div class="">
            <div class="counselling-content" data-aos="slide-right" data-aos-delay="300">
              <ul>
                <li>
                  <div>
                    <span class="counselling-right-image ic-1">
                      <img src="images/nohiddenicon-03.png" alt="" class="img-fluid">
                    </span>
                    <p>No Hidden <br> Charges</p>
                  </div>
                </li>
                <li>
                  <div>
                    <span class="counselling-right-image ic-2">
                      <img src="images/counsellingicon-03.png" alt="" class="img-fluid">
                    </span>
                    <p>1 on 1 <br> Counselling</p>
                  </div>
                </li>
                <li>
                  <div>
                    <span class="counselling-right-image ic-3">
                      <img src="images/onlineeduicon-03.png" alt="" class="img-fluid">
                    </span>
                    <p>100% Online <br> Process</p>
                  </div>
                </li>
                <!-- <li>
                  <div>
                    <span class="counselling-right-image ic-4">
                      <img src="/images/experticon-03.png" alt="" class="img-fluid">
                    </span>
                    <p>Best Experts <br> in India</p>
                  </div>
                </li> -->
                <!-- <li>
                  <div>
                    <span class="counselling-right-image ic-5">
                      <img src="/images/stayhomeicon-03.png" alt="" class="img-fluid">
                    </span>
                    <p>No need to step <br> out of home</p>
                  </div>
                </li>
                <li> -->
                <!-- <div>
                    <span class="counselling-right-image ic-6">
                      <img src="/images/loanicon-03.png" alt="" class="img-fluid">
                    </span>
                    <p>Loan Support @ <br> 0% Interest</p>
                  </div> -->
                </li>
              </ul>
              <button class="btn django-button-config button django-form-submit apply_now_det_cd gtm-lead-click home-btn"
              data-gsp-ripple="" data-toggle="modal" data-button_id="27" data-cta_id="206"
              onclick="ga('send', 'event', 'enquiry', 'show', 'enquiry-brochure');"><a href="career.php"
                class="creBtn">Talk to our Experts</a> </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- counselling end -->

  <section class="top-collection">
    <div class="container">
      <h1 class="heading">Top Universities/Colleges</h1>
      <hr>
      <div class="swiper mySwiper cardDetails" id="topUniversity">
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
      <div class="b-example-divider"></div>
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
  <!-- refer and earn -->
  <section class="referEarn">
    <div class="container">
      <div class="d-flex flex-wrap-reverse align-tems-center" data-aos="fade-up" data-aos-delay="300">

        <div class="col-lg-6 col-md-10 col-sm-12 p-5 alRef">
          <div class="content d-flex">
            <img src="images/fly-01.png" alt="" class=" img-fluid flyIcon">
            <h2>refer & earn</h2>
          </div>
          <div class="content d-flex refrupi">
            <p class="upto">upto</p>
            <i class="fa fa-inr" aria-hidden="true"></i>
            <p class="rupis">50,000</p>
          </div>
          <p class="refText">become a career counselor<a href="refer_earn_TC.html" class="tc">(T&C)</a></p>
        </div>
        <div class="col-lg-6 col-md-10 col-sm-12  p-5  alRef">
          <img src="images/refer.png" alt="" class="img-fluid imgaRef ">
          <a href="referandearnsharecode.html" class="btn ml-5 text-center">view more</a>
        </div>
      </div>

  </section>
  <!-- refer and earn end -->

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
  <!-- top collection end -->
  <!-- review start -->
  <section class="review" id="allReview">
    <div class="container">
      <h1 class="heading">Why Everyone Love Future Lift!</h1>
      <hr>
      <p>Our users get value from our Services, Here they Share their Experiences and thoughts about us.
      </p>

      <div class="reviewTabs">
        <input type="radio" id="parents" name="reviewTabs" checked="checked">
        <label for="parents">parents</label>
        <div class="reviewTab">
          <div class="swiper mySwiper mySwiper1">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="content">
                  <div class="card">
                    <div class="card-content">
                      <div class="image">
                        <img src="images/team-1.jpg" alt="">
                      </div>
                      <div class="text-content">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam quam deleniti enim!</p>
                        <h3>lolypop</h3>
                      </div>
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
                      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam quam deleniti enim!</p>
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
                      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam quam deleniti enim!</p>
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
                      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam quam deleniti enim!</p>
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
                      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam quam deleniti enim!</p>
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
                      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam quam deleniti enim!</p>
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
                      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam quam deleniti enim!</p>
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
                      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam quam deleniti enim!</p>
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
                      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam quam deleniti enim!</p>
                      <h3>lolypop</h3>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
          </div>
        </div>
        <input type="radio" id="students" name="reviewTabs">
        <label for="students">students</label>
        <div class="reviewTab">
          <div class="swiper mySwiper mySwiper1">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="content">
                  <div class="card">
                    <div class="card-content">
                      <div class="image">
                        <img src="images/team-4.jpg" alt="">
                      </div>
                      <div class="text-content">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam quam deleniti enim!</p>
                        <h3>lolypop</h3>
                      </div>
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
                      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam quam deleniti enim!</p>
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
                      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam quam deleniti enim!</p>
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
                      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam quam deleniti enim!</p>
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
                      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam quam deleniti enim!</p>
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
                      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam quam deleniti enim!</p>
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
                      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam quam deleniti enim!</p>
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
                      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam quam deleniti enim!</p>
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
                      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam quam deleniti enim!</p>
                      <h3>lolypop</h3>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
          </div>
        </div>
        <input type="radio" id="colleges" name="reviewTabs">
        <label for="colleges">colleges</label>
        <div class="reviewTab">
          <div class="swiper mySwiper mySwiper1">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="content">
                  <div class="card">
                    <div class="card-content">
                      <div class="image">
                        <img src="/images/team-3.jpg" alt="">
                      </div>
                      <div class="text-content">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam quam deleniti enim!</p>
                        <h3>lolypop</h3>
                      </div>
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
                      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam quam deleniti enim!</p>
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
                      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam quam deleniti enim!</p>
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
                      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam quam deleniti enim!</p>
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
                      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam quam deleniti enim!</p>
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
                      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam quam deleniti enim!</p>
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
                      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam quam deleniti enim!</p>
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
                      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam quam deleniti enim!</p>
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
                      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam quam deleniti enim!</p>
                      <h3>lolypop</h3>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- review end -->
  <!-- get started -->
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
              <div class="col-lg-4">
                <button type="submit" class="btn">get started</button>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </section>
  <!-- FAQ Start -->
  <section class="faQs">
    <div class="container">
      <h1 class="heading">FAQs</h1>
      <hr>
      <div class="row">
        <div class="d-flex flex-wrap">
          <div class="col-lg-6 col-md-6 col-sm-12 accoFaq">
            <div class="accordion" id="accordionPanelsStayOpenExample">

              <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingOne">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                    <h3>What happens if I cancel my booked Session?</h3>
                  </button>
                </h2>
                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne"
                  data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">
                    <h5>Emergencies happen any case . We get that. And we want to ensure that you have a
                      great, hassle free career counselling session. If you need to cancel your
                      session, here’s what you can do :</h5>
                    <p>Login to our website or app and cancel the session through your account.
                      Cancellation, cannot be done through calls or messages.</p>
                    <p>While cancelling, reschedule your session.</p>
                    <p>If you cancel between 36-48 hours before your scheduled session, you will
                      get a 40%Refund,which can only be availed on booking your next session.</p>
                    <p>If you cancel between 24-36 hours before your scheduled session, you will
                      get a 50%
                      Refund, which can only be availed on booking your next session.</p>
                    <p>If you cancel less than 24 hours before your scheduled session, you will
                      not get a Refund.</p>
                    <p>If you don’t show up for your session or fail to cancel your session, you
                      will not get a refund.</p>
                    <p>If your counsellor cancels the session, you will get a full refund while
                      booking your next session.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12 accoFaq">
            <div class="accordion" id="accordionPanelsStayOpenExample">
              <div class="accordion-item">
                <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false"
                    aria-controls="panelsStayOpen-collapseTwo">
                    <h3>What exactly does the Future Lift include?</h3>
                  </button>
                </h2>
                <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse"
                  aria-labelledby="panelsStayOpen-headingTwo">
                  <div class="accordion-body">
                    <p><strong>The FUTURE LIFT </strong> includes: Our psychometric test</p>
                    <p>A detailed report explaining the results of the assessment test</p>
                    <p>A counselling session where one of our trained. And certified counsellors
                      will take you through the report, understand you better and help you
                      discover the top three careers for you.</p>
                    <p>Lifetime access to the Knowledge Gateway which includes career content,
                      daily education news, weekly updates about your chosen careers, a
                      frequently-updated Blog section, information about colleges and universities
                    </p>
                    <p>1 year guaranteed hand holding support in career counseling and admission
                    </p>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="d-flex flex-wrap">
          <div class="col-lg-6 col-md-6 col-sm-12 accoFaq">
            <div class="accordion" id="accordionPanelsStayOpenExample">
              <div class="accordion-item">
                <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false"
                    aria-controls="panelsStayOpen-collapseThree">
                    <h3>I can’t find my find my college or college in my locality why don’t you have
                      information about them ?</h3>
                  </button>
                </h2>
                <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse"
                  aria-labelledby="panelsStayOpen-headingThree">
                  <div class="accordion-body">
                    <p>We do our best to include all the colleges as your need and also included the
                      course we provide information about:- B tech, M tech, MBA , BBA, BDS, B
                      PHARMACY, M PHARMACY, LLB , LLM, NURSING, B.Ed., B.com, M.com, MA, However
                      despite of our efforts we can missed out the colleges but try to over all
                      best ones.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12 accoFaq">
            <div class="accordion" id="accordionPanelsStayOpenExample">
              <div class="accordion-item">
                <h2 class="accordion-header" id="panelsStayOpen-headingFour">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#panelsStayOpen-collapseFour" aria-expanded="false"
                    aria-controls="panelsStayOpen-collapseFour">
                    <h3>What if I'm not happy with the careers I get?</h3>
                  </button>
                </h2>
                <div id="panelsStayOpen-collapseFour" class="accordion-collapse collapse"
                  aria-labelledby="panelsStayOpen-headingFour">
                  <div class="accordion-body">
                    <p>If you are not happy with your assigned careers, discuss it with the
                      counsellor during the session itself. This way, you can address all your
                      queries and concerns and shortlist three careers that YOU feel you will
                      truly enjoy. If you wish to make any changes to the recommendations after
                      the session is over, you can get in touch with us through a phone call or
                      email. We will arrange for another counselling session to address your
                      concerns in the best possible way. </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12 accoFaq">
            <div class="accordion" id="accordionPanelsStayOpenExample">
              <div class="accordion-item">
                <h2 class="accordion-header" id="panelsStayOpen-headingFive">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#panelsStayOpen-collapseFive" aria-expanded="false"
                    aria-controls="panelsStayOpen-collapseFive">
                    <h3>How many career options will the assessment give me? Am I allowed to select
                      more than one?</h3>
                  </button>
                </h2>
                <div id="panelsStayOpen-collapseFive" class="accordion-collapse collapse"
                  aria-labelledby="panelsStayOpen-headingFive">
                  <div class="accordion-body">
                    <p>Based on your assessment your report will have the top 10 career suggestions
                      for you
                      Based on conversations you and your parents have with the counsellor during
                      the session , you will shortlist the top 3 careers for yourself.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12 accoFaq">
            <div class="accordion" id="accordionPanelsStayOpenExample">
              <div class="accordion-item">
                <h2 class="accordion-header" id="panelsStayOpen-headingSix">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#panelsStayOpen-collapseSix" aria-expanded="false"
                    aria-controls="panelsStayOpen-collapseSix">
                    <h3>How can I make payment for the career test?</h3>
                  </button>
                </h2>
                <div id="panelsStayOpen-collapseSix" class="accordion-collapse collapse"
                  aria-labelledby="panelsStayOpen-headingSix">
                  <div class="accordion-body">
                    <p>The payment can only be made online by Net Banking/Credit Card/ Debit Card.
                      The payment gateway is verified and is secure for making payments. Select
                      only the Career Test which is relevant/ recommended for you this year.
                      Career Tests once paid for can be refunded on specific terms and conditions
                      which will totally investigated and analyzed by us only. </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12 accoFaq">
            <div class="accordion" id="accordionPanelsStayOpenExample">
              <div class="accordion-item">
                <h2 class="accordion-header" id="panelsStayOpen-headingSeven">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#panelsStayOpen-collapseSeven" aria-expanded="false"
                    aria-controls="panelsStayOpen-collapseSeven">
                    <h3>How can I make payment for the Counseling and Admission?</h3>
                  </button>
                </h2>
                <div id="panelsStayOpen-collapseSeven" class="accordion-collapse collapse"
                  aria-labelledby="panelsStayOpen-headingSeven">
                  <div class="accordion-body">
                    <p>The payment can only be made online by Net Banking/Credit Card/ Debit Card.
                      The payment gateway is verified and is secure for making payments. Select
                      only the Career Test which is relevant/ recommended for you this year.
                      Career Tests once paid for can be refunded on specific terms and conditions
                      which will totally investigated and analyzed by us only. </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12 accoFaq">
            <div class="accordion" id="accordionPanelsStayOpenExample">
              <div class="accordion-item">
                <h2 class="accordion-header" id="panelsStayOpen-headingEight">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#panelsStayOpen-collapseEight" aria-expanded="false"
                    aria-controls="panelsStayOpen-collapEight">
                    <h3>How do students approach Future Lift?</h3>
                  </button>
                </h2>
                <div id="panelsStayOpen-collapseEight" class="accordion-collapse collapse"
                  aria-labelledby="panelsStayOpen-headingEight">
                  <div class="accordion-body">
                    <p>Students usually follow two primary routes: </p>
                    <ul>
                      <li>School or college tie-ups:
                        <ul>
                          <li>This is where we approach an institution and enters into an understanding with them, wherein the school grants us permission to conduct psychometric testing and Career Counselling with their students.</li>
                        </ul>
                      </li>
                    </ul> 
                    <ul>
                      <li>Digital acquisition:
                        <ul>
                          <li>We conduct online marketing campaigns targeting students who are actively looking for career counselling and unable to choose their true career calling.</li>
                        </ul>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12 accoFaq">
            <div class="accordion" id="accordionPanelsStayOpenExample">
              <div class="accordion-item">
                <h2 class="accordion-header" id="panelsStayOpen-headingNine">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#panelsStayOpen-collapseNine" aria-expanded="false"
                    aria-controls="panelsStayOpen-collapNine">
                    <h3>How much does the Future Lift solution cost?</h3>
                  </button>
                </h2>
                <div id="panelsStayOpen-collapseNine" class="accordion-collapse collapse"
                  aria-labelledby="panelsStayOpen-headingNine">
                  <div class="accordion-body">
                    <p>You could opt for the Online Session for INR 1499 (including 18% GST), INR 1999 (including 18% GST), INR 4999 (including 18% GST), where you can attend the counselling session over a video call through our Link. Offline sessions are only available in Burdwan, Howrah & Kolkata at the moment. However, due to the ongoing pandemic, we’re only offering online sessions at the moment.
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
  <!-- FAQ End -->

  <!-- footer Start -->
  <footer class="footer">
    <div class="row">
      <div class="main-first d-flex flex-wrap align-items-center">
        <div class="main1 col-3">
            <a href="index.php" class="logo"><img src="images/logoBrand-01.png" alt="" ></a>
        </div>
        <div class="footerHead">
            <h4 class="text-light ">quick links</h4>
            <ul>
                <li><a href="about.html">about us</a></li>
                <li><a href="">FAQs</a></li>
                <li><a href="policy.html">privacy policy</a></li>
                <li><a href="refund_cancelletion.html">refunds & cancellations</a></li>
            </ul>
        </div>
        <div class="footerHead">
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
            <a href="https://youtube.com/channel/UCvY_1Aon-HqSHzqWwvIU2zQ"><i class="fab fa-youtube-square"></i></a>
            <a href="https://www.linkedin.com/company/futurelift-duication"><i class="fab fa-linkedin"></i></a>

        </div>
    </div>
  </div>
    <hr>
    <p>copyrights&copy;<span> future lift</span>-2022</p>
</footer>
  <!-- Footer End -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="fas fa-arrow-up"></i></a>








  <!-- Swiper JS -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="aos/aos.js"></script>
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  <script src="js/script.js"></script>

</body>

</html>