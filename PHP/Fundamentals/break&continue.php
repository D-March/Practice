<?php

    // CONDITIONAL STATEMENTS
        // $price = 20;

        // if ($price < 10){
        //     echo 'the condition is met';
        // } elseif ($price < 30){
        //     echo 'elseif condition met';
        // } else {
        //     echo 'condition is not met';
        // }

    $products = [
        ['name' => 'shiny star', 'price' => 20],
        ['name' => 'green shell', 'price' => 10],
        ['name' => 'red shell', 'price' => 15],
        ['name' => 'gold coin', 'price' => 5],
        ['name' => 'lightning bolt', 'price' => 40],
        ['name' => 'banana skin', 'price' => 2]
    ];

    foreach($products as $product){
        if($product['name'] === 'lightning bolt'){
            break; //breaks at the condition
        }

        if($product['price'] > 15){
            continue; //continues until condition met then outputs echo
        }

        echo $product['name'] . '<br />';
    }

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