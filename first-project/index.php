<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hello World</h1>
    <hr>
    <?php
        echo "<h2>Basic Form with Validation</h2>";
        require_once 'form.php';
        echo "<hr>";
        echo "<h2>Form with Database Connectivity</h2>";
        require_once 'dbform.php';
        echo "<hr>";
        echo "<h2>Session and Security</h2>";
        require_once 'session.php';
        echo "<hr>";
    ?>
</body>
</html>