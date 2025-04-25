<?php

declare(strict_types=1);

function output_data(){
    if (isset($_SESSION['user_id'])) {
        echo "<p style='color: green;'>Welcome, " . htmlspecialchars($_SESSION['username']) . "</p>";
    } else {
        echo "<p style='color: red;'>You are not logged in</p>";
    }
}

function check_login_errors(): void
{
    if (isset($_SESSION['errors_login'])) {
        $errors= $_SESSION['errors_login'];

        foreach ($errors as $error) {
            echo "<p style='color: red;'>$error</p>";
        }

        unset($_SESSION['errors_login']);
    }
    else if (isset($_GET['login']) && $_GET['login'] == 'success') {
        echo "<p style='color: green;'>Login successful</p>";
    }

}