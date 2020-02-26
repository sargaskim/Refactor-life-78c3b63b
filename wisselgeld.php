<?php

$input = round($argv[1] / 0.05) * 0.05 + 0.00000001;

$monnies = [
    50,
    20,
    10,
    5,
    2,
    1,
    0.5,
    0.2,
    0.1,
    0.05
];

calculate($monnies, $input);

function calculate($monnies, $input) {

    foreach($monnies as $coin) {
        // echo($input . PHP_EOL);
        if (floor($input / $coin) > 0){
            $times = floor($input / $coin);
            echo "$times x €$coin".PHP_EOL;
            $input -= $times * $coin;
        }
    }
    // echo($input);


}