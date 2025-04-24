<?php

/*
session_start(); // Start the session
$_SESSION["username"] = "JohnDoe"; // Set a session variable

// Note: No matter that the session variable is set in this file, it will be available in all files that have session_start() at the beginning of the file. This is because the session data is stored on the server and is accessible across different pages as long as the session is active.

// unset($_SESSION["username"]); // Unset the session variable
// session_unset(); // Unset all session variables
// session_destroy(); // Destroy the session and all session variables

// Note: It is important to note that session_destroy() does not unset the $_SESSION variable. It only destroys the session data on the server. The $_SESSION variable will still exist on the page it started, but it will be empty to other pages. To unset the $_SESSION variable regardless of page, you can use unset($_SESSION) or session_unset().
*/

require_once 'config.php'; // Session with security settings

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo "<h3>Session started</h3>";
    echo "<p>Username: " . $_SESSION["username"] . "</p>"; // Access the session variable
    ?>
</body>
</html>