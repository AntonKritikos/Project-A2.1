<?php
$list = array();

$result = $mysqli->query("SELECT * FROM header");

while ($item = $result->fetch_assoc())
{
    $list[] = $item;
}

return $list;
?>