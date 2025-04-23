<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
        
    $userSearch = ($_POST["usersearch"]);
    try {
        require_once 'dbs.inc.php';
        $query = "SELECT username, comment_text, created_at FROM comments WHERE username = ?";
        $stmt = $pdo->prepare($query);
        $stmt->execute([$userSearch]);
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC); // Fetch all results as an associative array
        // var_dump($result); // Display the results in a readable format  

        $pdo = null;
        $stmt = null;
    } catch (PDOException $e) {
        die("Error: " . $e->getMessage());
    } 
    
}
else {
    header("Location: ../index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Search Results</h3>
    <?php
    if(!empty($result)) {
        foreach ($result as $row) {
            echo "<p>Username: " . htmlspecialchars($row['username']) . "</p>";
            echo "<p>Comment: " . htmlspecialchars($row['comment_text']) . "</p>";  
            echo "<p>Created At: " . htmlspecialchars($row['created_at']) . "</p>";
            echo "<hr>";
        }
    } else {
        echo "<p>No results found for user: " . htmlspecialchars($userSearch) . "</p>";
    }
    ?>
    <hr>
</body>
</html>