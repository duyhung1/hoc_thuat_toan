<?php
$arr = array(1,2,3,4,2);
$so1 = 0;
$arr1 = array();
$max = null;
$min = null;
foreach($arr as $val){
	$so1 +=$val;
}
for ($i=0; $i<count($arr); $i++){
	$arr1[] = $so1 - $arr[$i];
}
for ($i = 0; $i < count($arr1); $i++){
    if ($max == null){
        $max = $arr1[$i];
		$min = $arr1[$i];
    }
    else {
        if ($arr1[$i] > $max){
            $max = $arr1[$i];
        }
		if($arr1[$i]<$min){
			$min = $arr1[$i];
		}
    }
}
echo $min." ".$max;
//echo min($arr1)." ".max($arr1);
//echo json_encode($arr1);
?>