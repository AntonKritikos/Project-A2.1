<?php
//Check if a session is set
if(isset($_SESSION['id']))
{
	//Destroy the session
	session_destroy();
    unset($_SESSION['id']);
}
?>
<a href="?action=home">Succesvol uitgelogd!</a>