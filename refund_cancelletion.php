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
    <title>refund_cancelletion</title>
    <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
     <!-- Font Awesome CDN Link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  
  <!-- Font Awesome Web Font Icons-->
  <link href="css/font-awesome.min.css" type="text/css" rel="stylesheet" media="screen" />

  
  <!-- Bootsrtap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
  
  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" ></script>

  <!-- Custome CSS Link -->
  <link rel="stylesheet" href="css/style.css">

  <!-- swiper js -->
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
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
    </nav>
    <i class="fas fa-bars" id="manu-bars"></i>
  </header>

  <!-- Header Section End -->
 

  <!-- About Section Start -->
  
  <section class="policy" id="policy" >
    <div class="container">
        <h1 class="heading">refunds and cancellations</h1>
        <hr>
        
        <div class="policyText">
            <h3 class="subHeading">Future Lift renders services including, but not limited to, career assessments, career counselling and career mentorship, which act as a bonafide guide to the user and the services are rendered as soon as availed, therefore these will be the terms and conditions of refunds:</h3>
            <ul>
                <li>
                    A refund can only be initiated within 7 days of making the payment.
                </li>
                <li>
                	A full refund can only be initiated if the career counselling service isn’t availed by the user.  
                </li>
                <li>
                	A partial refund can be initiated in the following conditions:
                    <ul>
                        <li>
                            	The user is dissatisfied with the service for any of the following reasons:
                            <ul>
                                <li>
                                	The counselor didn’t spend the designated/mentioned amount of time with the user or
                                </li>
                                <li>
                                    	The counselor wasn’t able to provide the desired clarity to the user and their family members.
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <ul>
                        <li>Before a refund is initiated, the following will be offered by Future Liftto the user:
                            <ul>
                                <li>
                                   	A review of the case with Future Lift’s counselor quality team - to see if the case can be resolved peacefully,
                                </li>
                                <li>
                                    	An additional free career counselling session with a different counselor to achieve the desired clarity.
                                </li>
                            </ul>
                        </li>
                        <li>Only if neither of the above is successful, will a partial refund be initiated.</li>
                        <li>Please note that the following activities aren’t included in the counselling sessions and refunds for these reasons will not be initiated:
                            <ul>
                                <li>
                                Counselling for personal/emotional issues. This requires a session with a clinical psychologist or counselor.
                                </li>
                                <li>
                                    Compelling users to change careers towards a particular direction. The shortlisted careers must be based on the users’ inherent interests, as this will help them tackle the challenges they will face during the course of their career. Without a deep interest in the field, the user will struggle to grow and succeed in their career.
                                </li>
                                <li>
                                    	Sharing details of courses/colleges/universities. This information is available on our Knowledge Gateway, and can be accessed once the user has completed their career counselling session and accepted their chosen careers.
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>
            	Partial Refund:
                    <ul>
                        <li>
                        In the event that the solutions mentioned above don’t work, the user can initiate a refund by sending an email to info@futurelift.com.
                        </li>
                        <li>
                    	If the user is not happy with Future Lift counselor’s advice or service provided to the user by the Future Lift platform, the user needs to contact Future Lift from their registered email ID and share the reason for dissatisfaction within 24 hours of the counselling session. After receiving the details, the user’s conversation with the counselor will be reviewed by the support team, and further explanation might be required from both parties. Based on the relevance of the user’s reason for dissatisfaction and execution of the above-mentioned solutions, the support team will decide on the percentage of the refund given to the user. It may vary from a full refund to no refund. Any decision on the percentage of refund is at the sole discretion of Future Lift and the decision shall be final and binding.
                        </li>
                        <li>
                    	After the refund percentage is intimated to the user, the refund procedure will start within 2 working days and will be completed within 15 working days.
                        </li>
                    </ul>
                </li>
                <li>
            	General refund amounts (amounts may vary based on the case):
                </li>
            </ul>
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col-4">Package Name</th>
                    <th scope="col-4">Package Cost</th>
                    <th scope="col-4">Refund Amount</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">Basic</th>
                    <td>1499/-</td>
                    <td>799/-</td>
                  </tr>
                  <tr>
                    <th scope="row">Advance</th>
                    <td>1999/-</td>
                    <td>1099/-</td>
                  </tr>
                  <tr>
                    <th scope="row">Premium</th>
                    <td>4999/-</td>
                    <td>3099/-r</td>
                  </tr>
                </tbody>
              </table>
              <p class="text-bold">*Note - taxes paid for the Future Lift Service will not be refunded.</p>
        </div>
        <h1 class="heading">cancellation</h1>
        <hr>
        <div class="policyText">
            <ul>
                <li>A session can only be cancelled or rescheduled with 12 hours’ notice to Future Lift</li>
                <li>An email needs to be written to info@futurelift.com. To cancel or reschedule your session.</li>
                <li>
                    In the event that you cancel your session inside of the 12-hour window, a cancellation/rescheduling fee will apply. Only after paying this fees will the session be rescheduled.
                </li>
                <li>
                    In the event of a cancellation/rescheduling, you will not be liable for a refund.
                </li>
                <li>
                    If we have not received an email from your registered ID to Future Lift requesting the cancellation/rescheduling the session - we will not be able to reschedule the session without the above fee.
                </li>
                <li>
                    Any cancellations/rescheduling done before 12 hours will be completely free of cost.
                </li>
            </ul>
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
  
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  <script src="js/script.js"></script>
</body>
</html>