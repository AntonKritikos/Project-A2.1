<?php
require 'config/config.php';
require 'config/dbconnect.php';

$title = $mysqli->real_escape_string($_POST['title']);
$title_color = $mysqli->real_escape_string($_POST['title_color']);
$subtitle = $mysqli->real_escape_string($_POST['subtitle']);
$subtitle_color = $mysqli->real_escape_string($_POST['subtitle_color']);
$content = $mysqli->real_escape_string($_POST['content']);

$sql = ("INSERT INTO footer (title, title_color, subtitle, subtitle_color, content) VALUES ('$title', '$title_color', '$subtitle', '$subtitle_color', '$content'");
$result = $mysqli->query($sql);

if(isset($_FILES['image']))
	{
	    $errors     = array();
	    $maxsize    = 100000;
		$needheight = 800;
		$needwidth = 800;
		$file= $_FILES['image']['tmp_name'];
		$filename= $_FILES['image']['name'];
		$destination= 'assets/img/'.$_FILES['image']['name'];

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

		    if(count($errors) === 0)
		    {
				$sql = ("INSERT INTO footer (title, title_color, subtitle, subtitle_color, content, socialmedia_id) VALUES ('$title', '$title_color', '$subtitle', '$subtitle_color', '$content', '$social_media");
			    $results = $mysqli->query($sql);
			    echo "Met succes geupload";
			    echo "<a href='../twig/pages/admin.twig'>Ga terug</a>";
		    }
		}
		else
		{
		  echo 'Problemen met het uploaden van: '.$filename."<br>";
		  echo "<a href='assets/cms-item-1.twig'>Ga terug</a>";
		}
	}
	else
	{
		$result = $mysqli->query("INSERT INTO layout (title, title_color, subtitle, subtitle_color, content, background_color, button_text, button_link, button_align) VALUES ('$title', '$title_color', '$subtitle', '$subtitle_color', '$content', '$background_color', '$button_text', '$button_link', '$button_align'");

		?>
		<div>
			<p>Het stuk is succesvol toegevoegd</p>
			<a href="assets/admin.html">Ga terug</a>
		</div>
		<?php
	}
?>
<div>
	<a href="assets/admin.html">Ga terug</a>
</div>
?>