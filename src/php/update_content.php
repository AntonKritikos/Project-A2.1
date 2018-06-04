<?php
require 'config/config.php';
require 'config/dbconnect.php';

//Declare variables
if (isset($_POST['title']))
{
	$title = $mysqli->real_escape_string($_POST['title']);
}
else
{
	$title = '';
}
if (isset($_POST['title_color']))
{
	$title_color = $mysqli->real_escape_string($_POST['title_color']);
}
else
{
	$title_color = '';
}
if (isset($_POST['subtitle']))
{
	$subtitle = $mysqli->real_escape_string($_POST['subtitle']);
}
else
{
	$subtitle = '';
}
if (isset($_POST['subtitle_color']))
{
	$subtitle_color = $mysqli->real_escape_string($_POST['subtitle_color']);
}
else
{
	$subtitle_color = '';
}
if (isset($_POST['content']))
{
	$content = $mysqli->real_escape_string($_POST['content']);
}
else
{
	$content = '';
}
if (isset($_POST['background_color']))
{
	$background_color = $mysqli->real_escape_string($_POST['background_color']);
}
else
{
	$background_color = '';
}
if (isset($_POST['button_text']))
{
	$button_text = $mysqli->real_escape_string($_POST['button_text']);
}
else
{
	$button_text = '';
}
if (isset($_POST['button_link']))
{
	$button_link = $mysqli->real_escape_string($_POST['button_link']);
}
else
{
	$button_link = '';
}
if (isset($_POST['button_align']))
{
	$button_align = $mysqli->real_escape_string($_POST['button_align']);
}
else
{
	$button_align = '';
}


$title_color = $mysqli->real_escape_string($_POST['title_color']);
$subtitle = $mysqli->real_escape_string($_POST['subtitle']);
$subtitle_color = $mysqli->real_escape_string($_POST['subtitle_color']);
$content = $mysqli->real_escape_string($_POST['content']);
$background_color = $mysqli->real_escape_string($_POST['background_color']);
$button_text = $mysqli->real_escape_string($_POST['button_text']);
$button_link = $mysqli->real_escape_string($_POST['button_link']);
$button_align = $mysqli->real_escape_string($_POST['button_align']);

//Check if an image is selected
if(isset($_FILES['image']))
{
	//Declare variables for the image
	$errors = array();
	$maxsize = 100000;
	$needheight = 800;
	$needwidth = 800;
	$file = $_FILES['image']['tmp_name'];
	$filename = $_FILES['image']['name'];
	$destination = '../static/img/'.$_FILES['image']['name'];

	//Moving the image
	if(move_uploaded_file($file, $destination))
	{
		//Declaring variables for the size and dimensions
		$image = getimagesize($destination);
		$actualwidth = $image[0];
		$actualheight = $image[1];
		//Check if the images size is correct
		if(($_FILES['image']['size'] >= $maxsize) || ($_FILES["image"]["size"] == 0))
		{
		    $errors[] = 'Het bestand is te groot. Hij mag niet meer dan 2MB in beslag nemen.';
		}

		   //Check if the dimensions of the image are allowed
		if($needwidth < $actualwidth || $needheight < $actualheight)
		{
			$errors[] = 'Verkeerde dimensies gebruikt. Het bestand mag maximaal 800 pixels hoog zijn en 800 pixels breed.';
		}

		//Check if no errors are found
		if(count($errors) === 0)
		{
			//Executing the query
			$sql = ("UPDATE layout SET title = '$title', title_color = '$title_color, subtitle = '$subtitle', subtitle_color = '$subtitle_color', content = '$content', background_color = '$background_color', button_text = '$button_text', button_link = '$button_link', button_align = 'button_align', background_image = '$destination");
		    $results = $mysqli->query($sql);
		    echo "Met succes geupload";
		    echo "<a href='../admin.html'>Ga terug</a>";
	    }
	}
	//What happens if there is a problem moving the image
		else
	{
	  echo 'Problemen met het uploaden van: '.$filename."<br>";
	  echo "<a href='../admin.html'>Ga terug</a>";
	}
}
//If no image is found
else
{
	//Executing the query
	$result = $mysqli->query("UPDATE layout SET title = '$title', title_color = '$title_color, subtitle = '$subtitle', subtitle_color = '$subtitle_color', content = '$content', background_color = '$background_color', button_text = '$button_text', button_link = '$button_link', button_align = 'button_align'");
	?>
	<div class="succes">
		<p>Het stuk is succesvol toegevoegd</p>
		<a href="../admin.html">Ga terug</a>
	</div>
	<?php
}
?>