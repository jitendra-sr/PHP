<?php
/*
if(isset($_POST["submit"])) {
    // We are using a POST superglobal variable to check if the form was submitted
    // To use the $_POST superglobal variable, we need to set the name attribute of the submit button in the form to "submit"
}
*/

// Best practice: Use the $_SERVER superglobal variable to check if the form was submitted
if($_SERVER["REQUEST_METHOD"] == "POST") {
        
    $firstname = htmlspecialchars($_POST["firstname"]);
    $lastname = htmlspecialchars($_POST["lastname"]);
    $mail = htmlspecialchars($_POST["mail"]);
    $pwd = htmlspecialchars($_POST["pwd"]);
    $favouritepet = htmlspecialchars($_POST["favouritepet"]);
    // Sanitize the input data to prevent XSS attacks
    // htmlspecialchars() converts special characters to HTML entities
    // e.g., < becomes &lt;, > becomes &gt;, & becomes &amp;, etc.
    // This prevents the browser from interpreting them as HTML tags or scripts

    // We can also use htmlentities() function to convert special characters to HTML entities
    // htmlentities() is more comprehensive than htmlspecialchars() as it converts all applicable characters to HTML entities

    // If the input data is number, float, mail, url, etc. we can use filter_input() to sanitize the input data
    // Eg: filter_input(INPUT_POST, "num1", FILTER_SANITIZE_NUMBER_FlOAT); will remove all characters except digits, decimal point and minus sign.

    if(empty($firstname) || empty($lastname) || empty($mail) || empty($pwd) || $favouritepet == "none") {
        // Check if the form fields are empty or if the favourite pet is not selected
        // If any of the fields are empty, redirect to the index.php page

        // is_numeric(), is_string(), is_bool(), is_array(), is_object(), is_null() functions can be used to check the type of the variable.

        // required attribute in the form fields are not enough to prevent empty fields as the user can disable JavaScript in the browser or use a tool like Postman to send a POST request without the required fields or change the html code in the browser

        header("Location: ../index.php");
        exit();
    }

    if(!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
        echo "<h1>Invalid Email Format!</h1>";
        exit();
    }
    if(strlen($pwd) < 8) {
        echo "<h1>Password must be at least 8 characters long!</h1>";
        exit();
    }
    if (
    !preg_match("/[A-Z]/", $pwd) ||        // Uppercase
    !preg_match("/[a-z]/", $pwd) ||        // Lowercase
    !preg_match("/[0-9]/", $pwd) ||        // Digit
    !preg_match("/[\W_]/", $pwd)           // Special character
    ) {
        echo "<h1>Weak Password: Must include uppercase, lowercase, digit, and special character.</h1>";
        exit();
    }
    
    echo "<h1>Form Submitted Successfully!</h1>";
    echo "<p>Firstname: $firstname</p>";
    echo "<p>Lastname: $lastname</p>";
    echo "<p>Favourite Pet: $favouritepet</p>";

    // header("Location: ../index.php");
    // Redirect to the index.php page after form submission
    // header() function sends a raw HTTP header to the client

}
else {
    // If the form is not submitted, redirect to the index.php page
    header("Location: ../index.php");
    exit();
    // exit() function terminates the current script and prevents further execution of the code
}