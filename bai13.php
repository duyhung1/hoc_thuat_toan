<?php
//Breaking the Records
$n =9;
$arr=array(10,5,20,20,4,5,2,25,1);
$max = $arr[0];
$min = $arr[0];
$high =0;
$low =0;

for($i=0;$i<$n; $i++){
	if($arr[$i]>$max){
		$max =$arr[$i];
		$high++;
	}
}
for($i=0;$i<$n; $i++){
	if($min>$arr[$i]){
		$min =$arr[$i];
		$low++;
	}
}
echo $high."<br>";
echo $low;

?>