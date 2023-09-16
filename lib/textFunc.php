<?php
    function displayText($lineNum){
        //$path='../data/data.txt';
        //$content=file_get_contents($path);
        //echo $content;
        $lines = file('../data/data.txt');
        $line_number = $lineNum;
        echo $lines[$line_number - 1];
    }
    
?>
