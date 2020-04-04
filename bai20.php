<?php
//Drawing Book

$n=5;
$p=4;

$ar = array();
$ar1= array();
$ar2 =array();
for($i=1;$i<=$n;$i++){
	$ar[]=$i;
}
for($i=0;$i<$n;$i++){
	if($ar[$i]<=$p){
		$ar1[]=$ar[$i];
	}
	if($ar[$i]>=$p){
		$ar2[]=$ar[$i];
	}
}

if($n%2==0){
	if(ceil((count($ar1)-1)/2)> ceil((count($ar2)-1)/2)){
		echo ceil((count($ar2)-1)/2);
	}else{
		echo ceil((count($ar1)-1)/2);
	}
}else{
	if(count($ar2)/2<=1){
		echo 0;
	}else
	if(ceil((count($ar1)-1)/2)>(count($ar2)-2)/2){
		echo ceil((count($ar2)-2)/2);
	}else{
		echo ceil((count($ar1)-1)/2);
	}
		
}


echo json_encode($ar)."<br>";
echo json_encode($ar1)."<br>";
echo json_encode($ar2)."<br>";
?>