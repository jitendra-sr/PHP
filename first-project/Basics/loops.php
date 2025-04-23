<?php
// for loop
for ($i = 0; $i < 10; $i++) {
    echo $i . "<br>";
}
// while loop
$i = 0;
while ($i < 10) {
    echo $i . "<br>";
    $i++;
}
// do while loop
$i = 0;
do {
    echo $i . "<br>";
    $i++;
} while ($i < 10);
// foreach loop
$array = array(1, 2, 3, 4, 5);
foreach ($array as $value) {
    echo $value . "<br>";
}
// foreach loop with keys
$array = array("a" => 1, "b" => 2, "c" => 3);
foreach ($array as $key => $value) {
    echo $key . " => " . $value . "<br>";
}

