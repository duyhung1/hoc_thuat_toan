<?php
$arr= array(-4,3,-9,0,4,1);
$arr1 = array();
$arr2 = array();
$a =0;$b=0;$c=0;
$leng_arr = count($arr);
for($i=0; $i<$leng_arr; $i++){
	if($arr[$i]<0){
		$arr1[]=$arr[$i];
		$a= count($arr1);
	}
	if($arr[$i]>0){
		$arr2[]=$arr[$i];
		$b = count($arr2);
	}
}
$c = $leng_arr - ($a + $b);
//echo json_encode($arr2);
echo number_format($b/$leng_arr,6)."<br>";
echo number_format($a/$leng_arr,6)."<br>";
echo number_format($c/$leng_arr,6);

?>