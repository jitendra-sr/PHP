<?php

ini_set('session.use_only_cookies', 1); // Prevent session hijacking by using only cookies for session ID
ini_set('session.use_strict_mode', 1); // Prevent session fixation by using strict mode for session IDs

session_set_cookie_params([
    'lifetime' => 1800, // Cookie expires after 30 minutes
    'path' => '/', // Cookie is available within the entire domain
    'domain' => $_SERVER['HTTP_HOST'], // Cookie is available for the current domain
    'secure' => true, // Cookie is only sent over secure HTTPS connections
    'httponly' => true, // Cookie is not accessible via JavaScript (helps prevent XSS attacks)
]);
session_start();

if(isset($_SESSION['user_id'])) {
    if(!isset($_SESSION['last_regeneration'])) {
        bind_userId_with_newSessionId();
        $_SESSION['last_regeneration'] = time();
    } else {
        if(time() - $_SESSION['last_regeneration'] >= 1800) {
            bind_userId_with_newSessionId();
            $_SESSION['last_regeneration'] = time();
        }
    }
}
else{
    if(!isset($_SESSION['last_regeneration'])) {
        session_regenerate_id(true);
        $_SESSION['last_regeneration'] = time();
    } else {
        if(time() - $_SESSION['last_regeneration'] >= 1800) {
            session_regenerate_id(true);
            $_SESSION['last_regeneration'] = time();
        }
    }
}

function bind_userId_with_newSessionId(): void {
    $userId = $_SESSION['user_id'];
    $newSessionId = session_create_id();
    $sessionId = $newSessionId . "_" . $userId;
    session_id($sessionId); // Set the new ID to session
}
