<?php
require_once 'includes/config_session.inc.php';
require_once 'includes/signup_view.inc.php';
require_once 'includes/login_view.inc.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <hr>
    <h3>
        <?php
        output_data(); //present in login_view.inc.php
        ?>
        <a href="index.php">Refresh</a>
    </h3>
    <hr>

    <?php if (!isset($_SESSION['user_id'])) { ?>
    <h3>Login</h3>
    <form action="includes/login.inc.php" method="post">
        <input type="text" name="username" placeholder="Username">
        <input type="password" name="pwd" placeholder="Password">
        <button type="submit">Login</button>
    </form>
    <?php } ?>

    <?php
    check_login_errors();
    ?>
    <hr>
    
    <?php if (!isset($_SESSION['user_id'])) { ?>
    <h3>Signup</h3>
    <form action="includes/signup.inc.php" method="post">
        <?php
        signup_inputs();
        ?>
        <button type="submit">Signup</button>
    </form>
    <?php } ?>
    
    <?php
    check_signup_errors();
    ?>
    <hr>
    
    
    <?php if (isset($_SESSION['user_id'])) { ?>
        <h3>Logout</h3>
        <form action="includes/logout.inc.php" method="post">
            <button type="submit">Logout</button>
        </form>
        <hr>
    <?php } ?>


</body>
</html>