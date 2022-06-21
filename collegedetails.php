<?php
require_once 'functions.php';
$id='';
if (isset($_GET['id']))
{
    $id=$_GET['id'];
  // echo $id;
}
 $college = get_college($id);
 $course = get_course($id);
 $placement = get_placement($id);
 $college_gellary = get_college_gellary($id);
//print_r($college_gellary);

?>


<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Future Lift </title>
  

</head>
<body>

  <!-- college addition form start -->
  <div class="main"> 
  <section class="form-section" id="form-section">
    <div >
      <div >
        <h1> collage details</h1>
        
        <div>
      <?php  while($row =mysqli_fetch_array($college,MYSQLI_ASSOC))

        {
           echo " <span>College :".$row['collage_name']."</span><br>";
           echo " <span>Affiliation :".$row['affiliation_name']."</span><br>";
           echo " <span>Approval :".$row['approval_name']."</span><br>";
           echo " <span>City :".$row['city_name']."</span><br>";
           echo " <span>State :".$row['state_name']."</span><br>";
           echo " <span>Type :".$row['type']."</span><br>";
        //    echo " <span>Degree :".$row['degree_name']."</span><br>";
        //    echo " <span>College :".$row['collage_name']."</span><br>";
        } 

        ?>
        <?php  while($row =mysqli_fetch_array($course,MYSQLI_ASSOC))

{
   echo " <span>Degree :".$row['degree_name']."</span><br>";
   echo " <span>eligibility :".$row['details']."</span><br>";
   echo " <span>course_fee :".$row['course_fee']."</span><br>";
   echo " <span>Duration :".$row['duration']."</span><br>";
   
} 

?>
 <?php  while($row =mysqli_fetch_array($placement,MYSQLI_ASSOC))

{
   echo " <span>placement_company :".$row['placement_company']."</span><br>";
   echo " <span>placement_department :".$row['placement_department']."</span><br>";
   echo " <span>placement_ctc :".$row['placement_ctc']."</span><br>";
//    echo " <span>Duration :".$row['duration']."</span><br>";
   
} 

?>
<?php  while($row =mysqli_fetch_array($college_gellary,MYSQLI_ASSOC))

{
    echo " <img src='data:image;base64,".$row['url']."' alt='' class='img-fluid' style = 'width : 200px; height :200px;'>";
   
} 

?>
       
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