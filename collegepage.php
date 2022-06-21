<?php
require_once 'functions.php';
$id='';
if (isset($_GET['id']))
{
    $id=$_GET['id'];
  // echo $id;
}
 $college = get_college($id);
 $course = get_course($id);
 $placement = get_placement($id);
 $college_gellary = get_college_gellary($id);
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
    <title>Future Lift College Page</title>
    <style>
/* body {font-family: Arial, Helvetica, sans-serif;} */

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 80%;
}

/* The Close Button */
.close {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}
</style>
</head>

<body>
    <!-- Header Section Start -->
    <header class="header">
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
                    <li><a class="dropdown-item" href="counselerForm.php">counseler</a></li>
                    <li><a class="dropdown-item" href="#">news</a></li>
                </ul>
            </div>
            <div class="btnGroup">
                <a href="log-in.php" class="btn btn-sign">log in</a>
                <a href="sign-up.php" class="btn">sign up</a>
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
                <?php  while($row =mysqli_fetch_array($college,MYSQLI_ASSOC))

{
  echo "<div class='d-flex flex-wrap justify-centent-space-between align-items-center'>
                        <div class='col-lg-4 col-md-12'>
                            <figure>
                                <img src='data:image;base64,".$row['logo']."' alt='college logo'>
                                
                            </figure>
                        </div>
                        <div class='col-lg-4 col-md-12'>
                            <h4 class='fw-bold'>".$row['collage_name']."</h4>
                            <div class='d-flex'>
                                <div class='location'>
                                    <i class='fa fa-map-marker' aria-hidden='true'></i>
                                    ".$row['city_name']."
                                </div>
                                <div class='location mx-5'>
                                    5.5
                                    <i class='fa fa-star' aria-hidden='true'></i>
                                    <i class='fa fa-star' aria-hidden='true'></i>
                                    <i class='fa fa-star' aria-hidden='true'></i>
                                    <i class='fa fa-star' aria-hidden='true'></i>
                                    <i class='fa fa-star' aria-hidden='true'></i>
                                    <i class='fa fa-star-half' aria-hidden='true'></i>
                                    (150)
                                </div>
                                <div class='location'>
                                    <i class='fa fa-share-square-o' aria-hidden='true'></i>
                                    share
                                </div>
                            </div>
                        </div>
                        <div class='col-lg-4 col-md-12 mb-5'>
                            <button type='button' class='btn'>Free Counseling</button>
                            <button type='' class='btn' id='myBtn'>Apply Now</button>
                        </div>
                    </div>
                </div>";
}
                ?>
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
                        aria-selected="false">Gallery</button>
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
                <div class="tab-pane fade" id="pills-Placement" role="tabpanel" aria-labelledby="pills-Placement-tab"><?php  while($row =mysqli_fetch_array($placement,MYSQLI_ASSOC))

{
   echo " <span>placement_company :".$row['placement_company']."</span><br>";
   echo " <span>placement_department :".$row['placement_department']."</span><br>";
   echo " <span>placement_ctc :".$row['placement_ctc']."</span><br>";
//    echo " <span>Duration :".$row['duration']."</span><br>";
   
} 

?>
                </div>
                <div class="tab-pane fade" id="pills-Infrastructure" role="tabpanel" aria-labelledby="pills-Infrastructure-tab"><?php  while($row =mysqli_fetch_array($college_gellary,MYSQLI_ASSOC))

{
    echo " <img src='data:image;base64,".$row['url']."' alt='' class='img-fluid' style = 'width : 200px; height :200px;'>";
   
} 


?>
</div>
                <div class="tab-pane fade" id="f" role="tabpanel" aria-labelledby="pills-Scholarship-tab">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam, fugiat debitis suscipit aut et magnam obcaecati, id architecto adipisci nemo recusandae iste corrupti deleniti molestias asperiores officiis nam rem labore fuga. Dolores, ullam. Inventore nostrum laboriosam unde! Voluptates minus incidunt, libero animi magnam accusamus laboriosam quae quam quis, qui at?
                </div>
            </div>
        </div>
        <div id="myModal" class="modal">

<!-- Modal content -->
<div class="modal-content">
        <span class="close">&times;</span>
        <form action="functions.php?applynow" method="post">
        <div class="form-group">
          <input type="text" name="name" class="form-control" placeholder="Name" required="" >
        </div>
        <div class="form-group">
          <input type="email" name="email" class="form-control" placeholder="Email" required="">
        </div>
        <div class="form-group">
          <input type="text" name="mobile" class="form-control" placeholder="Phone" required="">
        </div>
        <div class="form-group">
          <input type="text" name="program" class="form-control" placeholder="Select Program Type" required="">
        </div>
        <div class="form-group">
          <input type="text" name="board" class="form-control" placeholder="Board" required="">
        </div>
        <div class="form-group">
          <select id="Preferred stream" name="stream" class="form-control" required="">
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
        <button class="btn" value="submit" name="submit" class="btn btn3">Submit</button>
        <button type="submit" class="btn btn3" id="closeBtn">cancel</button>
      </form>
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
    <script src="aos/aos.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="js/script.js"></script>

    <script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
</body>

</html>