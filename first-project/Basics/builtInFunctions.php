<!-- Arrays -->
<?php 
    $arr = [1,2,3,4,5];
    $arr[] = 6; // Add 6 to the end of the array.
    array_push($arr, 7); // Add 7 to the end of the array.
    array_unshift($arr, 0); // Add 0 to the beginning of the array.
    array_splice($arr, 3, 0, [8, 9]); // Add 8 at index 3 of the array.
    
    unset($arr[0]); // Remove the first element of the array not delete it.
    array_pop($arr); // Remove the last element of the array, return it.
    // use array_values($arr) to reindex the array.

    array_shift($arr); // Remove the first element of the array, return it and reindex the array.
    array_splice($arr, 0, 2); // Remove the first two elements of the array and return them and reindex the array.
    // array_splice($arr, 0, 2, [8,9]); // Remove the first two elements of the array and add 8 and 9 in their place and return the removed elements.

    count($arr); // Count the number of elements in the array.
    sort($arr); // Sort the array in ascending order.
    rsort($arr); // Sort the array in descending order.
    shuffle($arr); // Shuffle the array.
    array_reverse($arr); // Reverse the array.
    array_unique($arr); // Remove duplicate elements from the array.
    array_search(1, $arr); // Search for 1 in the array and return its index.
    array_key_exists(0, $arr); // Check if 0 is a key in the array.

    is_array($arr); // Check if $arr is an array.
    array_keys($arr); // Get the keys of the array. // second param return the keys of the array with the values.
    array_values($arr); // Get the values of the array. // second param return the values of the array with keys.
    array_merge($arr, [8,9]); // Merge two arrays.
    array_slice($arr, 0, 2); // Get the first two elements of the array.



    // Associative array
    $arr3 = [
        "name" => "Jitendra",
        "age" => 23,
        "isStudent" => true,
        "marks" => [1,2,3,4,5]
    ];
    echo $arr3["name"]; // Jitendra
    print_r($arr3); // Print the array in a readable format.
    var_dump($arr3); // Print the array in a readable format with data types.

    // Multidimensional array
    $arr4 = [
        "Jitendra",
        23,
        true,
        [
            "math" => [1,2,3,4,5],
            "science" => [6,7,8,9,10]
        ],
        array(
            "name" => "Jitendra",
            "age" => 23,
            "isStudent" => true,
            "marks" => [1,2,3,4,5]
        )
    ];
?>


<!-- Strings -->
<?php
    $str = "Hello World";
    $str2 = 'Hello World';
    $str3 = "Hello $str"; // Hello Hello World
    $str5 = "Hello {$str}"; // Hello Hello World


    echo strlen($str); // 11
    echo str_word_count($str); // 2
    echo strrev($str); // dlroW olleH
    echo strpos($str, "World"); // 6
    echo str_replace("World", "Jitendra", $str); // Hello Jitendra

    echo strtoupper($str); // HELLO WORLD
    echo strtolower($str); // hello world   
    echo ucfirst($str); // Hello world // ucwords($str); // Hello World
    echo trim($str); // Hello World 

    echo substr($str, 0, 5); // Hello // We can also use substr($str, -5) to get the last 5 characters.
    echo explode(" ", $str); // ["Hello", "World"]
    echo implode(" ", $str); // Hello World // Array to string conversion

    echo str_split($str, 2); // ["He", "ll", "o ", "Wo", "rl", "d"]
    echo str_shuffle($str); // Random string

?>

<!-- Maths -->
<?php
    echo abs(-5); // 5
    echo ceil(4.3); // 5
    echo floor(4.3); // 4
    echo round(4.3); // 4 // echo round(4.6); // 5
    echo rand(1, 10); // Random number between 1 and 10
    echo sqrt(16); // 4
    echo pow(2, 3); // 8
    echo min(1, 2, 3, 4, 5); // 1
    echo max(1, 2, 3, 4, 5); // 5
    echo pi(); // 3.141592653589793
    echo sin(90); // 0.89399666360056
    echo deg2rad(180); // 3.1415926535898
    echo rad2deg(3.1415926535898); // 180
    echo log(10); // 2.30258509299405
    echo log10(100); // 2
    echo log2(8); // 3
    echo exp(2); // 7.38905609893065 // e^2
    
?>

<!-- Date and Time -->
<?php
    echo date("Y-m-d H:i:s"); // 2023-10-01 12:00:00
    echo date("d/m/Y"); // 01/10/2023
    echo date("D"); // Sun // date("l"); // Sunday
    echo date("M"); // Oct // date("F"); // October // 
    
    echo date("h:i:s A"); // 12:00:00 PM

    echo time(); // 1696156800 // Current timestamp
    echo strtotime("2023-10-01"); // 1696118400 // Timestamp of a specific date

    $date = new DateTime("2023-10-01");
    $date->modify("+1 day"); // can be done for +1 month, -1 year, week etc.
    echo $date->format("Y-m-d"); // 2023-10-02

    $date2 = new DateTime("2023-10-02");
    $diff = $date->diff($date2); // Difference between two dates
    echo $diff->days; // 1 // Difference in days // m, y, d, h, i, s
?>