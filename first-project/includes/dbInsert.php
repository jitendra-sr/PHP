<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
        
    $username = ($_POST["username"]);
    $email = ($_POST["email"]);
    $pwd = ($_POST["pwd"]);
    // We dont need to sanitize the data here, because we are not using it in a query yet.
    // We will sanitize the data when we use it in a query or outputting it on browser.

    try {
        require_once 'dbs.inc.php'; // Include the database connection file
        $query = "INSERT INTO users (username, email, pwd) VALUES (?, ?, ?)";
        // $query = "INSERT INTO users (username, email, pwd) VALUES (:username, :email, :pwd)"; // Use named parameters for better readability

        $stmt = $pdo->prepare($query);

        // Bind parameters to the query
        // $stmt->bindParam(':username', $username);
        // $stmt->bindParam(':email', $email);  
        // $stmt->bindParam(':pwd', $pwd);
        // $stmt->execute(); // Execute the query
        
        $stmt->execute([$username, $email, $pwd]);
        header("Location: ../index.php");

        $pdo = null; // Close the database connection
        $stmt = null; // Close the statement
        die();
    } catch (PDOException $e) {
        die("Error: " . $e->getMessage());
    } 
    

}
else {
    header("Location: ../index.php");
    exit();
}