<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
      function OpenCon(){  
      $mysqli = new mysqli("localhost", "root@localhost", "Apple@123", "lamp_final_Project");
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}


$mysqli = new mysqli("localhost", "root@localhost", "Apple@123", "lamp_final_Project", 3306);
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
      return $mysqli;
      }

function CloseCon($mysqli)
 {
 $mysqli -> close();
 }  

        ?>
    </body>
</html>
