<?php
//Divisible Sum Pairs
$k = 3;
$ar = [1,2,2,3,6,1,2];//3,4,7,2,3,5,8,3,4,9,4,5,7,8,3

$ar1 = array();
$tong =0;
$a=0;
	for($j=0;$j<count($ar)-1;$j++){
		
		for($i=$j+1;$i<count($ar);$i++){
			$ar1[]=$ar[$j]+$ar[$i];		
		}
	}
	for($i=0;$i<count($ar1);$i++){
		if($ar1[$i]%$k==0){
			$tong++;
		}
	}
//return $tong;
echo json_encode($ar1)."\n";
echo $tong;


?>