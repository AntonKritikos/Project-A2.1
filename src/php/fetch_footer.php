<?php
$list = array();

$result = $mysqli->query("SELECT * FROM footer");

while ($item = $result->fetch_assoc())
{
    $list[] = $item;
}

return $list;
?>