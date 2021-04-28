<?php
$servername = "sql310.epizy.com"; // MySQL Hostname in infinityfree.net
$username = "epiz_28228917"; // MySQL Username in infinityfree.net
$password = "Gt5hjpRq6ItG"; // MySQL Password in infinityfree.net
$dbname = "epiz_28228917_fatimah_db"; // Database name in infinityfree.net

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage(); // if connection to Database failed
}
?>