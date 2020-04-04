<?php
//Migratory Birds

$arr=[1,2,3,4,5,4,3,2,1,3,4];
//[1=>2,2=>2,3=>3,4=>3,5=>1]

//$arr1= array_count_values($arr);
$ar = array();
for($i=0;$i<count($arr);$i++){
	if(isset($ar[$arr[$i]])){
		$ar[$arr[$i]]+=1;
		
	}else{
		$ar[$arr[$i]]=1;
	}
}

$max =0;

foreach($ar as$key=>$val){
	if($val>$max){
		$max=$val;	
	}
}

$a =array();
foreach($ar as $key=>$val){
	if($val == $max){
		$a[]=$key;
	}
}

$min =5;
foreach($a as $val){
	if($val<$min){
		$min=$val;
	}
}
echo json_encode($ar)."<br>";
echo json_encode($a);
echo $min;
?>