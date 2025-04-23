<?php
    $a="jitu";
    $b="singh";
    // $c=$a+$b; // This will output a warning because you cannot add strings in PHP
    $c=$a." ".$b; // This will concatenate the strings with a space in between
    echo $c; echo "<br>";

    $num1=10;
    $num2=2;
    echo $num1**$num2; echo "<br>";

    $inTwo=2;
    $stTwo="2";
    echo $inTwo===$stTwo; // This will output false because they are of different types  
    // $inTwo!=$stTwo;  is equal to  $inTwo<>$stTwo;

