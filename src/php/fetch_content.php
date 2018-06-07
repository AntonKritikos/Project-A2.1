<?php
$list = array();

$result = $mysqli->query("SELECT * FROM innovations");

while ($item = $result->fetch_assoc())
{
    $list[] = $item;
}

return $list;
?>