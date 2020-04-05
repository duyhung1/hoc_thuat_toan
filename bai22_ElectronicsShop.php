<?php
$b =10;
$keyboard =[10,1];
$drives =[5,2,8];
$arr = array();

foreach($keyboard as $val){
    foreach($drives as $val1){
        $arr[]= $val+$val1;
    }
}
$ar = array();
foreach($arr as $val){
    if($val<=$b){
        $ar[]= $val;
    }
}
$max=-1;
foreach($ar as $val){
    if($val>$max){
        $max=$val;
    }
}
echo $max;


?>