<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // This is a single-line comment
        # This is also a single-line comment
        /* this is a 
        multi-line comment */
    ?>

    
    <!-- Form -->
    <main>
        <form action="includes/formHandler.php" method="post">
            <!-- use <?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?> to handle the form inside the same file -->

            <label for="firstname">Firstname</label>
            <input id="firstname" type="text" name="firstname" placeholder="Firstname..." value="<?php echo isset($_POST['firstname']) ? htmlspecialchars($_POST['firstname']) : ''; ?>">
            <br>

            <label for="lastname">Lastname</label>
            <input id="lastname" type="text" name="lastname" placeholder="Lastname..." value="<?php echo isset($_POST['lastname']) ? htmlspecialchars($_POST['lastname']) : ''; ?>">
            <br>

            <label for="email">Email: </label>
            <input id="email" type="text" name="mail" value="<?php echo isset($_POST['mail']) ? htmlspecialchars($_POST['mail']) : ''; ?>">
            <br>

            <label for="favouritepet">Favourite Pet</label> 
            <select id="favouritepet" name="favouritepet">
                <option value="none">None</option> 
                <option value="dog">Dog</option>
                <option value="cat">Cat</option> 
                <option value="bird">Bird</option> 
            </select>
            <br>

            <label for="password">Password: </label> 
            <input type="password" name="pwd" id="password" value="<?php echo isset($_POST['pwd']) ? htmlspecialchars($_POST['pwd']) : ''; ?>">
            <br>
            
            <button type="submit">Submit</button> 
            <!-- <button type="submit" name="submit">Submit</button>  -->
        </form>
    </main>
    
</body>
</html>
