<?php
if(isset($_SESSION['id'])){
	session_destroy();
    unset($_SESSION['id']);
}
?>
<a href="?action=home">Succesvol uitgelogd!</a>