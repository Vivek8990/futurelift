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
  <a href="addreferal.php">Add Referal</a>
  <?php } ?>
  <a href="functions.php?adminlogout">Signout</a>
</div>

  <!-- college addition form start -->
  <div class="main">

  <section class="admission" id="admission">
          <div class="row">
              <div class="d-flex flex-wrap justify-content-center ">
                  <div class="admissionFormPart col-md-6">
                     
                      <form action="functions.php?addreferal" method="post"  class="text-center" >
                      
                          <div class="form-group">
                              <label for="" class="form-label">Full Name</label>
                              <input type="text" class="form-control" name="name"placeholder= "Name" >
                          </div>
                         
                        <div class="form-group">
                            <label for="" class="form-label">Email Id</label>
                            <input type="mail" class="form-control" placeholder="Email Id" name="emailid" >
                        </div>
                        <div class="form-group">
                            <label for="" class="form-label">college Name</label>
                            <input type="text" class="form-control" placeholder="college Name" name="collegename" >
                        </div>
                        <div class="form-group">
                            <label for="" class="form-label">Referal code</label>
                            <input type="text" class="form-control" placeholder="Referal code" name="referal" >
                        </div>
                        <div class="form-group">
                            <label for="" class="form-label">Amount</label>
                            <input type="text" class="form-control" placeholder="Amount" name="amount">
                        </div>
                        
                        <div class="form-group">
                            
                            <input type="hidden" class="form-control"  name="counselerid">
                        </div>
                        <div class="form-group">
                            <label for="" class="form-label">select Status</label>
                            <select name="status" id="" class="form-select">
                            <option value="">Select status</option>
                                <option value="success">Success</option>
                                <option value="pending">Pending</option>
                               
                            </select>
                        </div>
                        
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