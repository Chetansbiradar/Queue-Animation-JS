<?php
define("SERVER_NAME","localhost");
define("DB_USERNAME","root");
define("DB_PASSWORD","");
define("DB_NAME","queuedb");

//connection
$conn = mysqli_connect(SERVER_NAME, DB_USERNAME, DB_PASSWORD,DB_NAME);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>