<?php
// it will never let you open index(login) page if session is set
if(!isset($_SESSION['id'])){
   header("location: ../partials/innovation.twig");
}
?>
<div class="admin">
	<h1>Test</h1>
</div>