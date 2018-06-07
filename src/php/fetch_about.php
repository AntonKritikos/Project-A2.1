<?php
$list = array();

$result = $mysqli->query("SELECT * FROM about");

while ($item = $result->fetch_assoc())
{
    $list[] = $item;
}

return $list;
?>