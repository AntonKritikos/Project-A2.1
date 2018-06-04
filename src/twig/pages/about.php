<div class="container__about">
	<h1>ABOUT</h1>
	<form action="php/send_about.php" method="post">
		<div class="admin__title">
			<label for="title">Verander titel</label>
			<input type="text" name="title" placeholder="Leid de toekomst op">
			<input type="text" name="title_color" placeholder="Red">
			<a href="">Contentblok verwijderen</a>
		</div>
		<div class="admin__subtitle">
			<label for="subtitle">Verander subtitel</label>
			<input type="text" name="subtitle" placeholder="Leid de toekomst op">
			<input type="text" name="subtitle_color" placeholder="Red">
			<a href="">Contentblok verwijderen</a>
		</div>
		<div class="admin__content">
			<label for="content">Verander content</label>
			<input type="text" name="content" placeholder="Leid de toekomst op!">
			<a href="">Contentblok verwijderen</a>
		</div>
		<div class="admin__submit">
			<input type="submit" value="Bijwerken">
		</div>
	</form>
</div>