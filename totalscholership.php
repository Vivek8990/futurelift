<?php
require_once('functions.php');
$result=scholershiplist();
$admin = $_SESSION['userdata']['role'];
if($admin != 'superadmin') {header('location:admin_dashboard.php'); }

if(isset($_POST['searchbtn'])){
  $search = $_POST['search'];
 // echo $search;
  $result = getscholershipbysearch($search);
 
}
if(isset($_POST['reset'])){
 
  $result = scholershiplist();
 
}

function getscholershipbysearch($term){
  
  $db = $GLOBALS['db'];
  $created = date("Y-m-d h:i:s");
  $search = $term;

  $query="SELECT * FROM  Scholorship  where fullname like ('%$search%') || 	email like ('%$search%') || mobile like ('%$search%') || collegename like ('%$search%') || 	coursename like ('%$search%') || created like ('%$search%') || hspersentage like ('%$search%')";

 //echo $query;
  
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
<div class="search-container" style="float:left;">
    <form action="" method="post">
      <input type="text" placeholder="Search.." name="search">
      <button type="submit" name= "searchbtn">Submit</button>
      <button type="submit" name= "reset">Reset</button>
    </form>
  </div>
<table id="customers">
<caption><h1>User List</h1></caption>
<tr>
<th>fullname </th>
<th>email </th>
<th>mobile </th>
<th>admissionid </th>
<th>hspersentage </th>
<th>collegename </th>
<th>coursename </th>
<th>register </th>

</tr>
<?php
 while($row =mysqli_fetch_array($result,MYSQLI_ASSOC))

  {

  echo "<tr>";

  echo "<td>" . $row['fullname'] . "</td>";

  echo "<td>" . $row['email'] . "</td>";

  echo "<td>" . $row['mobile'] . "</td>";


  echo "<td>" . $row['admissionid'] . "</td>";
  echo "<td>" . $row['hspersentage'] . "</td>";
  echo "<td>" . $row['collegename'] . "</td>";
  echo "<td>" . $row['coursename'] . "</td>";
  
  echo "<td>" . $row['created'] . "</td>";
 

  echo "</tr>";

  }

?>
</table>
</div>
</body>
</html>