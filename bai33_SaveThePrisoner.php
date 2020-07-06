<?php
function saveThePrisoner($n,$m,$s){
    $du = $m%$n;
    $count =0;
    if($du>($n-$s+1)){
        $count = $du -($n-$s+1);
    }elseif($du==0){
        if($s==1){
            $count=$n;
        }else{
            $count=$s+$du-1;
        }
    }else{
        $count = $s+$du-1;
    }
    return $count;
}
echo saveThePrisoner(5,2,1);
?>