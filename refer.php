
<?php 
session_start();
$ref_code = ( $_SESSION['counseler']);

?>
<html>
<head>

</head>
<body>



<div class="main">
        <h3>Welcome</h3>

        <div>
            <strong>Referral Code :</strong><span> <?php

  echo $ref_code;

        ?></span>
</div>
    </body>
</html>
