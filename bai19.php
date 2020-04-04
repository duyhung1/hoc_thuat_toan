<?php
//Sock Merchant

$n=9;
$ar= [10,20,20,10,10,30,50,10,20];
$arr = array();

foreach($ar as $val){
	if(isset($arr[$val])){
		$arr[$val]+=1;
	}else{
		$arr[$val]=1;
	}
}
$a= array();
foreach($arr as $key=>$val){
	if($val>=2){
		$a[]=$val;
	}
}
$tong=0;
foreach($a as $val){
		$tong+=floor($val/2);
}
echo json_encode($arr);

echo $tong;
?>