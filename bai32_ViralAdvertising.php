<?php

function viralAdvertising($n){
    $liked =2;
    $shared =5;
    $cumulative =0;
    for($i=1; $i<=$n;$i++){

        $liked =floor($shared/2);
        $shared = $liked*3;
        $cumulative +=$liked;

    }
    return $cumulative;

}
echo viralAdvertising(50);

?>