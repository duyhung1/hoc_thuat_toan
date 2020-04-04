<?php

$s = [2,5,6,1,3,4,3,4];
$m = 3;
$d = 11;
$n = 0;
$ar = array();
for($i=0; $i<count($s)-$m+1;$i++){
	$ar[$i] = 0;
	for($j=0;$j<$m;$j++){
		$ar[$i] = $ar[$i] + $s[$i+$j];
	}
}
for($i=0;$i<count($ar);$i++){
	if($ar[$i]==$d){
		$n++;
	}
}
echo $n;
echo json_encode($ar);
	




?>