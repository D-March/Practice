<?php 

    // FILESYSTEM - PART 1

    // $quotes = readfile('readme.txt');
    // echo $quotes;

    $file = 'readme.txt';

    if(file_exists($file)){

        // // read file
        // echo readfile($file) . '<br />';

        // // copy file (file name, file to save to)
        // copy($file, 'quotes.txt');

        // // absolute path
        // echo realpath($file) . '<br />';

        // //file size
        // echo filesize($file) . '<br />';

        // //rename file
        // rename($file, 'test.txt');

    } else {
        echo 'file does not exist.';
    }

    // make directory
    mkdir('quotes');

?>