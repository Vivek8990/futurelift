<?php
require_once('functions.php');
$result=studentlist();
$admin = $_SESSION['userdata']['role'];

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
  <?php } ?>
  <a href="functions.php?adminlogout">Signout</a>
</div>
<div class="main">
<table id="customers">
<caption><h1>student List</h1></caption>
<tr>
<th>Name </th>
<th>mobile </th>
<th>email </th>
<th>fathe name </th>
<th>father mobile number</th>
<th>10th percentage</th>
<th>12t percentage</th>
<th>graduation percentage</th>
<th> course</th>
<th>specialization</th>
<th>college</th>
<th>permanent address</th>
<th>city</th>
<th>pin code</th>

<th>created</th>
<?php if($admin == 'superadmin') {?>
<th>action </th>
<th>action </th>
<?php } ?>
</tr>
<?php
 while($row =mysqli_fetch_array($result,MYSQLI_ASSOC))

  {

  echo "<tr>";

  echo "<td>" . $row['full_name'] . "</td>";

  echo "<td>" . $row['student_mobile_name'] . "</td>";

  echo "<td>" . $row['email_id'] . "</td>";

  echo "<td>" . $row['fathe_name'] . "</td>";
  echo "<td>" . $row['father_mobile_number'] . "</td>";
  echo "<td>" . $row['10th_percentage'] . "</td>";
  echo "<td>" . $row['12t_percentage'] . "</td>";
  echo "<td>" . $row['graduation_percentage'] . "</td>";
  echo "<td>" . $row['select_course'] . "</td>";
  echo "<td>" . $row['specialization'] . "</td>";
  echo "<td>" . $row['select_college'] . "</td>";
  echo "<td>" . $row['permanent_address'] . "</td>";
  echo "<td>" . $row['city'] . "</td>";
  echo "<td>" . $row['pin_code'] . "</td>";
  echo "<td>" . $row['created'] . "</td>";

  if($admin == 'superadmin') {
  echo "<td> <a href='update.php?id=" . $row['id'] . "'>Update </a></td>";
  echo "<td> <a href='remove.php?type=student&id=" . $row['id'] . "'>Remove</a></td>";
}

  echo "</tr>";

  }

?>
</table>
</div>
</body>
</html>