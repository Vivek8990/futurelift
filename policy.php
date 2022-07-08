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
    <title>policy</title>
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
        <a class="active" href="functions.php?logout">Signout</a> <?php }
       ?>
       <div class="btnGroup">
         <?php if(!$login){ ?>
         <a href="log-in.php" class="btn btn-sign">log in</a>
         <a href="sign-up.php" class="btn">sign up</a>
         <?php    
         } 
         ?>
      <div class="btnGroup">
        <a href="log-in.php" class="btn btn-sign">log in</a>
        <a href="sign-up.php" class="btn">sign up</a>
      </div>
    </nav>
    <i class="fas fa-bars" id="manu-bars"></i>
  </header>
  <!-- Header Section End -->
 

  <!-- About Section Start -->
  
  <section class="policy" id="policy" >
    <div class="container">
        <h1 class="heading">Website Usage Policy </h1>
        <hr>
        <p>Please read carefully before using the portal.</p>
        <p>Welcome to the website “futureliftedu.com” which is owned by “FUTURE LIFT EDUCATION PRIVATE LIMITED.”</p>   
        <p>These terms and conditions cover every individual visiting this website and it is assumed that by accessing and using futureliftedu.com, you accept this “Terms of Use” in full and have gone through and consent univocally and irrevocably to the same. If you disagree with these conditions you must not use this website.</p>
        <div class="policyText">
            <h3 class="text-center">Website Overview</h3>
            <p>Future Lift Education Pvt. Ltd. Is the manager, moderator and operator of the website futureliftedu.com and all of its versions including website. 
                Futureliftedu.com is a search engine for  accessing course details, colleges/institutions and assists students by providing information on the admission process details of the courses, colleges/institutions of their interest. And also assist with scholarship facilities 
                Future Lift  guides students through the exam in admission process and acquaints them with all the available study options. Future Lift  does not take applications/registrations on behalf of any college or institution irrespective of whether they are partner college or other listed college. By appealing to any course or college/institution on the website, the student is deemed to have applied for the assistance of Future Lift Education team. Incase of any scholarship application, “Future Lift” will thoroughly guide to put in the process but in granting misleads or negative sanctional “FUTURE LIFT” team will not be responsible for this issues 
            </p>
        </div>
        <div class="policyText">
            <h3 class="text-center">ELIGIBILITY</h3>
            <p>The website is not designed to attract the users below 12 years and thus the company does not intend to keep data of the users below the specified age. By assessing or in order to using the portal, the user is deemed to have warranted and represented that he/she fulfils the aforesaid requirement of minimum and then got permission to fluffily access with all services . Upon receipt of any information contrary to the aforesaid, the user and its information shall be deleted and failure to co-operate.  
            </p>
        </div>
        <div class="policyText">
            <h3 class="text-center">Making attentive  user account on futureliftedu.com</h3>
            <p>The website intents to protect private information provided by the user while creating a user account as per the terms and conditions specified herein. By creating an account, the user agrees to the terms required to protect the confidentiality of username and password for the account and shall be solely liable for any activity conducted using the user account. The user also agreed to accept all risk and responsibilities for activity done under the username. User also agrees to receive SMS and Emails containing the information of the college and  details he/she applies in and also of related services like scholarship ,loan and many others .  
            </p>
        </div>
        <div class="policyText">
            <h3 class="text-center">Privacy Policy</h3>
            <p>The privacy policy is applicable only for Future Lift  and not for the websites linked through it, which shall be governed by its respective privacy policies and/or terms of use. The website utilizes cookies and other tracking technologies. Some cookies and other technologies may serve to recall Personal Information previously indicated by a Web user. Most browsers allow you to control cookies, including whether or not to accept them and how to remove them. By providing us your information in the ways stated here in below, you agree with the privacy policy and give us consent for usage of information by us in the manner stated herein and your information get protected in all possible ways. 
            </p>
        </div>
        <div class="policyText">
            <h3 class="text-center">Information Collected by the Website</h3>
            <p>Means of data collection on Future Lift Education are- Contact Form (The contact forms on the website are made to simplify the process of data presentation by collecting the user interests, educational qualification and age, etc.),  this contact form will be specified for all services to make it in easy way and Login/Signup (By creating a user account visitor agrees the terms of conditions of the website. The data collected may consist of personal or non-personal information depending upon the situation. We may store, collect, use and process your Information India subject to compliance under applicable laws. The website collects user information to provide suggestions tailored as per the students' profile and keep them informed about the ongoing application processes and it will help them thoroughly, it may also be used as future perspectives analysis to categories users according to the needs  
            </p>
        </div>
        <div class="policyText">
            <h3 class="text-center">Opt-in Mails and Other ways of data access by the Company</h3>
            <p>The company can use data collected through the website in various ways such as-</p>
            <ul>
                <li>
                    a)	Opt-in Mails- Company sends customized mails on the users opting for educational news or notification on admission process and any updates  entrance tests, your function of website. Users can anytime unsubscribe from the service.  
                </li>
                <li>
                    b)	Feedbacks: The Company may contact its visitors or users for feedback on any new feature or services. If not interested, users can drop a mail on privacy@futureliftedu.com.  
                </li>
                <li>
                    c)	Geographical Data : we use geographical or demographical data to provide location wise customized data.    
                </li>
                <li>
                    d) Cookies and IP data are used to provide most relevant results through search. The website also stores data other than the content which provides information on personal identity in the form of IP and cookies. It is henceforth considered under the category of non personal-identifiable data which also includes search history, queries submitted, education interests, date and time, domain, advertisement response. We can use the data collected through our channel in the analysis of trends and can also be forwarded to the educational service and all providers depending upon the usage history, this history only be usable by us . The data so collected can be used in the following manner and ways:  
                    <ul>
                        <li>
                            Email distribution/SMS/Telephone as described in the application form and for administrative purposes (such as to inform you and notify  you of the information or any change herein for the exam/college/course career counseling of your interested  or related exam/course/college). In accordance with instructions on the site, you may opt not to receive any such communication in the future. 
                        </li>
                        <li>
                            Display banner (and similar) advertising to you in connection with the site that is more targeted to you specifically. In doing this type of targeting, Future Lift  or its ad server, connect you with the targeting criteria. 
                        </li>
                        <li>
                            By  using the website and/or registering yourself with us you authorize us to contact you via email or phone call or SMS and offer you our services, imparting product knowledge, offer promotional offers running on website & offers offered by third parties, for which reasons, personally identifiable information may be collected.  
                        </li>
                    </ul> 
                </li>
            </ul>
        </div>
        <div class="policyText">
            <h3 class="text-center">Third-party link content</h3>
            <p>The users providing ‘testimonials’ are entitled to public display and can also be shared with our partner institutions. By using this website, the user agrees not to use any foul or offensive language in any forum or publicly available comment section. Because we do not control the third party content, user understand and agree that: 

            </p>
            <ul>
                <li>
                    We are not responsible for, and do not endorse, any such content, including information and reviews about any college/institution provided by other users.   
                </li>
                <li>
                    We make no guarantees or don’t give the surety about the accuracy, currency, suitability, reliability or quality of the information in such content.   
                </li>
                <li>
                    We assume no responsibility  for this type of unintended, objectionable, inaccurate, misleading, or unlawful Content made available by users, advertisers, and third parties.   
                </li>
                <li>
                    We do not claim ownership in any content that the user submits or authorizes for us to use, the user, however, agrees that such content shall be exclusive to us and no such or similar shall be published, copied, reproduced by the user or any person visiting the website on any of the other online portal, without obtaining a prior consent in writing by Future Lift. The user is free to remove or get removed his/her own content, if such content is posted wither accidentally or unintentionally on the website.   
                </li>
            </ul>
        </div>
        <div class="policyText">
            <h3 class="text-center">Advertising Partners Privacy Policies to our website </h3>
            <p>You may consult this list to find the Privacy Policy for each of the advertising partners of Future Lift . </p>
            <ul>
                <li>
                    Third-party ad servers or ad networks uses technologies like cookies, JavaScript, or Web Beacons that are used in their respective advertisements and links that appear on college search, which are sent directly to users’ browser. They automatically receive your IP address when this occurs.    
                </li>
                <li>
                    These technologies are used to measure the effectiveness of their advertising campaigns and/or to personalize the advertising content that you see on websites that you visit.    
                </li>
            </ul>
            <p>Note that college search panel  or any service panel of us  has no access to or control over these cookies that are used by third-party advertisers.</p>
        </div>
        <div class="policyText">
            <h3 class="text-center">Intellectual Property Rights</h3>
            <p>Unless stated otherwise, Future Lift Education Pvt. Ltd. Holds the sole rights of all the digital content, including site layout, software, images, photographs, text, services and other similar materials, available throughout the website. Trademark, logos and service marks of futureliftedu.com cannot be used to be displayed at any commercial or non-commercial use without prior permission from the company. However, the materials and contents, including any data, text, graphics, images, audio and video clips, logos, icons and links, used on this website of third parties and/or institutions and colleges, which are collected from the public domain and are available under the fair usage policy that are published on the website are strictly for information and/or identification purposes only and are not the intellectual property of the Company. All the data mining activities i.e. scrapping, crawling and republishing is not allowed until and unless written permission is obtained from the company. The content downloaded from the website does not pass on the rights or title to use it for commercial use.

        </div>
        <div class="policyText">
            <h3 class="text-center">External Links</h3>
            <p>Futureliftedu.com is not liable to any loss caused due to the external links available on the website. It is also advisable that the user verifies such information with other sources before making any decision on the basis of advertisements or content available on the linked websites. For ease of users and external and referral links of every college/institution, wherever applicable, are provided on the website. The links to third-party websites placed by us as a service to those interested in this information, or posted by other users. Your use of all such links to third-party websites is at your own risk. We do not monitor or responsible or have any control over, and make no claim or representation regarding third-party websites. To the extent such links are provided by us, they are provided only as a convenience, and a link to a third-party website does not imply our endorsement, adoption or sponsorship of, or affiliation with, such third-party website. 

        </div>
        <div class="policyText">
            <h3 class="text-center">Limitation of Liability</h3>
            <p>By using the site, you agree that Future Lift  will not be liable for any legal theory or contracts for any kind issues caused by any other party. The website is also not liable to verify or justify information provided by participants of the website i.e. educational institutions, coaching institutes, individual, comments. To prevent the loss to visitors it is highly recommended that every information available on the website must be verified before taking it into consideration. Future Lift Education is not liable for any misinformation, data theft, any kind of loss or system damage occurring due to use of these external links you used in your interest. Futurelift.com declares that it will not be used to propagate any malicious or harmful software so in any case of program loss or system damage, the website can’t be held responsible. The terms and policies of Future Lift  do not govern the use of third-party websites. Also not responsible for issues created by this means. 

        </div>
        <div class="policyText">
            <h3 class="text-center">Governing Law</h3>
            <p> All the legal proceedings shall be under consideration by the Laws of India and shall have the exclusive jurisdiction in case of any disputes created . The government undertaking rules be followed in every single process held though this website and it’s mandatory for everyone to be followed , ” FUTURE LIFT” can’t work or process out of this rules and it’s consider to be unlawful. 

        </div>
        <div class="policyText">
            <h3 class="text-center">Refund & Cancellation Policy</h3>
            <p>All the monetary transactions done by the user of the site is in lieu of the payment gateway partner of futureliftedu.com, and we take no responsibility for any payment discrepancies. Also, we have full right to consider and review the refund case if the amount paid by the user is in excess to the number of applications he has applied to. We have complete authority to review the college preferences as filled by the user if there is shortfall/excess of payment. Also, you are required to note your Transaction ID and receipt no. as provided by the payment gateway to furnish any information or track the payment status of you’re application form. Any pending amount to be paid by the user will need to be paid before the deadline for the application to the college has been reached. Any payment received after that may not result in acceptance of the application as a valid entry by the college. Future Lift  cannot be held liable for the same and no refund will be entertained in such cases. It will be mandatory for individuals. 

        </div>
        <div class="policyText">
            <h3 class="text-center">Change in terms of Privacy Policy</h3>
            <p>Future Lift reserves the right to amend or modify these terms of use and Privacy Policy at any time, as and when the need arises. We request you to regularly check this page from time to time to keep you updated  of changes made. Your continued use of the Platform gives your unconditional acceptance to such change. It will be more prominent. 

        </div>
        <div class="policyText">
            <h3 class="text-center">How we use your information</h3>
            <p>We use the information we collect in various ways, including to: 
                Provide, operate, and maintain our website, Improve, personalize, and also expand our website from time to time .Understand and analyze how you sense and use our  website. And so often develop new products, services, features, and functionality 
                Communicate with you, either directly or through one of our partners, including for customer service, to provide you with updates and other information relating to the website, and for marketing and promotional purposes
            </p>
            <ul>
                <li>Send you emails </li>
                <li>Send you sms  </li>

            </ul>
            <p>Find and prevent fraud to decrease the misleading </p>
            <p>For any clarification, please contact Future Lift Education Private Limited. </p>
            <a href="tel:8617373674">8617373674</a>
            <a href="">contact@futurelift.com </a>

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