<?php require '/assets/php/fetch_content_one.php'; ?>
<!-- Input scherm voor de CMS items -->
<div class="container__admin">
	<h1>CMS ITEMS</h1>
	<form action="/assets/php/send_content.php" method="post" enctype="multipart/form-data">
		
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
					<a href="" class="admin__subtitle--delete">Contentblok verwijderen</a>
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
				<div class="admin__background" style="background-image: <?php echo $info['background_image']; ?> height: 300px; width: 2000px; ">
					<label for="background">Verander achtergrond</label>
					<input type="file" name="image">
					<input type="text" name="background_color" placeholder="<?php echo $info['background_color']; ?>">
					<a href="">Contentblok verwijderen</a>
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
					<a href="../../php/update_content.php">Contentblok verwijderen</a>
				</div>
				<?php
			}
		?>
		<div class="admin__submit">
			<input type="submit" value="Bijwerken">
		</div>
	</form>
</div>
<script class="cssdeck" src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
<script src="assets/js/app/components/cms.js"></script>