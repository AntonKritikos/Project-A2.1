<?php
require 'config/config.php';
require 'config/dbconnect.php';

$result = $mysqli->query("SELECT * FROM layout WHERE id = 2");

$info = $result->fetch_assoc();

return $info;
?>