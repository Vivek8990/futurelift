<?php
require_once 'functions.php';
$login = $_SESSION['userIsLoggedIn'];
$data=$_SESSION['userdata'];
$term=$_GET['q'];
$_SESSION['term']=$term;
$colleges = getCollegeByCategoury($term);


if (isset($_GET['gtstate'])) {
      
   
    searchcollegebyfilter();
  
  }
  
  if (isset($_GET['gtcity'])) {
         
  
    searchcollegebyfilter();
  
  }
  
  if (isset($_GET['gtfreerange'])) {
          
    searchcollegebyfilter();
  
  
  }
  
  if (isset($_GET['gthostels'])) {
      echo "34342424"; 
    searchcollegebyfilter();
  }

  if (isset($_GET['gtspacialization'])) {
          
    searchcollegebyfilter();
  
  
  }
  
  if (isset($_GET['gtdegree'])) {
          
    searchcollegebyfilter();
  
  
  }
  
  if (isset($_GET['gtmode'])) {
          
    searchcollegebyfilter();
  
  
  }


  
  if (isset($_GET['gtfacilities'])) {
          
    searchcollegebyfilter();
  
  
  }
  
  if (isset($_GET['institutetype'])) {
          
    searchcollegebyfilter();
  
  
  }
  
    
function searchcollegebyfilter(){
    
    $db=$GLOBALS['db'];
   $state=$_COOKIE["state"];
   $city =$_COOKIE["city"];
   $mode=$_COOKIE["study"];
   $type=$_COOKIE["type"];
   $degree=$_COOKIE["degree"];
   $spacialization = $_COOKIE["spacialization"];
   $hostels = $_COOKIE["hostels"];
   $freerange = $_COOKIE["freerange"];
   $facilities =$_COOKIE["facilities"];
   



   $query="SELECT c.*,af.affiliation_name,ap.approval_name	,co.course_name,s.state_name,ct.type ,
   co.course_name,sst.sub_stream_name,ss.stream_name 
   FROM college c 
   join affiliation af on af.id=c.affiliated_id
   join Approval ap on ap.id= c.approvel_id 
   join Courses co on co.id= c.course_id
   join State s on s.id=c.state_id 
   join Collage_type ct on ct.id=c.collage_type_id 
   join City cy on cy.id = c.city_id
   join sub_stream sst on sst.id=co.sub_stream_id
   join Stream ss on ss.id = sst.stream_id
   join Country cty on cty.id = s.country_id
   join collage_mode cm on cm.collage_id = c.id
   join study_mode sm on sm.id = cm.study_mode_id
   join collage_hostel ch on ch.collage_id= c.id
   join hostels h on h.id = ch.hostel_id
   join collage_facilities cf on cf.collage_id = c.id
   join facilities fa on fa.id = cf.facility_id
   join spacialization sp on sp.id = co.specilization_id 
   where  cty.country_name='India'" ;

    if($state){ $query.=" and s.state_name='$state'"; }
    if($city){ $query.=" and cy.city_name='$city'"; } 
    if($type){ $query.=" and ct.type='$type'"; }
    if($degree){ $query.=" and co.course_name='$degree'"; }
    if($mode){ $query.=" and sm.mode='$mode'"; }
    if($hostels){ $query.=" and h.type='$hostels'"; }
    if($freerange){ $query.=" and co.course_name='$freerange'"; }

    if($facilities){ $query.=" and fa.facility='$facilities'"; }
    if($spacialization){ $query.=" and sp.type='$spacialization'"; }


    echo $query;
    $runQuery=mysqli_query($db,$query);

    $row =mysqli_fetch_all($runQuery,MYSQLI_ASSOC);

    print_r( $row );
    }
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
                            <input type="checkbox" name="degree" class="degree"  value="M.B.A" >
                            <label for="">M.B.A</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox" name="degree"  class="degree"  value="B.B.A">
                            <label for="">B.B.A</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox" name="degree"  class="degree"  value="P.G.D.M" >
                            <label for="">P.G.D.M</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox" name="degree"  class="degree"  value="post graduate diploma" >
                            <label for="">post graduate diploma</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox" name="degree"  class="degree"  value="Certificate" >
                            <label for="">Certificate</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox" name="degree"  class="degree"  value="B.B.M (Bachelor of Business Management)">
                            <label for="">B.B.M (Bachelor of Business Management)</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox" name="degree"  class="degree"  value="Ph.D. (Doctor of Philosophy)">
                            <label for="">Ph.D. (Doctor of Philosophy)</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox" name="degree"  class="degree"  value="Executive M.B.A.">
                            <label for="">Executive M.B.A.</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox" name="degree"  class="degree"  value="B.M.S (Bachelor of Management Studies)">
                            <label for="">B.M.S (Bachelor of Management Studies)</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox" name="degree"  class="degree"  value="B.B.A + M.B.A">
                            <label for="">B.B.A + M.B.A</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox" name="degree"  class="degree"  value="MHRDM">
                            <label for="">MHRDM </label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox" name="degree"  class="degree"  value="M.M.S. (Master of Management Studies)">
                            <label for="">M.M.S. (Master of Management Studies)</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox" name="degree"  class="degree"  value="M.Phil. (Master of Philosophy)">
                            <label for="">M.Phil. (Master of Philosophy)</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox" name="degree"  class="degree"  value="P.G.P.M (Post Graduate Program in Management)">
                            <label for="">P.G.P.M (Post Graduate Program in Management)</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox" name="degree"  class="degree"  value="M.M.M (Master of Applied Management)">
                            <label for="">M.M.M (Master of Applied Management)</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox" name="degree"  class="degree"  value="M.I.B (Master of International Business)">
                            <label for="">M.I.B (Master of International Business)</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox" name="degree"  class="degree"  value="Executive P.G.D.M">
                            <label for="">Executive P.G.D.M</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox" name="degree"  class="degree"  value="M.M.M (Master of Marketing Management)">
                            <label for="">M.M.M (Master of Marketing Management)</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox" name="degree"  class="degree"  value="M.P.M (Master of Personal Management)">
                            <label for="">M.P.M (Master of Personal Management)</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox" name="degree"  class="degree"  value="M.F.M (Master of Financial Management)">
                            <label for="">M.F.M (Master of Financial Management)</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox" name="degree"  class="degree"  value="M.B.A + P.G.D.M">
                            <label for="">M.B.A + P.G.D.M</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox" name="degree"  class="degree"  value="M.B.M (Master of Business Management)">
                            <label for="">M.B.M (Master of Business Management)</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox" name="degree"  class="degree"  value="B.B.A + L.L.B">
                            <label for="">B.B.A + L.L.B</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox" name="degree"  class="degree"  value="B.B.S (Bachelor of Business Studies)">
                            <label for="">B.B.S (Bachelor of Business Studies)</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox" name="degree"  class="degree"  value="M.F.M. (Master of Fashion Management)">
                            <label for="">M.F.M. (Master of Fashion Management)</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox" name="degree"  class="degree"  value="M.H.A. (Master of Hospital Management)">
                            <label for="">M.H.A. (Master of Hospital Management)</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox" name="degree"  class="degree"  value="Others">
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
                            <input type="checkbox" name="spacialization"  class="spacialization"  value="Business Administration">
                            <label for="">Business Administration</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox" name="spacialization"  class="spacialization"  value="General Management">
                            <label for="">General Management</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox" name="spacialization"  class="spacialization"  value="Human Resources Management">
                            <label for="">Human Resources Management</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox" name="spacialization"  class="spacialization"  value="Finance">
                            <label for="">Finance</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox" name="spacialization"  class="spacialization"  value="Marketing">
                            <label for="">Marketing</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox" name="spacialization"  class="spacialization"  value="Management">
                            <label for="">Management</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox" name="spacialization"  class="spacialization"  value="International Business">
                            <label for="">International Business</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox" name="spacialization"  class="spacialization"  value="Business Management">
                            <label for="">Business Management</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox" name="spacialization"  class="spacialization"  value="Operational Management">
                            <label for="">Operational Management</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox" name="spacialization"  class="spacialization"  value="Business Analytics">
                            <label for="">Business Analytics</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox" name="spacialization"  class="spacialization"  value="Information Technology">
                            <label for="">Information Technology </label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox" name="spacialization"  class="spacialization"  value="Retail Management">
                            <label for="">Retail Management</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox" name="spacialization" class="spacialization"  value="Logistics & Supply Chain Management">
                            <label for="">Logistics & Supply Chain Management</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox" name="spacialization"  class="spacialization"  value="Digital Marketing">
                            <label for="">Digital Marketing</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox" name="spacialization"  class="spacialization"  value="Entrepreneurship / Family Business">
                            <label for="">Entrepreneurship / Family Business</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox" name="spacialization"  class="spacialization"  value="M.I.B (Master of International Business)">
                            <label for="">M.I.B (Master of International Business)</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox" name="spacialization"  class="spacialization"  value="Executive P.G.D.M">
                            <label for="">Executive P.G.D.M</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox" name="spacialization"  class="spacialization"  value="M.M.M (Master of Marketing Management)">
                            <label for="">M.M.M (Master of Marketing Management)</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox" name="spacialization"  class="spacialization"  value="M.P.M (Master of Personal Management)">
                            <label for="">M.P.M (Master of Personal Management)</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox" name="spacialization"  class="spacialization"  value="M.F.M (Master of Financial Management)">
                            <label for="">M.F.M (Master of Financial Management)</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox" name="spacialization"  class="spacialization"  value="Executive MBA">
                            <label for="">Executive MBA</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox" name="spacialization"  class="spacialization"  value="Systems">
                            <label for="">Systems</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox" name="spacialization"  class="spacialization"  value="Supply Chain Management">
                            <label for="">Supply Chain Management</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox" name="spacialization"  class="spacialization"  value="Accounting">
                            <label for="">Accounting</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox" name="spacialization"  class="spacialization"  value="Rural Management">
                            <label for="">Rural Management</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox" name="spacialization"  class="spacialization"  value="Health Care Administration">
                            <label for="">Health Care Administration</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox" name="spacialization"  class="spacialization"  value="Others">
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
                            <input type="checkbox"  name="state" class="state"  value="Arunachal Pradesh">
                            <label for="">Arunachal Pradesh</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox"  name="state" class="state"  value="Assam">
                            <label for="">Assam</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox" name="state" class="state"  value="Bihar">
                            <label for="">Bihar</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox"  name="state" class="state"  value="Chandigarh">
                            <label for="">Chandigarh</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox" name="state" class="state"  value="Chhattisgarh">
                            <label for="">Chhattisgarh</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox" name="state" class="state"  value="Delhi">
                            <label for="">Delhi</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox"  name="state" class="state"  value="Gujarat">
                            <label for="">Gujarat</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox" name="state" class="state"  value="Haryana">
                            <label for="">Haryana</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox"  name="state" class="state"  value="Himachal Pradesh">
                            <label for="">Himachal Pradesh</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox"  name="state" class="state"  value="Jammu & Kashmi">
                            <label for="">Jammu & Kashmir</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox"  name="state" class="state"  value="Jharkhand">
                            <label for="">Jharkhand</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox"  name="state" class="state"  value="Karnataka">
                            <label for="">Karnataka</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox"  name="state" class="state"  value="Kerala">
                            <label for="">Kerala</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox"  name="state" class="state"  value="Madhya Pradesh">
                            <label for="">Madhya Pradesh</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox"  name="state" class="state"  value="Maharashtra">
                            <label for="">Maharashtra</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox"  name="state" class="state"  value="Manipur">
                            <label for="">Manipur</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox"  name="state" class="state"  value="Mizoram">
                            <label for="">Mizoram</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox"  name="state" class="state"  value="Orissa">
                            <label for="">Orissa</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox"  name="state" class="state"  value="Pondicherry">
                            <label for="">Pondicherry</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox"  name="state" class="state"  value="Punjab">
                            <label for="">Punjab</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox"  name="state" class="state"  value="Rajasthan">
                            <label for="">Rajasthan</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox"  name="state" class="state"  value="Tamil Nadu">
                            <label for="">Tamil Nadu</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox"  name="state" class="state"  value="Uttarakhand">
                            <label for="">Uttarakhand</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox"  name="state" class="state"  value="Uttar Pradesh">
                            <label for="">Uttar Pradesh</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox"  name="state" class="state"  value="West Bengal">
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
                            <input type="checkbox" name="city" class="city"  value="Abohar" checked="checked">
                            <label for="">Abohar</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox" name="city" class="city"  value="Agra">
                            <label for="">Agra</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox" name="city" class="city"  value="Ahmedabad">
                            <label for="">Ahmedabad</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox" name="city" class="city"  value="Ahmednagar">
                            <label for="">Ahmednagar</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox" name="city" class="city"  value="Aizawl">
                            <label for="">Aizawl</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox" name="city" class="city"  value="Akola">
                            <label for="">Akola</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox" name="city" class="city"  value="Aligarh">
                            <label for="">Aligarh</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox" name="city" class="city"  value="Allahabad">
                            <label for="">Allahabad</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox" name="city" class="city"  value="Ambala">
                            <label for="">Ambala</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox" name="city" class="city"  value="Amreli">
                            <label for="">Amreli</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox" name="city" class="city"  value="Amritsar">
                            <label for="">Amritsar</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox" name="city" class="city"  value="Anandpur Sahib">
                            <label for="">Anandpur Sahib</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox" name="city" class="city"  value="Anantnag">
                            <label for="">Anantnag</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox" name="city" class="city"  value="Auraiya">
                            <label for="">Auraiya</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox" name="city" class="city"  value="Aurangabad">
                            <label for="">Aurangabad</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox" name="city" class="city"  value="Aurangabad (Bh)">
                            <label for="">Aurangabad (Bh)</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox" name="city" class="city"  value="Azamgarh">
                            <label for="">Azamgarh</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox" name="city" class="city"  value="Bagalkot">
                            <label for="">Bagalkot</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox" name="city" class="city"  value="Bageshwar">
                            <label for="">Bageshwar</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox" name="city" class="city"  value="Bahadurgarh">
                            <label for="">Bahadurgarh</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox" name="city" class="city"  value="Balaghat">
                            <label for="">Balaghat</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox" name="city" class="city"  value="Baloda Bazaar">
                            <label for="">Baloda Bazaar</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox" name="city" class="city"  value="Bangalore">
                            <label for="">Bangalore</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox" name="city" class="city"  value="Bantwal">
                            <label for="">Bantwal</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox" name="city" class="city"  value="Bareilly">
                            <label for="">Bareilly</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox" name="city" class="city"  value="Barnala">
                            <label for="">Barnala</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox" name="city" class="city"  value="Barpeta">
                            <label for="">Barpeta</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox" name="city" class="city"  value="Barrackpore">
                            <label for="">Barrackpore</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox" name="city" class="city"  value="Barwani">
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
                            <input type="checkbox" name="studymode" class="studymode"  value="Regular">
                            <label for="">Regular</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox"  name="studymode" class="studymode"  value="Part Time">
                            <label for="">Part Time</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox" name="studymode" class="studymode"  value="Distance Learning">
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
                            <input type="checkbox" name="institutetype" class="institutetype" value="Government">
                            <label for="">Government</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox" name="institutetype" class="institutetype" value="private">
                            <label for="">private</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox" name="institutetype" class="institutetype" value="public">
                            <label for="">public</label>
                        </div>
                    </div>
                </div>
                <div class="topdegreeCollg">\
                    <div class="dgree">
                        <h1 class="heading text-center">hostels</h1>
                        <img src="images/Arrow-down-01.png" alt="" class="img-fluid" style="width: 1.5rem;">
                    </div>
                    <div class="colgSearch">
                        <input type="search">

                    </div>
                    <div class="dgreeFilter">
                        <div class="checkBox">
                            <input type="checkbox" name="hostels" value="boy" class="hostels">
                            <label for="">boye's hostels</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox" name="hostels" value="girl" class="hostels">
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
                            <input type="checkbox" name="freerange" class="freerange"  value="Less Than 1 Lakh">
                            <label for="">Less Than 1 Lakh</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox" name="freerange" class="freerange"  value="1 to 2 Lakh">
                            <label for="">1 to 2 Lakh</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox" name="freerange" class="freerange"  value="2 to 3 Lakh">
                            <label for="">2 to 3 Lakh</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox" name="freerange" class="freerange"  value="3 to 4 Lakh">
                            <label for="">3 to 4 Lakh</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox" name="freerange" class="freerange"  value="4 to 5 Lakh">
                            <label for="">4 to 5 Lakh</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox" name="freerange" class="freerange"  value="greater than 5 lakh">
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
                            <input type="checkbox" name="facilities" class="facilities"  value="A/C">
                            <label for="">A/C</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox" name="facilities" class="facilities"  value="ATM">
                            <label for="">ATM</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox" name="facilities" class="facilities"  value="AV Lav">
                            <label for="">AV Lav</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox" name="facilities" class="facilities"  value="Academic Zone">
                            <label for="">Academic Zone</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox" name="facilities" class="facilities"  value="Canteen">
                            <label for="">Canteen</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox" name="facilities" class="facilities"  value="Computer Lab">
                            <label for="">Computer Lab</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox" name="facilities" class="facilities"  value="Conference Room">
                            <label for="">Conference Room</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox" name="facilities" class="facilities"  value="Convo. Hall">
                            <label for="">Convo. Hall</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox" name="facilities" class="facilities"  value="Counselling">
                            <label for="">Counselling</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox" name="facilities" class="facilities"  value="Cultural Zone">
                            <label for="">Cultural Zone</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox" name="facilities" class="facilities"  value="Fest">
                            <label for="">Fest</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox" name="facilities" class="facilities"  value="Ground">
                            <label for="">Ground</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox" name="facilities" class="facilities"  value="Guest House">
                            <label for="">Guest House</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox" name="facilities" class="facilities"  value="Gym">
                            <label for="">Gym</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox" name="facilities" class="facilities"  value="Hospital">
                            <label for="">Hospital</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox" name="facilities" class="facilities"  value="Hostel">
                            <label for="">Hostel</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox" name="facilities" class="facilities"  value="Math Lab">
                            <label for="">Math Lab</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox" name="facilities" class="facilities"  value="Wi-Fi">
                            <label for="">Wi-Fi</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox" name="facilities" class="facilities"  value="Sports">
                            <label for="">Sports</label>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox" name="facilities" class="facilities"  value="Mess">
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
          window.location.href = "college-filter-management.php?gtstate";
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
          window.location.href = "college-filter-management.php?gtcity";
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
          window.location.href = "college-filter-management.php?gtmode";
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
          window.location.href = "college-filter-management.php?institutetype";
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
          window.location.href = "college-filter-management.php?gtfacilities";
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
          window.location.href = "college-filter-management.php?gtfreerange";
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
          window.location.href = "college-filter-management.php?gthostels";
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
          window.location.href = "college-filter-management.php?gtspacialization";
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
          window.location.href = "college-filter-management.php?gtdegree";
        }
      })
    })
    </script>
</body>

</html>
