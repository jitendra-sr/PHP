<!-- If-else  Conditionals-->
<?php
if(true) {
    echo "<h1>Hello, World!</h1>";
}
else {
    echo "<h1>Goodbye, World!</h1>";
}
?>

<?php if(true) {?>
    <h2>Hello, World!</h2>
<?php } ?>

<!-- Switch -->
<?php
$day = "Monday";
switch($day) {
    case "Monday":
        echo "Today is Monday!";
        break;
    case "Tuesday":
        echo "Today is Tuesday!";
        break;
    default:
        echo "Today is not Monday or Tuesday!";
}
?>

<!-- Match -->
<?php
$day = "Monday";
match($day) {
    // do strict type comparison
    "Monday" => print("Today is Monday!"),
    "Tuesday" => print("Today is Tuesday!"),
    default => print("Today is not Monday or Tuesday!")
};

$st=match($day) {
    "Monday", "Wed" => "Today is Monday or Wed!",
    "Tuesday" => "Today is Tuesday!",
    default => "Today is not Monday or Tuesday!",
};
echo $st;
?>

