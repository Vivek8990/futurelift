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

  <!-- Home Section Start -->
  <section class="return" id="retun_home">
    <div class="container-fluid">
      <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 homebanner">
              <img src="images/examate-01.png" alt="" class="img-fluid">
          </div>
          <div class=" col-lg-8 col-md-6 col-sm-12 homebannerText">
              <a href="career-form.php" target="_blank" class="btn btnExamt"> start test</a>
          </div>
      </div>
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
<section class="examatePart" id="cpartExamate">
    <div class="container">
      <h1 class="heading text-center">what are you looking for</h1>
      <div class="row exmtBox">
          <div class="col-lg-2 exmtIconBox mb-5">
            <img src="images/examtpreparation-03.png" alt="" class="img-fluid">
            <h1>exam preparationam</h1>
          </div>
          <div class="col-lg-2 exmtIconBox mb-5">
            <img src="images/examateFree-03.png" alt="" class="img-fluid">
            <h1>free course</h1>
          </div>
          <div class="col-lg-2 exmtIconBox mb-5">
            <img src="images/examtcurrentaffair-03.png" alt="" class="img-fluid">
            <h1>mock test</h1>
          </div>
          <div class="col-lg-2 exmtIconBox mb-5">
            <img src="images/examtExam-03.png" alt="" class="img-fluid">
            <h1>education news</h1>
          </div>
          <div class="col-lg-2 exmtIconBox mb-5">
            <img src="images/examtGK-03.png" alt="" class="img-fluid">
           <h1>general knowledge</h1>
          </div>
          <div class="col-lg-2 exmtIconBox mb-5">
            <img src="images/examClass-03.png" alt="" class="img-fluid">
            <h1>offline class</h1>
          </div>
        </div>
    </div>
    <div class="explrProductsPart mt-5">
      <div class="container">
        <h1 class="heading text-center">Explore by <span>exams</span> </h1>
        <div class="row">
          <div class="main_tab d-flex">
            <div class="col-lg-2 leftSide_nav">
              <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <a class="nav-link active" id="v-pills-entranceExam-tab" data-bs-toggle="pill" data-bs-target="#v-pills-entranceExam" type="button" role="tab" aria-controls="v-pills-entranceExam" aria-selected="true">Entrance Exams</a>
                <a class="nav-link" id="v-pills-govJobs-tab" data-bs-toggle="pill" data-bs-target="#v-pills-govJobs" type="button" role="tab" aria-controls="v-pills-govJobs" aria-selected="false">Job exams</a>
              </div>
            </div>
            
            <div class="col-lg-10 tab-content right_side" id="v-pills-tabContent">
              <div class="tab-pane fade show active" id="v-pills-entranceExam" role="tabpanel" aria-labelledby="v-pills-entranceExam-tab">
                <!-- Horizantal tab content -->
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                  <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="pills-engeenering-tab" data-bs-toggle="pill" data-bs-target="#pills-engeenering" type="button" role="tab" aria-controls="pills-engeenering" aria-selected="true">engeenering</button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-medical-tab" data-bs-toggle="pill" data-bs-target="#pills-medical" type="button" role="tab" aria-controls="pills-medical" aria-selected="false">medical</button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-law-tab" data-bs-toggle="pill" data-bs-target="#pills-law" type="button" role="tab" aria-controls="pills-law" aria-selected="false">law</button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-management-tab" data-bs-toggle="pill" data-bs-target="#pills-management" type="button" role="tab" aria-controls="pills-management" aria-selected="false">management</button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-hotel-management-tab" data-bs-toggle="pill" data-bs-target="#pills-hotel-management" type="button" role="tab" aria-controls="pills-hotel-management" aria-selected="false">hotel management</button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-nursing-tab" data-bs-toggle="pill" data-bs-target="#pills-nursing" type="button" role="tab" aria-controls="pills-nursing" aria-selected="false">nursing</button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-design-tab" data-bs-toggle="pill" data-bs-target="#pills-design" type="button" role="tab" aria-controls="pills-design" aria-selected="false">design</button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-agree-tab" data-bs-toggle="pill" data-bs-target="#pills-agree" type="button" role="tab" aria-controls="pills-agree" aria-selected="false">agreeculture</button>
                  </li>
                </ul>
                <div class="tab-content" id="pills-tabContent">
                  <div class="tab-pane fade show active" id="pills-engeenering" role="tabpanel" aria-labelledby="pills-engeenering-tab">
                    <div class="course_tab">
                     <ul>
                       <li class="cors_link"><a href="">jee &nbsp; main</a></li>
                       <li class="cors_link"><a href="">jee Advanced</a></li>
                       <li class="cors_link"><a href="">wbjee</a></li>
                       <li class="cors_link"><a href="">srmjee</a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="pills-medical" role="tabpanel" aria-labelledby="pills-medical-tab">
                    <div class="course_tab">
                      <ul>
                        <li class="cors_link"><a href="">aiims &nbsp; mbbs</a></li>
                        <li class="cors_link"><a href="">xat</a></li>
                        <li class="cors_link"><a href="">Iiift</a></li>
                        <li class="cors_link"><a href="">Iiift</a></li>
                        <li class="cors_link"><a href="">neet &nbsp; pg</a></li>
                        <li class="cors_link"><a href="">bvp &nbsp; cet</a></li>


                      </ul>
                     </div>
                  </div>
                  <div class="tab-pane fade" id="pills-law" role="tabpanel" aria-labelledby="pills-law-tab">
                    <div class="course_tab">
                      <ul>
                        <li class="cors_link"><a href="">lasat-india</a></li>
                        <li class="cors_link"><a href="">clat</a></li>
                        <li class="cors_link"><a href="">set</a></li>
                        <li class="cors_link"><a href="">ailet</a></li>

                      </ul>
                     </div>
                  </div>
                  <div class="tab-pane fade" id="pills-management" role="tabpanel" aria-labelledby="pills-management-tab">
                    <div class="course_tab">
                      <ul>
                        <li class="cors_link"><a href="">cat</a></li>
                        <li class="cors_link"><a href="">xat</a></li>
                        <li class="cors_link"><a href="">iift</a></li>
                        <li class="cors_link"><a href="">snap</a></li>
                        <li class="cors_link"><a href="">gmat</a></li>
                      </ul>
                     </div>
                  </div>
                  <div class="tab-pane fade" id="pills-hotel-management" role="tabpanel" aria-labelledby="pills-hotel-management-tab">
                    <div class="course_tab">
                      <ul>
                        <li class="cors_link"><a href="">nchmct</a></li>
                        <li class="cors_link"><a href="">jee</a></li>
                        <li class="cors_link"><a href="">jmiee</a></li>
                      </ul>
                     </div>
                  </div>
                  <div class="tab-pane fade" id="pills-nursing" role="tabpanel" aria-labelledby="pills-nursing-tab">
                    <div class="course_tab">
                      <ul>
                        <li class="cors_link"><a href="">jenpas</a></li>
                        <li class="cors_link"><a href="">cpnet</a></li>
                      </ul>
                     </div>
                  </div>
                  <div class="tab-pane fade" id="pills-design" role="tabpanel" aria-labelledby="pills-design-tab">
                    <div class="course_tab">
                      <ul>
                        <li class="cors_link"><a href="">ceed</a></li>
                        <li class="cors_link"><a href="">set</a></li>
                        <li class="cors_link"><a href="">ajeed</a></li>
                        <li class="cors_link"><a href="">uceed</a></li>
                      </ul>
                     </div>
                  </div>
                  <div class="tab-pane fade" id="pills-agree" role="tabpanel" aria-labelledby="pills-agree-tab">
                    <div class="course_tab">
                      <ul>
                        <li class="cors_link"><a href="">saat</a></li>
                        <li class="cors_link"><a href="">bcece</a></li>
                      </ul>
                     </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="v-pills-govJobs" role="tabpanel" aria-labelledby="v-pills-govJobs-tab">
                <div class="row">
                  <div class="d-flex flex-wrap jobBox">
                    <div class="col-2">
                      <ul class="">
                        <li>
                          <img src="images/bank icon-05.png" alt="" class="img-fluid">
                        <a href="">bank jobs</a>
                        </li>
                      </ul>
                    </div>
                    <div class="col-2">
                      <ul>
                        <li>
                          <img src="images/rail-05.png" alt="" class="img-fluid">
                        <a href="">raiways jobs</a>
                        </li>
                      </ul>
                    </div>
                    <div class="col-2">
                      <ul>
                        <li>
                          <img src="images/psu-05.png" alt="" class="img-fluid">
                        <a href="">psu jobs</a>
                        </li>
                      </ul>
                    </div>
                    <div class="col-2">
                      <ul>
                        <li>
                          <img src="images/defence-05.png" alt="" class="img-fluid">
                        <a href="">defence jobs</a>
                        </li>
                      </ul>
                    </div>
                    <div class="col-2">
                      <ul>
                        <li>
                          <img src="images/upsc-05.png" alt="" class="img-fluid">
                        <a href="">upsc jobs</a>
                        </li>
                      </ul>
                    </div>
                    <div class="col-2">
                      <ul>
                        <li>
                          <img src="images/ssc-05.png" alt="" class="img-fluid">
                        <a href="">ssc jobs</a>
                        </li>
                      </ul>
                    </div>
                    <div class="col-2">
                      <ul>
                        <li>
                          <img src="images/state psc-05.png" alt="" class="img-fluid">
                        <a href="">state psc jobs</a>
                        </li>
                      </ul>
                    </div>
                    <div class="col-2">
                      <ul>
                        <li>
                          <img src="images/police-05.png" alt="" class="img-fluid">
                        <a href="">police jobs</a>
                        </li>
                      </ul>
                    </div>
                    <div class="col-2">
                      <ul>
                        <li>
                          <img src="images/slet-05.png" alt="" class="img-fluid">
                        <a href="">icar|slet jobs</a>
                        </li>
                      </ul>
                    </div>
                    <div class="col-2">
                      <ul>
                        <li>
                          <img src="images/law-05.png" alt="" class="img-fluid">
                        <a href="">judicial jobs</a>
                        </li>
                      </ul>
                    </div>
                    <div class="col-2">
                      <ul>
                        <li>
                          <img src="images/teacher-05.png" alt="" class="img-fluid">
                        <a href="">teacher jobs</a>
                        </li>
                      </ul>
                    </div>
                    <div class="col-2">
                      <ul>
                        <li>
                          <img src="images/job-05.png" alt="" class="img-fluid">
                        <a href="">other jobs</a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="course_tab">
                  <!-- .
                  <ul class="">
                    <li class="cors_link d-flex flex-column">
                      <img src="images/bank icon-05.png" alt="" class="img-fluid">
                      <a href="">bank jobs</a>
                    </li>
                    <li class="cors_link d-flex flex-column">
                      <img src="images/bank icon-05.png" alt="" class="img-fluid">
                      <a href="">railways</a>
                    </li>
                    <li class="cors_link d-flex flex-column">
                      <img src="images/bank icon-05.png" alt="" class="img-fluid">
                      <a href="">psu jobs</a>
                    </li>
                    <li class="cors_link d-flex flex-column">
                      <img src="images/bank icon-05.png" alt="" class="img-fluid">
                      <a href="">defence jobs</a>
                    </li>
                    <li class="cors_link d-flex flex-column">
                      <img src="images/bank icon-05.png" alt="" class="img-fluid">
                      <a href="">upsc jobs</a>
                    </li>
                    <li class="cors_link d-flex flex-column">
                      <img src="images/bank icon-05.png" alt="" class="img-fluid">
                      <a href="">ssc jobs</a>
                    </li>
                    <li class="cors_link d-flex flex-column">
                      <img src="images/bank icon-05.png" alt="" class="img-fluid">
                      <a href=""> state psc jobs</a>
                    </li>
                    <li class="cors_link d-flex flex-column">
                      <img src="images/bank icon-05.png" alt="" class="img-fluid">
                      <a href="">police jobs</a>
                    </li>
                    <li class="cors_link d-flex flex-column">
                      <img src="images/bank icon-05.png" alt="" class="img-fluid">
                      <a href=""> icar|slat jobs</a>
                    </li>
                    <li class="cors_link d-flex flex-column">
                      <img src="images/bank icon-05.png" alt="" class="img-fluid">
                      <a href="">judccialjobs</a>
                    </li>
                    <li class="cors_link d-flex flex-column">
                      <img src="images/bank icon-05.png" alt="" class="img-fluid">
                      <a href="">lacture|teacherjobs</a>
                    </li>
                    <li class="cors_link d-flex flex-column">
                      <img src="images/bank icon-05.png" alt="" class="img-fluid">
                      <a href=""> other jobs</a>
                    </li>
                  </ul> -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
      
      
      <div class="product" id="exploreProduct">
        <div class="container">
          <h1 class="heading text-center">Explore by <span>Products</span></h1>
          <!-- <div class="explorProdctBox">
            <div class="textButtn">
              <h3>Online Classes</h3>
              <p>High quality online class any time anywhere by top faculty.</p>
              <a href="" class="btn">Explore Now</a>
            </div>
            <div class="imgButton">
              <img src="images/4896715 1.png" alt="" class="img-fluid">
            </div>
          </div> -->
          <div class="swiper mySwiper exploreProduct ">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="explorProdctBox">
                  <div class="textButtn">
                    <h3>Online Classes</h3>
                    <p>High quality online class any time anywhere by top faculty.</p>
                    <a href="" class="btn">Explore Now</a>
                  </div>
                  <div class="imgButton">
                    <img src="images/4896715 1.png" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="explorProdctBox">
                  <div class="textButtn">
                    <h3>Offline Classes</h3>
                    <p>Offline class in your city and doubt clearing by top Teachers.</p>
                    <a href="" class="btn">Explore Now</a>
                  </div>
                  <div class="imgButton">
                    <img src="images/3895251 1.png" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="explorProdctBox">
                  <div class="textButtn">
                    <h3>Free Video Course</h3>
                    <p>Fine the perfect course for you and get certificate.</p>
                    <a href="" class="btn">Explore Now</a>
                  </div>
                  <div class="imgButton">
                    <img src="images/4960559 1.png" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="explorProdctBox">
                  <div class="textButtn">
                    <h3>Mock Test</h3>
                    <p>Make your preparation better for ultimate exams.</p>
                    <a href="" class="btn">Explore Now</a>
                  </div>
                  <div class="imgButton">
                    <img src="images/onlinemockup-01 1.png" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="explorProdctBox">
                  <div class="textButtn">
                    <h3>Educational News </h3>
                    <p>Stay Updated with current educational news.</p>
                    <a href="" class="btn">Explore Now</a>
                  </div>
                  <div class="imgButton">
                    <img src="images/2424701-01 1.png" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="explorProdctBox">
                  <div class="textButtn">
                    <h3>E-books</h3>
                    <p>Read at your pleasure with immense collection of e -books.</p>
                    <a href="" class="btn">Explore Now</a>
                  </div>
                  <div class="imgButton">
                    <img src="images/5449680 1.png" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-pagination"></div>
            
          </div>
        </div>
      </div>
      <div class="preparationPart">
        <h1 class="heading text-center">future lift <span>preparation</span></h1>
        <p class="text-center">indias best career and education portal</p>
        <div class="container">
          <div class="row">
            <div class="col-lg-3 col-md-6 preparBox">
              <div class="preBox d-flex align-items-center">
                <div class="preImgBox">
                  <img src="images/visitors-03.png" alt="">
                </div>
                <div class="preTxtBox">
                  <h1 class="">5 lakhs +</h1>
                  <p>monthly visitors</p>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 preparBox">
              <div class="preBox d-flex align-items-center">
                <div class="preImgBox">
                  <img src="images/cap-03.png" alt="">
                </div>
                <div class="preTxtBox">
                  <h1 class="">25000 +</h1>
                  <p>coolleges</p>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 preparBox">
              <div class="preBox d-flex align-items-center">
                <div class="preImgBox">
                  <img src="images/video-03.png" alt="">
                </div>
                <div class="preTxtBox">
                  <h1 class="">500 +</h1>
                  <p>videos</p>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 preparBox">
              <div class="preBox d-flex align-items-center">
                <div class="preImgBox">
                  <img src="images/mocktest-03.png" alt="">
                </div>
                <div class="preTxtBox">
                  <h1 class="">100 +</h1>
                  <p>mock test</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="exmtNewsPart">
        <div class="container">
          <h1 class="heading text-center">latest education <span>news</span></h1>
          <div class="row">
            <div class="col-lg-12 newsbox py-3">
              <div class="col-lg-2 col-sm-2 newsImgBox">
                <img src="images/mamata-banerjee-1623931141.jpg" alt="" class="img-fluid">
              </div>
              <div class="col-lg-10 col-sm-10 newsText ml-3">
                <p class="px-4">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eligendi illo alias ratione delectus aspernatur laudantium deserunt ipsa nobis, error veritatis itaque possimus harum fugit qui molestias blanditiis quam, molestiae quae. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptates aliquam natus architecto quidem odit ullam nemo, laboriosam magni expedita unde saepe tempora sed accusamus, alias sapiente laudantium temporibus repellendus dignissimos eum quas nesciunt suscipit deserunt quo possimus? Tempora, ad eligendi!<a href="https://www.ndtv.com/india-news/nupur-sharma-hate-speech-mamata-asks-demonstrators-to-go-protest-in-delhi-3052898" target="_blank">...see more</a> </p>
              </div>
            </div>
            <div class="col-lg-12 newsbox py-3">
              <div class="col-lg-2 newsImgBox">
                <img src="images/mamata-banerjee-1623931141.jpg" alt="" class="img-fluid">
              </div>
              <div class="col-lg-10 newsText ml-3">
                <p class="px-4">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eligendi illo alias ratione delectus aspernatur laudantium deserunt ipsa nobis, error veritatis itaque possimus harum fugit qui molestias blanditiis quam, molestiae quae. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolorem reiciendis reprehenderit dignissimos amet perferendis similique suscipit sint expedita deleniti iusto assumenda beatae eos officia quaerat quod, aspernatur earum maiores. Incidunt!<a href="https://www.ndtv.com/india-news/nupur-sharma-hate-speech-mamata-asks-demonstrators-to-go-protest-in-delhi-3052898" target="_blank">...see more</a> </p>
              </div>
            </div>
            <div class="col-lg-12 newsbox py-3">
              <div class="col-lg-2 newsImgBox">
                <img src="images/mamata-banerjee-1623931141.jpg" alt="" class="img-fluid">
              </div>
              <div class="col-lg-10 newsText ml-3">
                <p class="px-4">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eligendi illo alias ratione delectus aspernatur laudantium deserunt ipsa nobis, error veritatis itaque possimus harum fugit qui molestias blanditiis quam, molestiae quae. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum voluptatum dignissimos vel doloribus. Facere ratione nulla adipisci sit quidem voluptatum ipsam, officiis ut doloribus excepturi neque reiciendis voluptate? <a href="https://www.ndtv.com/india-news/nupur-sharma-hate-speech-mamata-asks-demonstrators-to-go-protest-in-delhi-3052898" target="_blank">...see more</a> </p>
              </div>
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
    var swiper = new Swiper(".exploreProduct", {
        slidesPerView: "6",
        spaceBetween: 30,
        // loop:true,
        pagination: {
          // el: ".swiper-pagination",
          clickable: true,
        },
        breakpoints: {
          375: {
            slidesPerView:"1",
            spaceBetween: 10,
            slidesPerGroup: 1,
          },
          // 450: {
          //   slidesPerView: 3,
          //   spaceBetween: 20,
          // },
          // 768: {
          //   slidesPerView: 4,
          //   spaceBetween: 40,
          // },
          1024: {
            slidesPerView: 3,
            spaceBetween: 30,
            slidesPerGroup: 1
          },
        },
      });
      
  </script>

</body>

</html>