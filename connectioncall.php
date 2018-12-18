 <?php

include 'connection.php';
 
$mysqli = OpenCon();
 
echo "Connected Successfully";
 
CloseCon($mysqli);
 
?>

