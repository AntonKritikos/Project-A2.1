<?php
	$title = $mysqli->real_escape_string($_POST['title']);
	$title_color = $mysqli->real_escape_string($_POST['title_color']);
	$subtitle = $mysqli->real_escape_string($_POST['subtitle']);
	$subtitle_color = $mysqli->real_escape_string($_POST['subtitle_color']);
	$content = $mysqli->real_escape_string($_POST['content']);
	$background_color = $mysqli->real_escape_string($_POST['background_color']);
	$button_text = $mysqli->real_escape_string($_POST['button_text']);
	$button_link = $mysqli->real_escape_string($_POST['button_link']);
	$button_align = $mysqli->real_escape_string($_POST['button_align']);

	if(isset($_FILES['image']))
	{
	    $errors     = array();
	    $maxsize    = 1000;
		$needheight = 800;
		$needwidth = 800;
		$file= $_FILES['image']['tmp_name'];
		$filename= $_FILES['image']['name'];
		$destination= 'uploads/'.$_FILES['image']['name'];

		if(move_uploaded_file($file, $destination))
		{
			$image = getimagesize($destination);
			$actualwidth = $image[0];
			$actualheight = $image[1];
		    if(($_FILES['image']['size'] >= $maxsize) || ($_FILES["image"]["size"] == 0))
		    {
		        $errors[] = 'Het bestand is te groot. Hij mag niet meer dan 2MB in beslag nemen.';
		    }

			if($needwidth < $actualwidth || $needheight < $actualheight)
			{
				$errors[] = 'Verkeerde dimensies gebruikt. Het bestand mag maximaal 800 pixels hoog zijn en 800 pixels breed.';
			}

		    if(count($errors) === 0) {
				$sql = ("INSERT INTO layout (title, title_color, subtitle, subtitle_color, content, background_color, background_image, button_text, button_link, button_align) VALUES ('$title', '$title_color', '$subtitle', '$subtitle_color', '$content', '$background_color', '$destination', '$button_text', '$button_link', '$button_align'");
			    $results = $mysqli->query($sql);
			    echo "Met succes geupload";
			    echo "<a href='?action=account'>Ga terug</a>";
		    }
		}
		else
		{
		  echo 'Problemen met het uploaden van: '.$filename."<br>";
		  echo "<a href='?action=account'>Ga terug</a>";
		}
	}
	else
	{
		$result = $mysqli->query("INSERT INTO layout (title, title_color, subtitle, subtitle_color, content, background_color, button_text, button_link, button_align) VALUES ('$title', '$title_color', '$content', '$background_color', '$button_text', '$button_link', '$button_align'");

		?>
		<div class="succes">
			<p>Het stuk is succesvol toegevoegd</p>
		</div>
	}
?>