<?php
require_once('functions.php');
$course=Courseslist();
$specilization=specilizationlist();


$statelist=statelist();
$citylist=citylist();
$admin = $_SESSION['userdata']['role'];
if($admin != 'superadmin') {header('location:admin_dashboard.php'); }
?>

<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Future Lift scholership</title>
  
<style>
body {
  font-family: "Lato", sans-serif;
}

.sidenav {
  height: 100%;
  width: 160px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  padding-top: 20px;
}

.sidenav a {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.main {
  margin-left: 160px; /* Same as the width of the sidenav */
  font-size: 28px; /* Increased text to enable scrolling */
  padding: 0px 10px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
</style>
<script type="text/javascript" src="https://code.jquery.com/jquery-1.7.1.min.js"></script>

</head>
<body>

<div class="sidenav">
  <a href="admin_dashboard.php">Dashboard</a>
  <a href="collegelist.php">collegelist</a>
  
  <?php if($admin == 'superadmin') {?>
    <a href="addcollege.php">Add college</a>
  <a href="totaluser.php">Userlist</a>
  
  <a href="counslerlist.php">Counslerlist</a>
  <a href="totalscholership.php">Scholership</a>
  <?php } ?>
  <a href="functions.php?adminlogout">Signout</a>
</div>

  <!-- college addition form start -->
  <div class="main">

  <section class="admission" id="admission">
          <div class="row">
              <div class="d-flex flex-wrap justify-content-center ">
                  <div class="admissionFormPart col-md-6">
                     
                      <form action="functions.php?student" method="post"  class="text-center" >
                      
                          <div class="form-group">
                              <label for="" class="form-label">Full Name</label>
                              <input type="text" class="form-control" name="fullname"placeholder="Full Name" >
                          </div>
                          <div class="form-group">
                            <label for="" class="form-label">Mobile Number</label>
                            <input type="mobile" class="form-control" placeholder="Mobile Number" name="mobilenumber">
                        </div>
                        <div class="form-group">
                            <label for="" class="form-label">Email Id</label>
                            <input type="mail" class="form-control" placeholder="Email Id" name="emailid" >
                        </div>
                        <div class="form-group">
                            <label for="" class="form-label">Father Name</label>
                            <input type="text" class="form-control" placeholder="Father Name" name="fathername" >
                        </div>
                        <div class="form-group">
                            <label for="" class="form-label">Mobile Number</label>
                            <input type="text" class="form-control" placeholder="Mobile Number"  name="fathermobilenumber">
                        </div>
                        <div class="form-group">
                            <label for="" class="form-label">10th Percentage</label>
                            <input type="text" class="form-control" placeholder="10th Percentage" name="10thpercentages">
                        </div>
                        <div class="form-group">
                            <label for="" class="form-label">12th Percentage</label>
                            <input type="text" class="form-control" placeholder="12th Percentage" name="12thpercentages">
                        </div>
                        <div class="form-group">
                            <label for="" class="form-label">Graduation Percentage</label>
                            <input type="text" class="form-control" placeholder="Graduation Percentage" name="graduationpercentages">
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
                                <option value="Delhi University">Delhi University</option>
                                <option value="chandigarh University">chandigarh University</option>
                                <option value="Nalanda University">Nalanda University</option>
                                <option value="Mumbai IIT">Mumbai IIT</option>
                                <option value="Delhi IIT">Delhi IIT</option>
                                <option value="Kharagpur IIT">Kharagpur IIT</option>
                                <option value="Jadavpur University">Jadavpur University</option>
                                <option value="Kalyani University">Kalyani University</option>
                                <option value="Barasat Govt. College">Barasat Govt. College</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="" class="form-label">permanent address</label>
                            <input type="text" class="form-control" placeholder="permanent address" name="permanentaddress">
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
                            <input type="number" class="form-control" placeholder="pin code" name="pincode" required>
                        
                          <button type="submit" class="btn" value="submit">submit</button>
                        
                      </form>
                  </div>
                  
              </div>
          </div>

      </section>
    
  </div>
  <!-- signup form end -->

<!-- Footer End -->
  <script src="js/script.js"></script>
 
  

  
</body>

</html>