<?php
require 'config/config.php';
require 'config/dbconnect.php';
$list = array();

$result = $mysqli->query("SELECT * FROM layout");

while ($item = $result->fetch_assoc())
{
    $list[] = $item;
}

return $list;
?>