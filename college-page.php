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
    <title>Future Lift College Page</title>
</head>

<body>
    <!-- Header Section Start -->
    <header class="header">
        <a href="index.html" class="logo"><img src="images/logoBrand-01.png" alt=""></a>
        <nav class="navbar">
            <div class="user">
                <i class="fas fa-user"></i>
            </div>
            <a href="career.html" class="active">Career Solutions</a>
            <a href="explore-colleges.html" class="active">explore colleges</a>
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
            <div class="btnGroup">
                <a href="log-in.html" class="btn btn-sign">log in</a>
                <a href="sign-up.html" class="btn">sign up</a>
            </div>
        </nav>
        <i class="fas fa-bars" id="manu-bars"></i>
    </header>

    <!-- college Page Start -->
    <section class="page_college" id="collgPage">
        <div class="container">
            <h1 class="heading text-center mt-3">college page</h1>
            <div class="banner_college">
                <div class="colgImg">
                    <figure>
                        <img src="images/college2.jpg" alt="college banner" class="img-fluid">
                    </figure>
                </div>
               
                <div class="row">
                    <div class="d-flex flex-wrap justify-centent-space-between align-items-center">
                        <div class="col-lg-4 col-md-12">
                            <figure>
                                <img src="images/partner/images (10).png" alt="college logo">
                            </figure>
                        </div>
                        <div class="col-lg-4 col-md-12">
                            <h4 class="fw-bold">netaji subhash chandra bose open universitiy</h4>
                            <div class="d-flex">
                                <div class="location">
                                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                                    Kolkata
                                </div>
                                <div class="location mx-5">
                                    5.5
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star-half" aria-hidden="true"></i>
                                    (150)
                                </div>
                                <div class="location">
                                    <i class="fa fa-share-square-o" aria-hidden="true"></i>
                                    share
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 mb-5">
                            <button type="button" class="btn">Compare</button>
                            <button type="" class="btn"><i class="fa fa-download" aria-hidden="true"></i>Download</button>
                        </div>
                    </div>
                </div>
            </div>
            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                        data-bs-target="#pills-collegeInfo" type="button" role="tab" aria-controls="pills-collegeInfo"
                        aria-selected="true">college Info</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-CoursesFees-tab" data-bs-toggle="pill"
                        data-bs-target="#pills-CoursesFees" type="button" role="tab" aria-controls="pills-CoursesFees"
                        aria-selected="false">Courses & Fees</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-Admission-tab" data-bs-toggle="pill"
                        data-bs-target="#pills-Admission" type="button" role="tab" aria-controls="pills-Admission"
                        aria-selected="false">Admission</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-Placement-tab" data-bs-toggle="pill"
                        data-bs-target="#pills-Placement" type="button" role="tab" aria-controls="pills-Placement"
                        aria-selected="false">Placement</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-Infrastructure-tab" data-bs-toggle="pill"
                        data-bs-target="#pills-Infrastructure" type="button" role="tab" aria-controls="pills-Infrastructure"
                        aria-selected="false">Infrastructure</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-Scholarship-tab" data-bs-toggle="pill"
                        data-bs-target="#pills-Scholarship" type="button" role="tab" aria-controls="pills-Scholarship"
                        aria-selected="false">Scholarship</button>
                </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-collegeInfo" role="tabpanel" aria-labelledby="pills-collegeInfo-tab">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Asperiores error, quis laborum tempore eum
                    rem?
                </div>
                <div class="tab-pane fade" id="pills-CoursesFees" role="tabpanel" aria-labelledby="pills-CoursesFees-tab">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem vitae delectus velit tempore tempora dicta fuga assumenda cumque quod aliquam, suscipit qui voluptatem iure laboriosam.
                </div>
                <div class="tab-pane fade" id="pills-Admission" role="tabpanel" aria-labelledby="pills-Admission-tab">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolor explicabo sint similique ab rem asperiores dolores nulla. Quisquam, aut. Sapiente, sit. Quibusdam praesentium eius odio soluta sequi. Reiciendis quod sint cumque. Amet nam praesentium dolores?
                </div>
                <div class="tab-pane fade" id="pills-Placement" role="tabpanel" aria-labelledby="pills-Placement-tab">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Doloribus doloremque at vitae, facere veniam molestias asperiores debitis fugit officia animi?
                </div>
                <div class="tab-pane fade" id="pills-Infrastructure" role="tabpanel" aria-labelledby="pills-Infrastructure-tab">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusamus facilis, neque distinctio commodi voluptas odit? Molestiae laboriosam aperiam est distinctio doloremque odio nesciunt, delectus beatae officiis vitae dicta mollitia ducimus temporibus culpa adipisci tenetur nemo? Voluptatum magni ab provident reiciendis!
                </div>
                <div class="tab-pane fade" id="pills-Scholarship" role="tabpanel" aria-labelledby="pills-Scholarship-tab">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam, fugiat debitis suscipit aut et magnam obcaecati, id architecto adipisci nemo recusandae iste corrupti deleniti molestias asperiores officiis nam rem labore fuga. Dolores, ullam. Inventore nostrum laboriosam unde! Voluptates minus incidunt, libero animi magnam accusamus laboriosam quae quam quis, qui at?
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
              <img src="images/logoBrand-01.png" alt="" class="img-fluid">
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








    <!-- Swiper JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="aos/aos.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="js/script.js"></script>

</body>

</html>