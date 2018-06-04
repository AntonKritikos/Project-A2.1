<?php
require 'config/config.php';
require 'config/dbconnect.php';

$title = $mysqli->real_escape_string($_POST['title']);
$title_color = $mysqli->real_escape_string($_POST['title_color']);
$subtitle = $mysqli->real_escape_string($_POST['subtitle']);
$subtitle_color = $mysqli->real_escape_string($_POST['subtitle_color']);
$content = $mysqli->real_escape_string($_POST['content']);
$button_text = $mysqli->real_escape_string($_POST['button_text']);
$button_link = $mysqli->real_escape_string($_POST['button_link']);

$sql = ("UPDATE about SET title = '$title', title_color = '$title_color', subtitle = '$subtitle', subtitle_color = '$subtitle_color', content = '$content', button_text = '$button_text', button_link = '$button_link'");
$results = $mysqli->query($sql);
?>