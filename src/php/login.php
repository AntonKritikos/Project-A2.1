<?php
require 'config/config.php';
require 'config/dbconnect.php';
//Check if there is a post request
if ($_SERVER['REQUEST_METHOD'] === 'POST')
{
    //Declaring the variables
    $username = $mysqli->real_escape_string($_POST['username']);
    $password = $mysqli->real_escape_string($_POST['password']);

    //Executing the query for the password
    $result = $mysqli->query("SELECT id, password FROM users WHERE username = '" . $username . "'");

    $row = $result->fetch_row();
    $hash =  $row[1];
    //Verify if the password is correct
    $verify = password_verify($password, $hash);
    //If the password is correct
    if ($verify == 1)
    {
        //Executing the query
        $result = $mysqli->query("SELECT id FROM users WHERE username = '" . $username . "' AND password = '" . $row[1] . "'");

        $row = $result->fetch_assoc();

        $count = $result->num_rows;
        //If an existing account is found
        if ($count == 1)
        {
            //Set the session
            $_SESSION['id'] = $row['id'];
            ?>
            <div class="content">
                <p>U bent succesvol ingelogd!</p>
                <a href='../pages/admin.twig'>Ga verder</a>
            </div>
            <?php
        }
        //If no account is found
        else
        {
            ?>
            <div class="content">
                <p>Uw gebruikersnaam en/of wachtwoord is incorrect!</p>
                <a href='..twig/pages/login.twig'>Ga terug</a>
            </div>
            <?php
        }
    }
}
?>