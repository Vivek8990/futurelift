<?php
require_once 'functions.php';
$login = $_SESSION['userIsLoggedIn'];
$data=$_SESSION['userdata'];
$term=$_GET['q'];
$_SESSION['term']=$term;
$colleges = getCollegeByCategoury($term);

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

    <!-- swiper js -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <title>Future Lift Find College List for Medical</title>
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
            <a href="#" class="active">admission</a>
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
    <!-- college listing -->
    <section class="top-collegs-of-management-in-future-lift" id="filterCollege">
        <div class="container">
            <div class="row">
                <div class="main-text col-md-12 p-4 shadow mt-5">
                    <h1 class="heading text-center">Medical colleges in india</h1>
                    <h2 class="text-center">12115 colleges allover india</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam sunt illo reprehenderit corrupti
                        necessitatibus. Excepturi commodi error sunt, voluptates facilis magnam vel dolore praesentium.
                        Rem enim,
                        aliquam asperiores fugit voluptatum adipisci, molestiae sed distinctio error facere autem id
                        aspernatur
                        debitis ratione aperiam necessitatibus ad. Quis tenetur at earum autem sit.</p>
                </div>
            </div>
        </div>
        <div class="collegeFilterBox d-flex g-5 flex-wrap">
            <div class="allFilter">
                <div class="topdegreeCollg">
                    <div class="dgree">
                        <h1 class="heading text-center">degree</h1>
                        <img src="images/Arrow-down-01.png" alt="" class="img-fluid" style="width: 1.5rem;" id="collapsTg">
                    </div>
                    <div class="colgSearch">
                        <input type="search">
                    </div>
                    <div class="dgreeFilter" id="collaps">
                        <div class="checkBox">
                            <input type="checkbox" name="degree" class="degree">
                            <label for="">M.B.A</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox" name="degree"  class="degree">
                            <label for="">B.B.A</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox" name="degree"  class="degree">
                            <label for="">P.G.D.M</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox" name="degree"  class="degree">
                            <label for="">post graduate diploma</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox" name="degree"  class="degree">
                            <label for="">Certificate</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox" name="degree"  class="degree">
                            <label for="">B.B.M (Bachelor of Business Management)</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox" name="degree"  class="degree">
                            <label for="">Ph.D. (Doctor of Philosophy)</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox" name="degree"  class="degree">
                            <label for="">Executive M.B.A.</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox" name="degree"  class="degree">
                            <label for="">B.M.S (Bachelor of Management Studies)</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox" name="degree"  class="degree">
                            <label for="">B.B.A + M.B.A</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox" name="degree"  class="degree">
                            <label for="">MHRDM </label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox" name="degree"  class="degree">
                            <label for="">M.M.S. (Master of Management Studies)</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox" name="degree"  class="degree">
                            <label for="">M.Phil. (Master of Philosophy)</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox" name="degree"  class="degree">
                            <label for="">P.G.P.M (Post Graduate Program in Management)</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox" name="degree"  class="degree">
                            <label for="">M.M.M (Master of Applied Management)</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox" name="degree"  class="degree">
                            <label for="">M.I.B (Master of International Business)</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox" name="degree"  class="degree">
                            <label for="">Executive P.G.D.M</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox" name="degree"  class="degree">
                            <label for="">M.M.M (Master of Marketing Management)</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox" name="degree"  class="degree">
                            <label for="">M.P.M (Master of Personal Management)</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox" name="degree"  class="degree">
                            <label for="">M.F.M (Master of Financial Management)</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox" name="degree"  class="degree">
                            <label for="">M.B.A + P.G.D.M</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox" name="degree"  class="degree">
                            <label for="">M.B.M (Master of Business Management)</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox" name="degree"  class="degree">
                            <label for="">B.B.A + L.L.B</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox" name="degree"  class="degree">
                            <label for="">B.B.S (Bachelor of Business Studies)</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox" name="degree"  class="degree">
                            <label for="">M.F.M. (Master of Fashion Management)</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox" name="degree"  class="degree">
                            <label for="">M.H.A. (Master of Hospital Management)</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox" name="degree"  class="degree">
                            <label for="">Others</label>
                        </div>
                    </div>
                </div>
                <div class="topdegreeCollg">
                    <div class="dgree">
                        <h1 class="heading text-center">spacialization</h1>
                        <img src="images/Arrow-down-01.png" alt="" class="img-fluid" style="width: 1.5rem;" id="collapsTg">
                    </div>
                    <div class="colgSearch">
                        <input type="search">
                    </div>
                    <div class="dgreeFilter" id="collaps">
                        <div class="checkBox">
                            <input type="checkbox" name="spacialization"  class="spacialization">
                            <label for="">Business Administration</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox" name="spacialization"  class="spacialization">
                            <label for="">General Management</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox" name="spacialization"  class="spacialization">
                            <label for="">Human Resources Management</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox" name="spacialization"  class="spacialization">
                            <label for="">Finance</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox" name="spacialization"  class="spacialization">
                            <label for="">Marketing</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox" name="spacialization"  class="spacialization">
                            <label for="">Management</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox" name="spacialization"  class="spacialization">
                            <label for="">International Business)</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox" name="spacialization"  class="spacialization">
                            <label for="">Business Management</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox" name="spacialization"  class="spacialization">
                            <label for="">Operational Management</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox" name="spacialization"  class="spacialization">
                            <label for="">Business Analytics</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox" name="spacialization"  class="spacialization">
                            <label for="">Information Technology </label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox" name="spacialization"  class="spacialization">
                            <label for="">Retail Management</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox" name="spacialization" class="spacialization">
                            <label for="">Logistics & Supply Chain Management</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox" name="spacialization"  class="spacialization">
                            <label for="">Digital Marketing</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox" name="spacialization"  class="spacialization">
                            <label for="">Entrepreneurship / Family Business</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox" name="spacialization"  class="spacialization">
                            <label for="">M.I.B (Master of International Business)</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox" name="spacialization"  class="spacialization">
                            <label for="">Executive P.G.D.M</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox" name="spacialization"  class="spacialization">
                            <label for="">M.M.M (Master of Marketing Management)</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox" name="spacialization"  class="spacialization">
                            <label for="">M.P.M (Master of Personal Management)</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox" name="spacialization"  class="spacialization">
                            <label for="">M.F.M (Master of Financial Management)</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox" name="spacialization"  class="spacialization">
                            <label for="">Executive MBA</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox" name="spacialization"  class="spacialization">
                            <label for="">Systems</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox" name="spacialization"  class="spacialization">
                            <label for="">Supply Chain Management</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox" name="spacialization"  class="spacialization">
                            <label for="">Accounting</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox" name="spacialization"  class="spacialization">
                            <label for="">Rural Management</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox" name="spacialization"  class="spacialization">
                            <label for="">Health Care Administration</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox" name="spacialization"  class="spacialization">
                            <label for="">Others</label>
                        </div>
                    </div>
                </div>
                <div class="topdegreeCollg">
                    <div class="dgree">
                        <h1 class="heading text-center">state</h1>
                        <img src="images/Arrow-down-01.png" alt="" class="img-fluid" style="width: 1.5rem;" id="collapsTg">
                    </div>
                    <div class="colgSearch">
                        <input type="search">
                    </div>
                    <div class="dgreeFilter" id="collaps">
                        <div class="checkBox">
                            <input type="checkbox"  name="state" class="state">
                            <label for="">Arunachal Pradesh</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox"  name="state" class="state">
                            <label for="">Assam</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox" name="state" class="state">
                            <label for="">Bihar</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox"  name="state" class="state">
                            <label for="">Chandigarh</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox" name="state" class="state">
                            <label for="">Chhattisgarh</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox" name="state" class="state">
                            <label for="">Delhi</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox"  name="state" class="state">
                            <label for="">Gujarat</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox" name="state" class="state">
                            <label for="">Haryana</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox"  name="state" class="state">
                            <label for="">Himachal Pradesh</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox"  name="state" class="state">
                            <label for="">Jammu & Kashmir</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox"  name="state" class="state">
                            <label for="">Jharkhand</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox"  name="state" class="state">
                            <label for="">Karnataka</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox"  name="state" class="state">
                            <label for="">Kerala</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox"  name="state" class="state">
                            <label for="">Madhya Pradesh</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox"  name="state" class="state">
                            <label for="">Maharashtra</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox"  name="state" class="state">
                            <label for="">Manipur</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox"  name="state" class="state">
                            <label for="">Mizoram</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox"  name="state" class="state">
                            <label for="">Orissa</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox"  name="state" class="state">
                            <label for="">Pondicherry</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox"  name="state" class="state">
                            <label for="">Punjab</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox"  name="state" class="state">
                            <label for="">Rajasthan</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox"  name="state" class="state">
                            <label for="">Tamil Nadu</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox"  name="state" class="state">
                            <label for="">Uttarakhand</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox"  name="state" class="state">
                            <label for="">Uttar Pradesh</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox"  name="state" class="state">
                            <label for="">West Bengal</label>
                        </div>
                    </div>
                </div>
                <div class="topdegreeCollg">
                    <div class="dgree">
                        <h1 class="heading text-center">city</h1>
                        <img src="images/Arrow-down-01.png" alt="" class="img-fluid" style="width: 1.5rem;">
                    </div>
                    <div class="colgSearch">
                        <input type="search">
                    </div>
                    <div class="dgreeFilter">
                        <div class="checkBox">
                            <input type="checkbox" name="city" class="city" checked="checked">
                            <label for="">Abohar</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox" name="city" class="city">
                            <label for="">Agra</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox" name="city" class="city">
                            <label for="">Ahmedabad</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox" name="city" class="city">
                            <label for="">Ahmednagar</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox" name="city" class="city">
                            <label for="">Aizawl</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox" name="city" class="city">
                            <label for="">Akola</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox" name="city" class="city">
                            <label for="">Aligarh</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox" name="city" class="city">
                            <label for="">Allahabad</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox" name="city" class="city">
                            <label for="">Ambala</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox" name="city" class="city">
                            <label for="">Amreli</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox" name="city" class="city">
                            <label for="">Amritsar</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox" name="city" class="city">
                            <label for="">Anandpur Sahib</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox" name="city" class="city">
                            <label for="">Anantnag</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox" name="city" class="city">
                            <label for="">Auraiya</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox" name="city" class="city">
                            <label for="">Aurangabad</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox" name="city" class="city">
                            <label for="">Aurangabad (Bh)</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox" name="city" class="city">
                            <label for="">Azamgarh</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox" name="city" class="city">
                            <label for="">Bagalkot</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox" name="city" class="city">
                            <label for="">Bageshwar</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox" name="city" class="city">
                            <label for="">Bahadurgarh</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox" name="city" class="city">
                            <label for="">Balaghat</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox" name="city" class="city">
                            <label for="">Baloda Bazaar</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox" name="city" class="city">
                            <label for="">Bangalore</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox" name="city" class="city">
                            <label for="">Bantwal</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox" name="city" class="city">
                            <label for="">Bareilly</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox" name="city" class="city">
                            <label for="">Barnala</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox" name="city" class="city">
                            <label for="">Barpeta</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox" name="city" class="city">
                            <label for="">Barrackpore</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox" name="city" class="city">
                            <label for="">Barwani</label>
                        </div>
                    </div>
                </div>
                <div class="topdegreeCollg">
                    <div class="dgree">
                        <h1 class="heading text-center">STUDY MODE</h1>
                        <img src="images/Arrow-down-01.png" alt="" class="img-fluid" style="width: 1.5rem;">
                    </div>
                    <div class="colgSearch">
                        <input type="search">
                    </div>
                    <div class="dgreeFilter">
                        <div class="checkBox">
                            <input type="checkbox" name="studymode" class="studymode">
                            <label for="">Regular</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox"  name="studymode" class="studymode">
                            <label for="">Part Time</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox" name="studymode" class="studymode">
                            <label for="">Distance Learning</label>
                        </div>
                    </div>
                </div>
                <div class="topdegreeCollg">
                    <div class="dgree">
                        <h1 class="heading text-center">institute type</h1>
                        <img src="images/Arrow-down-01.png" alt="" class="img-fluid" style="width: 1.5rem;">
                    </div>
                    <div class="colgSearch">
                        <input type="search">

                    </div>
                    <div class="dgreeFilter">
                        <div class="checkBox">
                            <input type="checkbox" name="institutetype" class="institutetype">
                            <label for="">Government</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox" name="institutetype" class="institutetype">
                            <label for="">private</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox" name="institutetype" class="institutetype">
                            <label for="">public</label>
                        </div>
                    </div>
                </div>
                <div class="topdegreeCollg">
                    <div class="dgree">
                        <h1 class="heading text-center">hostels</h1>
                        <img src="images/Arrow-down-01.png" alt="" class="img-fluid" style="width: 1.5rem;">
                    </div>
                    <div class="colgSearch">
                        <input type="search">

                    </div>
                    <div class="dgreeFilter">
                        <div class="checkBox">
                            <input type="checkbox" name="hostels" class="hostels">
                            <label for="">boye's hostels</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox" name="hostels" class="hostels">
                            <label for="">girl's hostels</label>
                        </div>
                    </div>
                </div>
                <div class="topdegreeCollg">
                    <div class="dgree">
                        <h1 class="heading text-center">free range</h1>
                        <img src="images/Arrow-down-01.png" alt="" class="img-fluid" style="width: 1.5rem;">
                    </div>
                    <div class="colgSearch">
                        <input type="search">
                    </div>
                    <div class="dgreeFilter">
                        <div class="checkBox">
                            <input type="checkbox" name="freerange" class="freerange">
                            <label for="">Less Than 1 Lakh</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox" name="freerange" class="freerange">
                            <label for="">1 to 2 Lakh</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox" name="freerange" class="freerange">
                            <label for="">2 to 3 Lakh</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox" name="freerange" class="freerange">
                            <label for="">3 to 4 Lakh</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox" name="freerange" class="freerange">
                            <label for="">4 to 5 Lakh</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox" name="freerange" class="freerange">
                            <label for="">greater than 5 lakh</label>
                        </div>
                    </div>
                </div>
                <div class="topdegreeCollg">
                    <div class="dgree">
                        <h1 class="heading text-center">facilities</h1>
                        <img src="images/Arrow-down-01.png" alt="" class="img-fluid" style="width: 1.5rem;">
                    </div>
                    <div class="colgSearch">
                        <input type="search">
                    </div>
                    <div class="dgreeFilter">
                        <div class="checkBox">
                            <input type="checkbox" name="facilities" class="facilities">
                            <label for="">A/C</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox" name="facilities" class="facilities">
                            <label for="">ATM</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox" name="facilities" class="facilities">
                            <label for="">AV Lav</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox" name="facilities" class="facilities">
                            <label for="">Academic Zone</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox" name="facilities" class="facilities">
                            <label for="">Canteen</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox" name="facilities" class="facilities">
                            <label for="">Computer Lab</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox" name="facilities" class="facilities">
                            <label for="">Conference Room</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox" name="facilities" class="facilities">
                            <label for="">Convo. Hall</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox" name="facilities" class="facilities">
                            <label for="">Counselling</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox" name="facilities" class="facilities">
                            <label for="">Cultural Zone</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox" name="facilities" class="facilities">
                            <label for="">Fest</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox" name="facilities" class="facilities">
                            <label for="">Ground</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox" name="facilities" class="facilities">
                            <label for="">Guest House</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox" name="facilities" class="facilities">
                            <label for="">Gym</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox" name="facilities" class="facilities">
                            <label for="">Hospital</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox" name="facilities" class="facilities">
                            <label for="">Hostel</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox" name="facilities" class="facilities">
                            <label for="">Math Lab</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox" name="facilities" class="facilities">
                            <label for="">Wi-Fi</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox" name="facilities" class="facilities">
                            <label for="">Sports</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox" name="facilities" class="facilities">
                            <label for="">Mess</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="collegeContentFilter mt-5 col-sm-12">
               

                <?php
 while($row =mysqli_fetch_array($colleges,MYSQLI_ASSOC))

  {

  echo " <div class='collegeCetategory shadow '>
  <div class='row'>
      <div class='d-flex justify-content-space-between align-items-center'>
          <div class='collegLogo'>
              <figure>
                  <img src='images/patners/".$row['logo']."' alt='' class='img-fluid'>
              </figure>
          </div> 

          <div class='collegeName'>
              <h3><a href=''>". $row['collage_name'] ."(".$row['city_name'].", ".$row['state_name']." )</a>
              </h3>
              <ul>
                  <li>
                  Approved by: ". $row['approval_name'] ."
                  </li>
              </ul>
              <ul>
                  <li>
                  type: ".$row['type']."
                  </li>
              </ul>
              <ul class='d-flex'>
                  <li><span><i class='fa fa-star' style='color: goldenrod;'></i></span></li>
                  <li><span><i class='fa fa-star px-2' style='color: goldenrod;'></i></span></li>
                  <li><span><i class='fa fa-star' style='color: goldenrod;'></i></span></li>
                  <li><span><i class='fa fa-star px-2' style='color: goldenrod;'></i></span></li>
                  <li><span><i class='fa fa-star' style='color: goldenrod;'></i></span></li>

              </ul>
          </div>
          <div class='forAply'>
              <button type='button' class='btn'> aply now</button>
          </div>
      </div>
  </div>
  <div class='row'>
      <div class='bottomInfo '>
          <div class='sturctureLink'>
              <ul>
                  <li><a href=''>LOREM free structure</a></li>
              </ul>
          </div>
          <div class='btnDownload ' id='download'>
              <ul>
                  <li><span>get a free call</span></li>
              </ul>
          </div>
      </div>
  </div>
</div>";

  

  }

?>


               
            </div>
    </section>







    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="aos/aos.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="js/script.js"></script>

    
<script> 

    let stateCheckBox = document.querySelectorAll('.state')
    var state= [];
    stateCheckBox.forEach((checkbox) => { 
      checkbox.addEventListener('change', (event) => {
        if (event.target.checked) {
          state.push(event.target.value)
          console.log(state);
          document.cookie = "state="+state;
          window.location.href = "functions.php?gtstate";
        }
      })
    })
    
    let cityCheckBox = document.querySelectorAll('.city')
    var city= [];
    cityCheckBox.forEach((checkbox) => { 
      checkbox.addEventListener('change', (event) => {
        if (event.target.checked) {
          city.push(event.target.value)
          console.log(city);
          document.cookie = "city="+city;
          window.location.href = "functions.php?gtcity";
        }
      })
    })
    
    let studyCheckBox = document.querySelectorAll('.studymode')
    var study= [];
    studyCheckBox.forEach((checkbox) => { 
      checkbox.addEventListener('change', (event) => {
        if (event.target.checked) {
            study.push(event.target.value)
            console.log(study);
            document.cookie = "study="+study;
          window.location.href = "functions.php?gtmode";
        }
      })
    })
    
    let institutetypeCheckBox = document.querySelectorAll('.institutetype')
    var type= [];
    institutetypeCheckBox.forEach((checkbox) => { 
      checkbox.addEventListener('change', (event) => {
        if (event.target.checked) {
            type.push(event.target.value)
            console.log(type);
            document.cookie = "type="+type;
          window.location.href = "functions.php?institutetype";
        }
      })
    }) 
    
    
    let facilitiesCheckBox = document.querySelectorAll('.facilities')
    var facilities= [];
    facilitiesCheckBox.forEach((checkbox) => { 
      checkbox.addEventListener('change', (event) => {
        if (event.target.checked) {
            facilities.push(event.target.value)
          console.log(facilities);
          document.cookie = "facilities="+facilities;
          window.location.href = "functions.php?gtfacilities";
        }
      })
    })

    let freerangeCheckBox = document.querySelectorAll('.freerange')
    var freerange= [];
    freerangeCheckBox.forEach((checkbox) => { 
      checkbox.addEventListener('change', (event) => {
        if (event.target.checked) {
            freerange.push(event.target.value)
          console.log(freerange);
          document.cookie = "freerange="+freerange;
          window.location.href = "functions.php?gtfreerange";
        }
      })
    })
    let hostelsCheckBox = document.querySelectorAll('.hostels')
    var hostels= [];
    hostelsCheckBox.forEach((checkbox) => { 
      checkbox.addEventListener('change', (event) => {
        if (event.target.checked) {
            hostels.push(event.target.value)
          console.log(hostels);
          document.cookie = "hostels="+hostels;
          window.location.href = "functions.php?gthostels";
        }
      })
    })
    let spacializationCheckBox = document.querySelectorAll('.spacialization')
    var spacialization= [];
    spacializationCheckBox.forEach((checkbox) => { 
      checkbox.addEventListener('change', (event) => {
        if (event.target.checked) {
            spacialization.push(event.target.value)
          console.log(spacialization);
          document.cookie = "spacialization="+spacialization;
          window.location.href = "functions.php?gtspacialization";
        }
      })
    })

    let degreeCheckBox = document.querySelectorAll('.degree')
    var degree= [];
    degreeCheckBox.forEach((checkbox) => { 
      checkbox.addEventListener('change', (event) => {
        if (event.target.checked) {
            degree.push(event.target.value)
          console.log(degree);
          document.cookie = "degree="+degree;
          window.location.href = "functions.php?gtdegree";
        }
      })
    })
    </script>
</body>

</html>
