<?php
//echo '<pre>';
//print_r($_SERVER);
ob_clean(); // cleanes the output buffer of header.php
$conn = mysqli_connect(
   $_SERVER['DB_HOST'],
   $_SERVER['DB_USER'],
   $_SERVER['DB_PASSWORD'],
   $_SERVER['DB_NAME']
);

print_r($conn);

exit(); // Terminate this script so that footer can not run here