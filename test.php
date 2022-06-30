
<?php

require_once 'functions.php';
$login = $_SESSION['userIsLoggedIn'];
$data=$_SESSION['userdata'];


$term=$_GET['gtcourse'];

//$_SESSION['term']=$term;
$city = getcity();
$State = getstate();
$studymode= getstudymode();
$getinstutiontype= getinstutiontype();
$hostel = gethostel();
$facility = getfacility();
$degreelist = getdegreelist($term);
$specilizationlist = getspecilizationlist($term);

$colleges = getCollegeByCourse($term);

print_r(mysqli_fetch_array($colleges,MYSQLI_ASSOC));
?>


