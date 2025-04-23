<?php
// Magic Constants in PHP
// Magic constants are predefined constants in PHP that change based on their location in the code. They are useful for debugging and providing information about the file, line number, and function name.

    echo __FILE__; // full path of the file // C:/xampp/htdocs/Practise/index.php
    echo "<br>";
    echo __DIR__; // directory of the file // C:/xampp/htdocs/Practise
    echo "<br>";
    echo __LINE__; // line number of the file // 1 (if file is included)
    echo "<br>";
    echo __FUNCTION__; // function name // index.php (if function is defined)
    echo "<br>";
    echo __CLASS__; // class name // index.php (if class is defined)
    echo "<br>";
    echo __METHOD__; // method name // index.php (if method is defined)
    echo "<br>";
    echo __NAMESPACE__; // namespace name // index.php (if namespace is defined)
    echo "<br>";
    echo __TRAIT__; // trait name // index.php (if trait is defined)
    echo "<br>";
    echo __COMPILER_HALT_OFFSET__; // compiler halt offset // 0 (if compiler halt is used)
    echo "<br>";
?>