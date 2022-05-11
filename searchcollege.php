
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

if (isset($_POST['submit']))  {
    $q = $_POST['term'];
    header("location: test.php?term=$q");
    
    }

?>
<!DOCTYPE html>
<html lang="en">
<section class="form-section" id="form-section">
<form action="" class="text-center" method="post">
            <div class="form-group ">
              <div class="row ">
                <div class="col-2">
                  <label for="" class="form-label"><i class="fa fa-user"></i></label>
                </div>
                <div class="col-10">
                  <input type="text" name="term" class="form-control" required placeholder="search" autocomplete="off">
                </div>
              </div>
            </div>
            <button type="submit" name="submit" class="btn">Submit</button>
</form>
</section>

</html>