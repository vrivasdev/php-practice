<?php
// [1,1,0,0,1,1,1]
function getBiggest($numbers = []) {
    $count = 0;
    $biggest = 0;

    foreach ($numbers as $i => $number) {
        if ($number === 1) {
            $count++;
            if(($i+1) === count($numbers)){
                if($count>$biggest){
                    $biggest = $count;
                }
            }
        }
        else {
            if($count>$biggest){
                $biggest = $count;
            }
            $count = 0;
            continue;
        }
    }
    return $biggest;
}

$biggest = getBiggest([1, 1, 0, 0, 1, 1, 1]);
echo "Biggest number: $biggest";
