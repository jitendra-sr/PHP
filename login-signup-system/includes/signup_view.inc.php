<?php

declare(strict_types=1);

function signup_inputs(): void
{
    if(isset($_SESSION['signup_data']['username']) && !isset($_SESSION['errors_signup']['username_taken'])) {
        // If the username is already taken, we don't want to pre-fill it
        echo '<input type="text" name="username" value="' . $_SESSION["signup_data"]["username"] . '" placeholder="Username">';
    }
    else echo '<input type="text" name="username" placeholder="Username">';

    if(isset($_SESSION['signup_data']['email']) && !isset($_SESSION['errors_signup']['email_used']) && !isset($_SESSION['errors_signup']['invalid_email'])) {
        // If the email is already registered or invalid, we don't want to pre-fill it
        echo '<input type="email" name="email" value="' . $_SESSION["signup_data"]["email"] . '" placeholder="Email">';
    }
    else echo '<input type="email" name="email" placeholder="Email">';

    echo '<input type="password" name="pwd" placeholder="Password">';

    if(isset($_SESSION['signup_data'])){
        unset($_SESSION['signup_data']);
    }
}

function check_signup_errors(): void
{
    if (isset($_SESSION['errors_signup'])) {
        $errors= $_SESSION['errors_signup'];

        foreach ($errors as $error) {
            echo "<p style='color: red;'>$error</p>";
        }

        unset($_SESSION['errors_signup']);
    }
    else if (isset($_GET['signup']) && $_GET['signup'] == 'success') {
        echo "<p style='color: green;'>Signup successful</p>";
    }

}