<?php

$a=[1,0,0,0,0,0,1,1,1,1,1,1,1,1,1,0];
$count = count($a);
$startIndex=0;
$skip = 4;
$curentIndex = $startIndex;
$outpust =array();
$final =array();
$e=100;
do{
    $curentIndex +=$skip;
    if($curentIndex>=$count){
        $curentIndex=$curentIndex%$count;
    }
    $outpust[]= $curentIndex;
}while($curentIndex!=$startIndex);
foreach($outpust as $val){
    foreach($a as $key1=>$val1){
        if($key1 ==$val&& $val1 ==0){
            $e-=1;
        }elseif($key1==$val&&$val1==1){
            $e-=3;
        }
    }
}
echo $e;
echo json_encode($outpust);
?>