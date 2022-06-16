<?php
require_once('functions.php');

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
.txt {
  width: 60%; /* Same as the width of the sidenav */
  height: 50%;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
</style>
<script type="text/javascript" src="https://code.jquery.com/jquery-1.7.1.min.js"></script>

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
          <h1>Add College</h1>
          <form action="functions.php?collegeblog" class="text-center" method="post" >
          <div> 
          <div class="form-group "> 
          <div class="row ">
               
               <input type="text" name="name" class="form-control"  placeholder="College name"autocomplete="off">
             
           </div>
           </div> 
           <div class="form-group "> 
          <div class="row ">
    <textarea id="txtarea"  name="description" class="txt"></textarea>  
    
    <div id="divkarea"></div> 
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
 
  <script src="https://cdn.tiny.cloud/1/acv9e4attlmhza6zulk01qn0acopt45f41t8fxicdlepa3xe/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<script>
    tinymce.init({
      selector: 'textarea',
      plugins: 'a11ychecker advcode casechange export formatpainter linkchecker autolink lists checklist media mediaembed pageembed permanentpen powerpaste table advtable tinycomments tinymcespellchecker',
      toolbar: 'a11ycheck addcomment showcomments casechange checklist code export formatpainter pageembed permanentpen table',
      toolbar_mode: 'floating',
      tinycomments_mode: 'embedded',
      tinycomments_author: 'Author name',
    });
  </script>


 <script>
  $(document).ready(function() {  
 $('#btnValue').click(function() {  
  $("#divkarea").html("");  
  var content = tinymce.get("txtarea").getContent();  
  $("#divkarea").html(content);  
 });  
});   
  </script>

  
</body>

</html>