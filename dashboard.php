
<?php 
require_once('functions.php');
$ref_code = ( $_SESSION['userdata']['user_code']);
$user = getRefUserList($ref_code);
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
        <br>
        <br>
        <strong>Total user referred :</strong>
        <br><span> <?php

foreach ($user as $obj) {
    echo $obj['full_name']; ?>
    <br>
    <?php
}
        ?></span>
        </div>
<br>
<br>
        <i><a href="functions.php?logout">Signout</a></i> 
       
</div>
    </body>
</html>
