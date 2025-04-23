declare(strict_types=1); // Enforce strict types for better error handling
<?php
    function add($a, $b) {
        return $a + $b;
    }
    $result = add(5, 10);
    

    function add1($a, $b=10) {
        return $a + $b;
    }
    add1(5);


    function add2(string $a) { // strict type like int, float, array, etc.
        return $a . "Hello";
    }
    add2("World"); 


    $var = 10;
    function add3(&$a, $b) {
        global $var; // Use global variable inside function
        return $a + $b + $var;
        // return $GLOBALS['var'] + $a + $b; // Use global variable inside function
    }
    

    function add4() {
        static $var = 0; // Static variable retains its value between function calls
        $var++;
        return $var;
    }


    class MyClass {
        public $var = 10; // Instance variable
        public static function myStaticMethod() {
            return "Hello from static method!";
        }
    }
    MyClass::myStaticMethod(); // Call static method without instantiating the class
    $obj = new MyClass();
    echo $obj->var;

    define("PI",3.14); // define constant
    function myFunction() {
        echo PI; // 3.14
    }


?>