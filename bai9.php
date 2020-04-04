<?php
$arr = array(91,68,30,44,87);
$arr1 = array();

for($i=0; $i <count($arr); $i++){
	if($arr[$i]<38){
		$arr1[] = $arr[$i];
	}else{
		if($arr[$i]+(5-$arr[$i]%5)-$arr[$i]<3){
			$arr1[]=$arr[$i]+(5-$arr[$i]%5);
		}else{
			$arr1[] = $arr[$i];
		}
	}
}
echo json_encode ($arr1);
echo 5-92%5;
?>