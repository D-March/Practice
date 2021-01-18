<?php

    //VARIABLE SCOPE

    //LOCAL VARS
    function myFunc(){
        $price = 10;
        echo $price;
    }
    

    function myFuncTwo($age){
        echo $age;
    }

    //GLOBAL VARIABLES
    
    $name = 'mario';

    // function sayHello(){
    //     global $name; // use global var
    //     $name = 'yoshi'; // changes value globally
    //     echo "hello $name";
    // }
    // sayHello();
    // echo $name;   

    function sayBye(&$name){ // using & uses it globally
        $name = 'wario'; //changes value locally
        echo "bye $name";
    }

    sayBye($name);
    echo $name;


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Tuts</title>
</head>
<body>
    


</body>
</html>