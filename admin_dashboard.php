
<?php 
require_once('functions.php');
$user = totaluser();
$scholer = totalscholershipapplied();
$college = totalcollege();
$admin = $_SESSION['userdata']['role'];

?>
<html>
<head>
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



<div class="main">
        <h3>Welcome</h3>

  <span><b> <a href="totaluser.php"> Total registered user : </b> <?php echo $user[0]['total']; ?></span></a><br><br>
  <span><b>  Total Scholership applied : </b> <?php echo $scholer[0]['total']; ?></span><br><br>
  <span><b>  Total college  : </b> <?php echo $college[0]['total']; ?></span><br><br>
  

<br>
<br>
        <!-- <i><a href="functions.php?adminlogout">Signout</a></i>  -->
       
</div>
    </body>
</html>
