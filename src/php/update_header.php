<?php
require 'config/config.php';
require 'config/dbconnect.php';

$title = $_POST['title'];
$title_color = $_POST['title_color'];
$subtitle = $_POST['subtitle'];
$subtitle_color = $_POST['subtitle_color'];

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
	$destination = '../assets/img/'.$_FILES['image']['name'];

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
			$sql = ("UPDATE header SET title = '$title', title_color = '$title_color, subtitle = '$subtitle', subtitle_color = '$subtitle_color', background_image = '$destination");
		    $results = $mysqli->query($sql);
		    echo "Met succes geupload";
		    echo "<a href='../twig/pages/admin.twig'>Ga terug</a>";
	    }
	}
	//What happens if there is a problem moving the image
		else
	{
	  echo 'Problemen met het uploaden van: '.$filename."<br>";
	  echo "<a href='../twig/pages/cms-item-1.twig'>Ga terug</a>";
	}
}
//If no image is found
else
{
	//Executing the query
	$result = $mysqli->query("UPDATE header SET title = '$title', title_color = '$title_color, subtitle = '$subtitle', subtitle_color = '$subtitle_color'");
	?>
	<div class="succes">
		<p>Het stuk is succesvol toegevoegd</p>
		<a href="../twig/pages/admin.twig">Ga terug</a>
	</div>
	<?php
}
?>