<?php

while (1) {
    
    $card = [];
    $input1 = explode(" ", trim(fgets(STDIN)));

    if ($input1[0] == 0 && $input1[1] == 0) exit;

    $alice = array_values(array_diff(array_unique(explode(" ", trim(fgets(STDIN)))), array("",0,null)));
    $betty = array_values(array_diff(array_unique(explode(" ", trim(fgets(STDIN)))), array("",0,null)));

    $cards = $betty;

    if (count($alice) < count($betty)) {
        $cards = $alice;
        $alice = $betty;
    }

    for ($i=0; $i < count($cards); $i++) {
        for ($j=0; $j < count($alice); $j++) {
            echo $cards[$i] . PHP_EOL;
            echo $alice[$j] . PHP_EOL;
            echo "------------\n";
            if ($cards[$i] == $alice[$j]) {
                echo "Passei por aqui\n";
                break;
            } else if ($j == count($cards) - 1) {
                $_card = $cards[$i];
                echo $_card . "(Eu aquiii)\n";
                array_push($card, $_card);
                break;
            }
        }
    }
    print_r($card);


    echo count($card) . PHP_EOL;
}