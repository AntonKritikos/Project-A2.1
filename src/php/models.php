<?php
public function login()
{
	if ($_SERVER['REQUEST_METHOD'] === 'POST')
	{
	    $username = $mysqli->real_escape_string($_POST['username']);
	    $password = $mysqli->real_escape_string($_POST['password']);

	    $result = $mysqli->query("SELECT id, password FROM users WHERE username = '" . $username . "'");

	    $row = $result->fetch_row();
	    $hash =  $row[1];
	    $verify = password_verify($password, $hash);

	    if ($verify == 1)
	    {
	        $result = $mysqli->query("SELECT id FROM users WHERE username    = '" . $username . "' AND password = '" . $row[1] . "'");

	        $row = $result->fetch_assoc();

	        $count = $result->num_rows;
	        if ($count == 1)
	        {
	            $_SESSION['id'] = $row['id'];
	            ?>
	            <div class="content">
	                <p>U bent succesvol ingelogd!</p>
	                <a href='?action=admin'>Ga verder</a>
	            </div>
	            <?php
	        }
	        else
	        {
	            ?>
	            <div class="content">
	                <p>Uw gebruikersnaam en/of wachtwoord is incorrect!</p>
	                <a href='?action=login'>Ga terug</a>
	            </div>
	            <?php
	        }
	    }
	}
}

public function logout()
{
	if(isset($_SESSION['id']))
	{
		session_destroy();
	    unset($_SESSION['id']);
	}
}

public function 
?>