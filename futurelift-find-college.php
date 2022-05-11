<?php
require_once 'functions.php';
$login = $_SESSION['userIsLoggedIn'];
$data=$_SESSION['userdata'];
$term=$_GET['q'];
$colleges = getCollegeByCategoury($term);
print_r(mysqli_fetch_all($colleges,MYSQLI_ASSOC));
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
  <title>Future Lift Find College List</title>
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
    <div class="main-text">
      <div  class="container top">
      
        <h1 class="heading text-center">colleges in india</h1>
        <h2 class="text-center">12115 colleges allover india</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam sunt illo reprehenderit corrupti necessitatibus. Excepturi commodi error sunt, voluptates facilis magnam vel dolore praesentium. Rem enim, aliquam asperiores fugit voluptatum adipisci, molestiae sed distinctio error facere autem id aspernatur debitis ratione aperiam necessitatibus ad. Quis tenetur at earum autem sit.</p>
      </div>
      <div>
      <div style="float:left; ">
        <div class="topdegreeCollg">
          <div class="dgree">
            <h1 class="heading text-center">state</h1>
            <img src="images/Arrow-down.png" alt="" class="img-fluid" style="width: 1.5rem;" id="collapsTg">
          </div>
          <div class="colgSearch">
            <input type="search">
          </div>
          <div class="dgreeFilter" id="collaps">
           <form action="" method="post">
            <div class="checkBox">
              <input type="checkbox" name="state" class="state" value="Arunachal Pradesh">
            <label for="">Arunachal Pradesh</label>
            </div>
            <div class="checkBox">
              <input type="checkbox" name="state"class="state" value="Assam">
            <label for="">Assam</label>
            </div>
            <div class="checkBox">
              <input type="checkbox"name="state"class="state" value="Bihar">
            <label for="">Bihar</label>
            </div>
            <div class="checkBox">
              <input type="checkbox" name="state" class="state" value="Chandigarh">
            <label for="">Chandigarh</label>
            </div>
            <div class="checkBox">
              <input type="checkbox" name="state"  class="state" value="Chhattisgarh">
            <label for="">Chhattisgarh</label>
            </div>
            <div class="checkBox">
              <input type="checkbox" name="state"  class="state" value="Delhi">
            <label for="">Delhi</label>
            </div>
            <div class="checkBox">
              <input type="checkbox" name="state"  class="state" value="Gujarat">
            <label for="">Gujarat</label>
            </div>
            <div class="checkBox">
              <input type="checkbox" name="state"  class="state" value="Haryana">
            <label for="">Haryana</label>
            </div>
            <div class="checkBox">
              <input type="checkbox" name="state"  class="state" value="Himachal Pradesh">
            <label for="">Himachal Pradesh</label>
            </div>
            <div class="checkBox">
              <input type="checkbox" name="state" class="state" value="Jammu & Kashmir">
            <label for="">Jammu & Kashmir</label>
            </div>
            <div class="checkBox">
              <input type="checkbox"  name="state" class="state" value="Jharkhand">
            <label for="">Jharkhand</label>
            </div>
            <div class="checkBox">
              <input type="checkbox"  name="state" class="state" value="Karnataka">
            <label for="">Karnataka</label>
            </div>
            <div class="checkBox">
              <input type="checkbox" name="state"  class="state" value="Kerala">
            <label for="">Kerala</label>
            </div>
            <div class="checkBox">
              <input type="checkbox" name="state"  class="state" value="Madhya Pradesh">
            <label for="">Madhya Pradesh</label>
            </div>
            <div class="checkBox">
              <input type="checkbox" name="state"  class="state" value="Maharashtra">
            <label for="">Maharashtra</label>
            </div>
            <div class="checkBox">
              <input type="checkbox" name="state"  class="state" value="Manipur">
            <label for="">Manipur</label>
            </div>
            <div class="checkBox">
              <input type="checkbox" name="state"  class="state" value="Mizoram">
            <label for="">Mizoram</label>
            </div>
            <div class="checkBox">
              <input type="checkbox" name="state"  class="state" value="Orissa">
            <label for="">Orissa</label>
            </div>
            <div class="checkBox">
              <input type="checkbox" name="state"  class="state" value="Pondicherry">
            <label for="">Pondicherry</label>
            </div>
            <div class="checkBox">
              <input type="checkbox" name="state"  class="state" value="Punjab">
            <label for="">Punjab</label>
            </div>
            <div class="checkBox">
              <input type="checkbox" name="state" class="state" value="Rajasthan">
            <label for="">Rajasthan</label>
            </div>
            <div class="checkBox">
              <input type="checkbox" name="state"  class="state" value="Tamil Nadu">
            <label for="">Tamil Nadu</label>
            </div>
            <div class="checkBox">
              <input type="checkbox" name="state"  class="state" value="Uttarakhand">
            <label for="">Uttarakhand</label>
            </div>
            <div class="checkBox">
              <input type="checkbox" name="state"  class="state" value="Uttar Pradesh">
            <label for="">Uttar Pradesh</label>
            </div>
            <div class="checkBox">
              <input type="checkbox" name="state"  class="state" value="West Bengal">
            <label for="">West Bengal</label>
            </div>
            </form>
          </div>
        </div>
        <div class="topdegreeCollg">
          <div class="dgree">
            <h1 class="heading text-center">city</h1>
            <img src="images/Arrow-down.png" alt="" class="img-fluid" style="width: 1.5rem;">
          </div>
          <div class="colgSearch">
            <input type="search">
          </div>
          <div class="dgreeFilter">
            <div class="checkBox">
              <input type="checkbox"name="city" class="city" value="Abohar">
            <label for="">Abohar</label>
            </div>
            <div class="checkBox">
              <input type="checkbox"name="city" class="city" value="Agra">
            <label for="">Agra</label>
            </div>
            <div class="checkBox">
              <input type="checkbox" name="city"class="city" value="Ahmedabad">
            <label for="">Ahmedabad</label>
            </div>
            <div class="checkBox">
              <input type="checkbox"name="city" class="city" value="Ahmednagar">
            <label for="">Ahmednagar</label>
            </div>
            <div class="checkBox">
              <input type="checkbox"name="city" class="city" value="Aizawl">
            <label for="">Aizawl</label>
            </div>
            <div class="checkBox">
              <input type="checkbox"name="city" class="city" value="Akola">
            <label for="">Akola</label>
            </div>
            <div class="checkBox">
              <input type="checkbox"name="city" class="city" value="Aligarh">
            <label for="">Aligarh</label>
            </div>
            <div class="checkBox">
              <input type="checkbox"name="city" class="city" value="Allahabad">
            <label for="">Allahabad</label>
            </div>
            <div class="checkBox">
              <input type="checkbox"name="city" class="city" value="Ambala">
            <label for="">Ambala</label>
            </div>
            <div class="checkBox">
              <input type="checkbox"name="city" class="city" value="Amreli">
            <label for="">Amreli</label>
            </div>
            <div class="checkBox">
              <input type="checkbox"name="city" class="city" value="Amritsar">
            <label for="">Amritsar</label>
            </div>
            <div class="checkBox">
              <input type="checkbox"name="city" class="city" value="Anandpur Sahib">
            <label for="">Anandpur Sahib</label>
            </div>
            <div class="checkBox">
              <input type="checkbox"name="city" class="city" value="Anantnag">
            <label for="">Anantnag</label>
            </div>
            <div class="checkBox">
              <input type="checkbox"name="city" class="city" value="Auraiya">
            <label for="">Auraiya</label>
            </div>
            <div class="checkBox">
              <input type="checkbox"name="city" class="city" value="Aurangabad">
            <label for="">Aurangabad</label>
            </div>
            <div class="checkBox">
              <input type="checkbox" name="city"class="city"  value="Aurangabad (Bh)">
            <label for="">Aurangabad (Bh)</label>
            </div>
            <div class="checkBox">
              <input type="checkbox"name="city" class="city" value="Azamgarh">
            <label for="">Azamgarh</label>
            </div>
            <div class="checkBox">
              <input type="checkbox"name="city" class="city" value="Bagalkot">
            <label for="">Bagalkot</label>
            </div>
            <div class="checkBox">
              <input type="checkbox"name="city" class="city" value="Bageshwar">
            <label for="">Bageshwar</label>
            </div>
            <div class="checkBox">
              <input type="checkbox"name="city" class="city" value="Bahadurgarh">
            <label for="">Bahadurgarh</label>
            </div>
            <div class="checkBox">
              <input type="checkbox"name="city" class="city" value="Balaghat">
            <label for="">Balaghat</label>
            </div>
            <div class="checkBox">
              <input type="checkbox"name="city" class="city" value="Baloda Bazaar">
            <label for="">Baloda Bazaar</label>
            </div>
            <div class="checkBox">
              <input type="checkbox"name="city" class="city" value="Bangalore">
            <label for="">Bangalore</label>
            </div>
            <div class="checkBox">
              <input type="checkbox"name="city" class="city" value="Bantwal">
            <label for="">Bantwal</label>
            </div>
            <div class="checkBox">
              <input type="checkbox"name="city" class="city" value="Bareilly">
            <label for="">Bareilly</label>
            </div>
            <div class="checkBox">
              <input type="checkbox"name="city" class="city" value="Barnala">
            <label for="">Barnala</label>
            </div>
            <div class="checkBox">
              <input type="checkbox"name="city" class="city" value="Barpeta">
            <label for="">Barpeta</label>
            </div>
            <div class="checkBox">
              <input type="checkbox"name="city" class="city" value="Barrackpore">
            <label for="">Barrackpore</label>
            </div>
            <div class="checkBox">
              <input type="checkbox"name="city" class="city" value="Barwani">
            <label for="">Barwani</label>
            </div>
          </div>
        </div>
        <div class="topdegreeCollg">
          <div class="dgree">
            <h1 class="heading text-center">STUDY MODE</h1>
            <img src="images/Arrow-down.png" alt="" class="img-fluid" style="width: 1.5rem;">
          </div>
          <div class="colgSearch">
            <input type="search">
          </div>
          <div class="dgreeFilter">
            <div class="checkBox">
              <input type="checkbox"name="studymode" class="studymode" value="Regular">
            <label for="">Regular</label>
            </div>
            <div class="checkBox">
              <input type="checkbox"name="studymode" class="studymode" value="Part Time">
            <label for="">Part Time</label>
            </div>
            <div class="checkBox">
              <input type="checkbox"name="studymode" class="studymode" value="Distance Learning">
            <label for="">Distance Learning</label>
            </div>
          </div>
        </div>
        <div class="topdegreeCollg">
          <div class="dgree">
            <h1 class="heading text-center">institute type</h1>
            <img src="images/Arrow-down.png" alt="" class="img-fluid" style="width: 1.5rem;">
          </div>
          <div class="colgSearch">
            <input type="search">

          </div>
          <form action="" method="post">
          <div class="dgreeFilter">
            <div class="checkBox">
              <input type="checkbox"name="institutetype" class="institutetype" value="Government">
            <label for="">Government</label>
            </div>
            <div class="checkBox">
              <input type="checkbox" name="institutetype"class="institutetype" value="private">
            <label for="">private</label>
            </div>
            <div class="checkBox">
              <input type="checkbox"name="institutetype" class="institutetype" value="public">
            <label for="">public</label>
            </div>
          </div>
          </form>
        </div>
        <div class="collegeCetategory">
       </div>
    </div>
    <div style="padding-left:30%;">
    <table id="customers">

<tr>
<th>collage_name </th>
<th>state </th>
<th>collage_type </th>
<th>affiliated </th>
<th>approvel </th>
<th>gender_accepted </th>
<th>course </th>


</tr>
<?php
 while($row =mysqli_fetch_array($colleges,MYSQLI_ASSOC))

  {

  echo "<tr>";

  echo "<td>" . $row['collage_name'] . "</td>";

  echo "<td>" . $row['state_name'] . "</td>";

  echo "<td>" . $row['type'] . "</td>";

  echo "<td>" . $row['affiliation_name'] . "</td>";
  echo "<td>" . $row['approval_name'] . "</td>";
  echo "<td>" . $row['gender'] . "</td>";
  echo "<td>" . $row['course_name'] . "</td>";
  

  echo "</tr>";

  }

?>
</table>
    </div>
    </div>
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
}) </script>
  </body>
  </html>