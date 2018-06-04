<?php
require '../../php/fetch_content.php';
?>
<nav class="nav">
	<!-- Logo -->
	<div class="menu__image">
		<img src="/assets/img/hu-logo.svg" alt="Hier komt het HU logo">
	</div>
	<!-- Menu-->
	<div class="sidemenu">
		<ul class="nav__element">
			<li class="nav__item"><a href="#" class="nav__link">Header</a></li>
			<li class="nav__item"><a href="#" class="nav__link">About</a></li>
			<li class="nav__item"><a href="#" class="nav__link">Content</a></li>
			<?php 
				foreach ($list as $content)
				{
					?>
					<li class="nav__item"><a href="#" class="nav__link"><?php echo $content['title']; ?></a></li>
					<?php
				}
			?>
			<li class="nav__item"><a href="#" class="nav__link">Footer</a></li>
			<li class="nav__item"><a href="#" class="nav__link">Voeg een nieuwe sectie toe</a></li>
		</ul>
	</div>
</nav>
