<?php

// php.ini settings for session security
ini_set('session.use_only_cookies', 1); // Prevent session hijacking by using only cookies for session ID
ini_set('session.use_strict_mode', 1); // Prevent session fixation by using strict mode for session IDs

session_set_cookie_params([
    'lifetime' => 1800, // Cookie expires after 30 minutes
    'path' => '/', // Cookie is available within the entire domain
    'domain' => $_SERVER['HTTP_HOST'], // Cookie is available for the current domain
    'secure' => true, // Cookie is only sent over secure HTTPS connections
    'httponly' => true, // Cookie is not accessible via JavaScript (helps prevent XSS attacks)
]);
session_start(); // Start the session
$_SESSION["username"] = "JohnDoe";

if(!isset($_SESSION['last_regeneration'])) {
    session_regenerate_id(true); // Regenerate the session ID for the first time
    $_SESSION['last_regeneration'] = time(); // Set the last regeneration time
} else {
    if(time() - $_SESSION['last_regeneration'] >= 1800) { // If more than 30 minutes have passed since the last regeneration
        session_regenerate_id(true); // Regenerate the session ID
        $_SESSION['last_regeneration'] = time(); // Update the last regeneration time
    }
}