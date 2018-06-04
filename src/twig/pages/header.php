<div class="container__header">
	<h1>HEADER</h1>
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
		<div class="admin__background" style="background-image: <?php echo $info['background_image']; ?> height: 300px; width: 2000px; ">
			<label for="background">Verander achtergrond</label>
			<input type="file" name="image">
			<input type="text" name="background_color" placeholder="<?php echo $info['background_color']; ?>">
			<a href="">Contentblok verwijderen</a>
		</div>
	</form>
</div>