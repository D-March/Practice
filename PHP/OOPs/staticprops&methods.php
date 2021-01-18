<?php 

    class Weather {

        private static $tempConditions = ['cold', 'mild', 'warm'];

        public static function celsiusToFarenheit($c){
            return $c * 9 / 5 + 32;

        }

        public static function detemineTempCondition($f){
            if($f < 40){
                return self::$tempConditions[0];
            } else if($f < 70){
                return self::$tempConditions[1];
            } else {
                return self::$tempConditions[2];
            }

        }

    }

    // print_r(Weather::$tempConditions);
    // echo Weather::celsiusToFarenheit(20);
    echo Weather::detemineTempCondition(50);

?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Static Properties</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>

        

    </body>
</html>