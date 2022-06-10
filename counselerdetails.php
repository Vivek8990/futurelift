<?php
require_once('functions.php');
$id='';
if (isset($_GET['id']))
{
    $id=$_GET['id'];
   
}
$counseler=counselerdeatails($id);
$kyc=checkkyc($id);
echo $kyc;
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
  <section class="form-section" id="form-section">
    <div >
      <div >
        <h1> counseler details</h1>
        
        <div >
       <span>email : <?php echo $counseler['email_id']?></span><br>
       <span>fullname : <?php echo $counseler['fullname']?></span><br>
       <span>dob : <?php echo $counseler['dob']?></span><br>
       <span>gender : <?php echo $counseler['gender']?></span><br>
       <span>language : <?php echo $counseler['language']?></span><br>
       <span>preferedlanguage : <?php echo $counseler['preferedlanguage']?></span><br>
       <span>workschedule : <?php echo $counseler['workschedule']?></span> <br>
       <span>salary : <?php echo $counseler['salary']?></span><br>
       <span>refercode : <?php echo $counseler['refercode']?></span><br>
       <?php if($kyc=='Pending') {?>  <span>KYC status : <?php echo $kyc;?></span> <?php }?>
       <?php if($kyc['status']!='Pending') {?>
       <span>pannumber : <?php echo $kyc['pannumber']?></span><br>
       <span>KYC status : <?php echo $kyc['status']?></span>
       
        <?php if($kyc['status']=='processing') {
  echo " <a href='functions.php?fn=kycupdate&status=approved&id=".$id."'>Approve KYC</a>";
  echo " <a href='functions.php?fn=kycupdate&status=rejected&id=".$id."'>Reject KYC</a>";
}  ?> <br>
       <?php echo " <img src='data:image;base64,".$kyc['pan']."' alt='' class='img-fluid' style = 'width : 200px; height :200px;'>"; ?> <?php }?>


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