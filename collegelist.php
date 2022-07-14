<?php
require_once('functions.php');
$result=collegelist();
$admin = $_SESSION['userdata']['role'];

if(isset($_POST['searchbtn'])){
  $search = $_POST['search'];
 // echo $search;
  $result = getcollegebysearch($search);
 
}
if(isset($_POST['reset'])){
 
  $result = collegelist();
 
}

function getcollegebysearch($term){
  
  $db=$GLOBALS['db'];
  $search = $term;

  
    $query="SELECT c.*,af.affiliation_name,ap.approval_name	,co.degree_name,s.state_name,ct.type FROM college c INNER JOIN affiliation af on af.id=c.affiliated_id
  INNER JOIN   Approval ap on ap.id= c.approvel_id 
  INNER JOIN college_degree cd on cd.college_id = c.id
  INNER JOIN   Degree co on co.id= cd.degree_id
  INNER JOIN State s on s.id=c.state_id 
  INNER JOIN   Collage_type ct on ct.id=c.collage_type_id 
  
  where c.collage_name like ('%$search%') || co.degree_name like ('%$search%') ||s.state_name like ('%$search%') || ct.type like ('%$search%') || c.gender like ('%$search%')";
  
   $runQuery=mysqli_query($db,$query);
  
    return $runQuery;

}
?>
<html>
<head>
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
</style>

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
  <a href="addreferal.php">Add Referal</a>
  <?php } ?>
  <a href="functions.php?adminlogout">Signout</a>
</div>
<div class="main">
<h1>college List</h1>
<div class="search-container" style="float:left;">
    <form action="" method="post">
      <input type="text" placeholder="Search.." name="search">
      <button type="submit" name= "searchbtn">Submit</button>
      <button type="submit" name= "reset">Reset</button>
    </form>
  </div>
<table id="customers">

<tr>
<th>collage_name </th>
<th>state </th>
<th>collage_type </th>
<th>affiliated </th>
<th>approvel </th>
<th>gender_accepted </th>
<th>course </th>
<th>created </th>
<?php if($admin == 'superadmin') {?>
<th>action </th>
<?php } ?>
</tr>
<?php
 while($row =mysqli_fetch_array($result,MYSQLI_ASSOC))

  {

  echo "<tr>";

  echo "<td>" . $row['collage_name'] . "</td>";

  echo "<td>" . $row['state_name'] . "</td>";

  echo "<td>" . $row['type'] . "</td>";

  echo "<td>" . $row['affiliation_name'] . "</td>";
  echo "<td>" . $row['approval_name'] . "</td>";
  echo "<td>" . $row['gender'] . "</td>";
  echo "<td>" . $row['degree_name'] . "</td>";
  echo "<td>" . $row['created'] . "</td>";
  if($admin == 'superadmin') {
  echo "<td> <a href='update.php?id=" . $row['id'] . "'>Update </a></td>";
}

  echo "</tr>";

  }

?>
</table>
</div>
</body>
</html>