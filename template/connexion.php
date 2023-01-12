<?php
  
  <?php
$server = "localhost"; $user = "root"; $pass = "root"; $database = "tppartiel";
try { 
   $conn = mysqli_connect($server, $user, $pass, $database);
} 
catch (Exception $e) {
   die('Erreur : '.$e->getMessage());
}
?>
