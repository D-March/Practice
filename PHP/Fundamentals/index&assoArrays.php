<?php

    //INDEXED ARRAYS
    $peopleOne = ['Bob', 'Barry', 'Leo'];
    // echo $peopleOne[0];

    $peopleTwo = array('Gary', 'Billy', 'Frank');
    // echo $peopleTwo[1];

    $ages = [20, 30, 40, 50];
    // print_r($ages); //print readable

    $ages[1] = 25;
    // print_r($ages);
    
    $ages[] = 60; //Add to array
    // print_r($ages);

    array_push($ages, 70);

    // echo count($ages);

    $peopleThree = array_merge($peopleOne, $peopleTwo);
    // print_r($peopleThree);

    //ASSOCIATIVE ARRAYS - Key & Value Pairs

    $ninjasOne = ['Shaun'=>'Black', 'Mario'=>'Orange', 'Luigi'=>'Brown'];
    //echo $ninjasOne['Mario'];
    // print_r($ninjasOne);

    $ninjasTwo = array('Bowser'=>'Green', 'Peach'=>'Yellow');
    // print_r($ninjasTwo);

    $ninjasTwo['Toad'] = 'Pink';
    // print_r($ninjasTwo);

    $ninjasTwo['Peach'] = 'Pink';
    // print_r($ninjasTwo);

    // echo count($ninjasOne);

    $ninjasThree = array_merge($ninjasOne, $ninjasTwo);
    print_r($ninjasThree);

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