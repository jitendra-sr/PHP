<?php

if($_SERVER['REQUEST_METHOD'] == 'POST') {


    $username = $_POST['username'];
    $pwd = $_POST['pwd'];

    try {
        require_once 'dbh.inc.php';
        require_once 'login_model.inc.php';
        require_once 'login_contr.inc.php';

        $errors = [];
        if (is_input_empty($username, $pwd)) {
            $errors["empty_input"] = "Fill in all fields";
        }

        $result = get_user($pdo, $username);

        if (is_username_wrong($result)) {
        $errors["login_incorrect"] = "Incorrect login info";
        }
        if (!is_username_wrong($result) && is_password_wrong($pwd, $result['pwd'])) {
            $errors["login_incorrect"] = "Incorrect login info";
        }
        
        require_once 'config_session.inc.php';
        if($errors) {
            $_SESSION['errors_login'] = $errors;
            header("location: ../index.php");
            die();
        }

        // The reason we are updating the session ID is to prevent session fixation attacks as soon as the user logs in and not waiting for the session to update its id automatically.
        $newSessionId = session_create_id();
        $sessionId = $newSessionId . "_" . $result['id'];
        session_id($sessionId); // Set the new ID to session

        $_SESSION['user_id'] = $result['id'];
        $_SESSION['username'] = htmlspecialchars($result['username']);
        $_SESSION['last_regeneration'] = time(); // As we have just updated the session ID.

        header("location: ../index.php?login=success");
        $pdo = null;
        $stmt = null;
        die();

    } catch(PDOException $e) {
        die("Query failed: " . $e->getMessage());
    }

} else {
    header("location: ../index.php");
    die();
}