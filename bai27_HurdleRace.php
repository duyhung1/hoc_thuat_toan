<?php
//Hurdle Race
$k=7;
$hight =[2,5,4,5,2];
$max =0;
foreach($height as $val){
    if($val>$max){
        $max = $val;
    }
}
if($k>=$max){
    return 0;
}else{
    return $max-$k;
}

?>