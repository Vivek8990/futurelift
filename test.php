
<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$db = "responsive";

// Create connection
try{
$db = new mysqli($servername, $username, $password,$db);
$error ="";

}
catch(Exception $e){
    echo $e;
}
// Check connection
if ($db->connect_error) {
   
    die("Connection failed: " . $conn->connect_error);
}
$q='';
if (isset($_GET['term'])) {
    $q = $_GET['term'];
    echo $q;
}

    
    
    $query="SELECT c.*,af.affiliation_name,ap.approval_name	,co.course_name,s.state_name,ct.type FROM college c 
    join affiliation af on af.id=c.affiliated_id
    join   Approval ap on ap.id= c.approvel_id 
    join   Courses co on co.id= c.course_id
    join   State s on s.id=c.state_id 
    join   Collage_type ct on ct.id=c.collage_type_id 
    where c.gender='$q' or c.collage_name ='$q' or af.affiliation_name ='$q' or ap.approval_name ='$q' or co.course_name='$q' or s.state_name='$q' or ct.type='$q' ";

    $runQuery=mysqli_query($db,$query);

   

?>
<!DOCTYPE html>
<html lang="en">

<section>
<div class="main">
<table id="customers">
<caption><h1>college List</h1></caption>
<tr>
<th>collage_name </th>
<th>state </th>
<th>collage_type </th>
<th>affiliated </th>
<th>approvel </th>
<th>gender_accepted </th>
<th>course </th>
<th>created </th>
<th>action </th>

</tr>
<?php
 while($row =mysqli_fetch_array($runQuery,MYSQLI_ASSOC))

  {

  echo "<tr>";

  echo "<td>" . $row['collage_name'] . "</td>";

  echo "<td>" . $row['state_name'] . "</td>";

  echo "<td>" . $row['type'] . "</td>";

  echo "<td>" . $row['affiliation_name'] . "</td>";
  echo "<td>" . $row['approval_name'] . "</td>";
  echo "<td>" . $row['gender'] . "</td>";
  echo "<td>" . $row['course_name'] . "</td>";
  echo "<td>" . $row['created'] . "</td>";
  echo "<td> <a href='update.php?id=" . $row['id'] . "'>Update ". $row['id'] ."</a></td>";
 

  echo "</tr>";

  }

?>
</table>
</section>
</html>