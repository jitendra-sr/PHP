<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Insert data into database -->
    <form action="includes/dbInsert.php" method="post">
        <label for="username">Firstname</label>
        <input id="username" type="text" name="username" placeholder="username...">
        <br>
        <label for="email">email</label>
        <input id="email" type="text" name="email" placeholder="email..." >
        <br>
        <label for="pwd">Password</label>
        <input id="pwd" type="password" name="pwd" placeholder="password..." >
        <br>
        <button type="submit">Submit</button> 
    </form>
    <hr>

    <!-- Search data in database -->
    <form action="includes/dbSearch.php" method="post">
        <label for="search">Search for user: </label>
        <input id="search" type="text" name="usersearch" placeholder="username...">
        <br>
        <button type="submit">Search</button> 
    </form>
    <hr>

</body>
</html>