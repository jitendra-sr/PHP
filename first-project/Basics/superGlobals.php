<!-- Super globals variables -->
    <?php
    echo $_SERVER["DOCUMENT_ROOT"]; // root directory of the server // C:/xampp/htdocs (default)
    echo "<br>";
    echo $_SERVER["PHP_SELF"]; // current file name // /Practise/index.php
    echo "<br>";
    echo $_SERVER["SERVER_NAME"]; // current file name // localhost
    echo "<br>";
    echo $_SERVER["REQUEST_METHOD"]; // current request method // GET, POST, PUT, DELETE
    echo "<br>";
    echo $_GET["name"]; // get the data from the url // http://localhost/Practise/index.php?name=Jitendra
    echo "<br>";
    echo $_POST["name"]; // get the data from the form // http://localhost/Practise/index.php (form method is post)
    echo "<br>";
    echo $_REQUEST["name"]; // get the data from the url and form // GET, POST and COOKIE
    echo "<br>";
    echo $_SESSION["name"]; // get the data from the session // http://localhost/Practise/index.php (session is started)
    echo "<br>";
    echo $_COOKIE["name"]; // get the data from the cookie // http://localhost/Practise/index.php (cookie is set)
    echo "<br>";
    echo $_FILES["name"]; // get the data from the file // http://localhost/Practise/index.php (file is uploaded)
    echo "<br>";
    echo $_ENV["name"]; // get the data from the environment // http://localhost/Practise/index.php (environment variable is set)
    echo "<br>";
    echo $_GLOBALS["name"]; // get the data from the global variable // http://localhost/Practise/index.php (global variable is set)
    echo "<br>";

?>