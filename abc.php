<?php
require_once('functions.php');
$login = $_SESSION['userIsLoggedIn'];
$data=$_SESSION['userdata'];
$id=$data['id'];
$totalrefer = gettotalrefereduser($id);
$balance = getcounselerBalance($id);

print_r($totalrefer);
print_r($balance);

  

?>