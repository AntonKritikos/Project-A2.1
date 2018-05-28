<?php require '../../php/fetch_content_one.php'; ?>
<!-- <div class="container--admin">
	<h1>CMS ITEMS 2</h1>
	<form action="">
		<label for="title">Verander titel</label>
		<input type="text" name="title" placeholder="Leid de toekomst op!">
		<a href="">Contentblok verwijderen</a>
		<label for="subtitle">Verander subtitel</label>
		<input type="text" name="subtitel" placeholder="Leid de toekomst op!">
		<a href="">Contentblok verwijderen</a>
		<label for="content">Verander content</label>
		<input type="text" name="content" placeholder="Leid de toekomst op!">
		<a href="">Contentblok verwijderen</a>
		<label for="background">Verander achtergrond</label>
		<input type="text">
		<a href="">Verwijder</a>
		<label for="button">Verander button</label>
		<input type="text" name="button" placeholder="Inschrijven">
		<input type="text" name="button-url" placeholder="Url:">
		<a href="">Contentblok verwijderen</a>
		<label for="social-media">verander social media</label>
		<label for="social-media 1">Social media item 1</label>
		<input type="text">
		<input type="text" name="social-media-url" placeholder="Url:">
		<label for="social-media 2">Social media item 2</label>
		<button class="button button--left button--red">Upload</button>
		<button class="button button--right button--red">Verwijder</button>
		<input type="text" name="social-media-url" placeholder="Url:">
		<input type="submit" value="Verstuur">
	</form>
</div> -->
<!-- Input scherm voor de CMS items -->
<div class="container__admin">
	<h1>CMS ITEMS</h1>
	<form action="../../php/send_content.php" method="post" enctype="multipart/form-data">
		
		<?php
			if ($info['title'] != '')
			{
				?>
				<div class="admin__title">
					<label for="title">Titel toevoegen</label>
					<input type="text" name="title" placeholder="<?php echo $info['title']; ?>">
					<input type="text" name="title_color" placeholder="Red">
					<a href="">Contentblok verwijderen</a>
				</div>
				<?php
			}
			if ($info['subtitle'] != '')
			{
				?>
				<div class="admin__subtitle">
					<label for="subtitle">Subtitel toevoegen</label>
					<input type="text" name="subtitle" placeholder="<?php echo $info['subtitle']; ?>">
					<input type="text" name="subtitle_color" placeholder="Red">
					<a href="">Contentblok verwijderen</a>
				</div>
				<?php
			}
			if ($info['content'] != '')
			{
				?>
				<div class="admin__content">
					<label for="content">Content Toevoegen</label>
					<input type="text" name="content" placeholder="<?php echo $info['content']; ?>">
					<a href="">Contentblok verwijderen</a>
				</div>
				<?php
			}
			if ($info['background_color'] != '')
			{
				?>
				<div class="admin__background">
					<label for="background">Verander achtergrond</label>
					<input type="file" name="image">
					<input type="text" name="background_color" placeholder="<?php echo $info['background_color']; ?>">
					<a href="">Verwijder</a>
				</div>
				<?php
			}
			if ($info['button_text'] != '')
			{
				?>
				<div class="admin__button">
					<label for="button">Verander button</label>
					<input type="text" name="button_text" placeholder="<?php echo $info['button_text']; ?>">
					<input type="text" name="button_link" placeholder="<?php echo $info['button_link']; ?>">
					<input type="text" name="button_align" placeholder="<?php echo $info['button_align']; ?>">
					<a href="">Contentblok verwijderen</a>
				</div>
				<?php
			}
		?>
		<input type="submit" value="Verstuur">
	</form>
</div>