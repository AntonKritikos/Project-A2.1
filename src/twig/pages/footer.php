<div class="container__footer">
	<h1>FOOTER</h1>
	<form action="php/send_header.php" method="post"  enctype="multipart/form-data">
		<div class="admin__title">
			<label for="title">Verander titel:</label>
			<input type="text" name="title" placeholder="Leid de toekomst op!">
			<input type="text" name="title_color" placeholder="Red">
			<a href="">Contentblok verwijderen</a>
		</div>
		<div class="admin__subtitle">
			<label for="subtitle">Verander subtitel:</label>
			<input type="text" name="subtitle" placeholder="Leid de toekomst op!">
			<input type="text" name="subtitle_color" placeholder="Red">
		</div>
		<div class="admin_social_media">
			<label for="social_media">Verander social media</label>
			Social Media item 1
			<input type="file" name="image">
			<input type="text" name="social_media" placeholder="<?php echo $info['background_color']; ?>">
			<a href="">Contentblok verwijderen</a>
		</div>
		<div class="admin__button">
			<label for="subtitle">Verander button</label>
			<input type="text" name="subtitle_text" placeholder="Inschrijven">
			<input type="text" name="subtitle_link" placeholder="Url">
			<a href="">Contentblok verwijderen</a>
		</div>
		<div class="admin__submit">
			<input type="submit" value="Bijwerken">
		</div>
	</form>
</div>