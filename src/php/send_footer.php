<?php
require 'config/config.php';
require 'config/dbconnect.php';

$title = $mysqli->real_escape_string($_POST['title']);
$title_color = $mysqli->real_escape_string($_POST['title_color']);
$subtitle = $mysqli->real_escape_string($_POST['subtitle']);
$subtitle_color = $mysqli->real_escape_string($_POST['subtitle_color']);
$content = $mysqli->real_escape_string($_POST['content']);

$sql = ("INSERT INTO footer (title, title_color, subtitle, subtitle_color, content) VALUES ('$title', '$title_color', '$subtitle', '$subtitle_color', '$content'");
$result = $mysqli->query($sql);
?>