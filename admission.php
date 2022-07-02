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
  <title>Future Lift admission for any college</title>
</head>
<body>

    <header class="header">
        <a href="index.php" class="logo"><img src="images/newlogo.png" alt=""></a>
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
      <section class="admission" id="admission">
          <div class="row">
              <div class="d-flex flex-wrap justify-content-center ">
                  <div class="admissionFormPart col-md-6">
                      <h1 class="heading text-center p-5">open admission for 2022</h1>
                      <form action="functions.php?admission"  method="post">
                        <p class="text-center">take your site first</p>
                          <div class="form-group">
                              <label for="" class="form-label">Full Name</label>
                              <input type="text" class="form-control"name="fullname" placeholder="Full Name" >
                          </div>
                          <div class="form-group">
                            <label for="" class="form-label">Mobile Number</label>
                            <input type="mobile" class="form-control" name="mobilenumber" placeholder="Mobile Number">
                        </div>
                        <div class="form-group">
                            <label for="" class="form-label">Email Id</label>
                            <input type="mail" class="form-control" name="emailid" placeholder="Email Id" >
                        </div>
                        <div class="form-group">
                            <label for="" class="form-label">Father Name</label>
                            <input type="text" class="form-control" name="fathername" placeholder="Father Name" >
                        </div>
                        <div class="form-group">
                            <label for="" class="form-label">Mobile Number</label>
                            <input type="text" class="form-control"  name="fathermobilenumber"placeholder="Mobile Number" >
                        </div>
                        <div class="form-group">
                            <label for="" class="form-label">10th Percentage</label>
                            <input type="text" class="form-control" name="10thpercentages" placeholder="10th Percentage">
                        </div>
                        <div class="form-group">
                            <label for="" class="form-label">12th Percentage</label>
                            <input type="text" class="form-control" name="12thpercentages" placeholder="12th Percentage">
                        </div>
                        <div class="form-group">
                            <label for="" class="form-label">Graduation Percentage</label>
                            <input type="text" class="form-control" name="graduationpercentages" placeholder="Graduation Percentage">
                        </div>

                        <div class="form-group">
                            <label for="" class="form-label">select course</label>
                            <select name="selectcourse" id="" class="form-select">
                                <option value="MBA">MBA</option>
                                <option value="LLB">LLB</option>
                                <option value="BSc">BSc</option>
                                <option value="MSc">MSc</option>
                                <option value="MD">MD</option>
                                <option value="PHARMACY">PHARMACY</option>
                                <option value="Chemistry">Chemistry</option>
                                <option value="Degree">Degree</option>
                                <option value="Houners">Houners</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="" class="form-label">Specialization</label>
                            <select name="specilization" id="" class="form-select">
                                <option value="Business Administration">Business Administration</option>
                                <option value="General Management">General Management</option>
                                <option value="Human Resources Management">Human Resources Management</option>
                                <option value="Finance">Finance</option>
                                <option value="Management">Management</option>
                                <option value="International Business">International Business</option>
                                <option value="Business Management">Business Management</option>
                                <option value="Operational Management">Operational Management</option>
                                <option value="Business Analytics">Business Analytics</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="" class="form-label">select college</label>
                            <select name="selectcollege" id="" class="form-select">
                                <option value="Business Administration">Delhi University</option>
                                <option value="General Management">chandigarh University</option>
                                <option value="Human Resources Management">Nalanda University</option>
                                <option value="Finance">Mumbai IIT</option>
                                <option value="Management">Delhi IIT</option>
                                <option value="International Business">Kharagpur IIT</option>
                                <option value="Business Management">Jadavpur University</option>
                                <option value="Kalyani University">Kalyani University</option>
                                <option value="Barasat Govt. College">Barasat Govt. College</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="" class="form-label">permanent address</label>
                            <input type="text" name="permanentaddress" class="form-control" placeholder="permanent address">
                        </div>
                        <div class="form-group">
                            <label for="" class="form-label">city</label>
                            <select name="city" id="" class="form-select">
                                <option value="Kolkata">Kolkata</option>
                                <option value="Delhi">Delhi</option>
                                <option value="Mumbai">Mumbai</option>
                                <option value="Pune">Pune</option>
                                <option value="Bangalore">Bangalore</option>
                                <option value="Rajasthan">Rajasthan</option>
                                <option value="Bihar">Bihar</option>
                                <option value="Odissa">Odissa</option>
                                <option value="Nagpure">Nagpure</option>
                            </select>
                        </div>




                      
                            <label for="" class="form-label">pin code</label>
                            <input type="number"  name="pincode"class="form-control" placeholder="pin code" required>
                        
                          <button type="submit" class="btn" value="submit">submit</button>
                        
                      </form>
                  </div>
                  <div class="admissionPart col-md-6">
                    <img src="images/admission-01.png" alt="" class="img-fluid" width="">
                </div>
                  
              </div>
          </div>

      </section>









      <script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="aos/aos.js"></script>
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  <script src="js/script.js"></script>
    
</body>
</html>