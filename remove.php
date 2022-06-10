<?php
//this is for database connection
require_once 'connection.php';


  
//For new user registration
$type = $_GET['type'];
$id = $_GET['id'];

switch ($type) {
    case "student":
      removestudent($id);
      break;
    case "blue":
      echo "Your favorite color is blue!";
      break;
    case "green":
      echo "Your favorite color is green!";
      break;
    default:
      echo "Your favorite color is neither red, blue, nor green!";
  }


  function removestudent($id)
  {
    $db=$GLOBALS['db'];
    $query="update admission set isremoved='1' where id = '$id'";
  echo $query;
    $runQuery=mysqli_query($db,$query);
  
     if($runQuery){
        header('location:studentlist.php');
     }
  }
  ?>
