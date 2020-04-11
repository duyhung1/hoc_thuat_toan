<?php

function formingMagicSquare($s) {
    // 2 7 6 2 9 4 4 3 8 4 9 2 6 7 2 6 1 8 8 3 4 8 1 6
    // 9 5 1 7 5 3 9 5 1 3 5 7 1 5 9 7 5 3 1 5 9 3 5 7
    // 4 3 8 6 1 8 2 7 6 8 1 6 8 3 4 2 9 4 6 7 2 4 9 2
    
    
    $data =[
    [[2,7,6],[9,5,1],[4,3,8]],
    [[4,3,8],[9,5,1],[2,7,6]],
    [[2,9,4],[7,5,3],[6,1,8]],
    [[6,1,8],[7,5,3],[2,9,4]],
    [[4,9,2],[3,5,7],[8,1,6]],
    [[8,1,6],[3,5,7],[4,9,2]],
    [[8,3,4],[1,5,9],[6,7,2]],
    [[6,7,2],[1,5,9],[8,3,4]]
    ];
    
    $minCost = 100;
    foreach ($data as $keep) {
    $cost = 0;
    foreach($s as $row=>$cols){
    foreach($cols as $col=>$val){
    $cost += abs($keep[$row][$col] - $s[$row][$col]);
    }
    }
    if($cost < $minCost){
    $minCost = $cost;
    }
    }
    return $minCost;
    }




?>