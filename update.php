<?php
require_once('functions.php');
$id='';
if (isset($_GET['id']))
{
    $collegeid=$_GET['id'];
   
}$course=Courseslist();
$affiliationlist=affiliationlist();
$Approvallist=Approvallist();
$Agenceylist=Agenceylist();
$getCollegetype=getCollegetype();
$statelist=statelist();
$citylist=citylist();
$college= getcollege($collegeid);

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
        
        <div >
          <h1>Update College</h1>
          <form action="functions.php?updatecollege" class="text-center" method="post">
            <div class="form-group ">
            <input type="text" hidden name="id" value="<?php echo $collegeid; ?>" >

              <div class="row ">
                <div class="col-2">
                  <label for="" class="form-label"><i class="fa fa-user"></i></label>
                </div>
                <div class="col-10">
                  <input type="text" name="collage_name" value="<?php echo $college[0]['collage_name']; ?>" class="form-control" required placeholder="College name"autocomplete="off">
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="row">
              <select name="state_id" id="cars">
              
             
                                <?php
                    while($row =mysqli_fetch_array($statelist,MYSQLI_ASSOC))
                    if($row['id']==$college[0]['state_id'])
                    {
                      echo "<option value='".$row['id'] ."' selected>".$row['state_name'] ."</option>";
                    }
                    
                    
                   else
                    { 
                    echo "<option value='".$row['id'] ."'>".$row['state_name'] ."</option>";

                    }

                    ?>
                </select>
              </div>

            </div>

            <div class="form-group">
              <div class="row">
              <select name="city_id" id="cars">
              
             
                                <?php
                    while($row =mysqli_fetch_array($citylist,MYSQLI_ASSOC))
                    if($row['id']==$college[0]['city_id'])
                    {
                      echo "<option value='".$row['id'] ."' selected>".$row['city_name'] ."</option>";
                    }
                    
                    
                   else
                    { 
                    echo "<option value='".$row['id'] ."'>".$row['city_name'] ."</option>";

                    }

                    ?>
                </select>
              </div>

            </div>

            <div class="form-group">
              <div class="row">
              <select name="Collage_type" id="cars">
             
                                <?php
                    while($row =mysqli_fetch_array($getCollegetype,MYSQLI_ASSOC))
                    if($row['id']==$college[0]['collage_type_id'])
                    {
                      echo "<option value='".$row['id'] ."' selected>".$row['type'] ."</option>";
                    }
                    
                    
                   else
                    
                    {
                    echo "<option value='".$row['id'] ."'>".$row['type'] ."</option>";

                    }

                    ?>
                </select>
              </div>
            </div>
            <div class="form-group">
              <div class="row">
              <select name="approvel_id" id="cars">
              
                                <?php
                    while($row =mysqli_fetch_array($Approvallist,MYSQLI_ASSOC))
                    if($row['id']==$college[0]['approvel_id'])
                    {
                      echo "<option value='".$row['id'] ."' selected>".$row['approval_name'] ."</option>";
                    }
                    
                    
                   else
                    
                    {
                    echo "<option value='".$row['id'] ."'>".$row['approval_name'] ."</option>";

                    }

                    ?>
                </select>
              </div>
            </div>
            <div class="form-group">
              <div class="row">
              <select name="affiliated_id" id="cars">
              <option value="">Select Affiliation</option>
                                <?php
                    while($row =mysqli_fetch_array($affiliationlist,MYSQLI_ASSOC))
                    if($row['id']==$college[0]['affiliated_id'])
                    {
                      echo "<option value='".$row['id'] ."' selected>".$row['affiliation_name'] ."</option>";
                    }
                    
                    
                   else
                    
                    {
                    echo "<option value='".$row['id'] ."'>".$row['affiliation_name'] ."</option>";

                    }

                    ?>
                </select>
              </div>
            </div>
            <div class="form-group">
              <div class="row">
              <select name="course_id" id="cars">
              <option value="">Select Course</option>
                                <?php
                    while($row =mysqli_fetch_array($course,MYSQLI_ASSOC))
                    if($row['id']==$college[0]['course_id'])
                    {
                      echo "<option value='".$row['id'] ."' selected>".$row['course_name'] ."</option>";
                    }
                    
                    
                   else
                    
                    {
                    echo "<option value='".$row['id'] ."'>".$row['course_name'] ."</option>";

                    }

                    ?>
                </select>
              </div>
            </div>
           
            <div class="form-group">
              <div class="row ">
              <select name="gender" id="cars">
              <?php
              if($row['gender']=="Coed")
                    {
                      echo "<option value='Coed' selected>Coed</option>";
                    }
                    
                    
                   else  if($row['gender']=="Girls")
                    
                    {
                    echo "<option value='Girls' selected>Girls</option>";

                    }
                   
                        echo "<option value='Coed' >Coed</option>";
                        echo "<option value='Girls' >Girls</option>";
                    
                    ?>
              </select>
              </div>
            </div>

            <div class="form-group">
            <div class="row ">
                <div class="col-2">
                  <label for="" class="form-label"><i class="fa fa-user"></i></label>
                </div>
                <div class="col-10">
                  <input type="text" name="rank" value="<?php echo $college[0]['rank']; ?>" class="form-control" required placeholder="College rank"autocomplete="off">
                </div>
              </div>

            </div>
            <button type="submit" class="btn">Submit</button>
            
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