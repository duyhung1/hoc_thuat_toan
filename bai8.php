<?php
$s =("12:05:45AM");
$arr = explode(":",$s);
if (substr($s,-2) == "PM" and $arr[0] != 0 and $arr[0] != 12){
	$arr[0] = $arr[0] + 12; 
}
elseif (substr($s,-2) == "PM" and $arr[0] == 0){
	$arr[0] = "00"; 
}
elseif (substr($s,-2) == "PM" and $arr[0] == 12){
	$arr[0] = "12"; 
}
elseif (substr($s,-2) == "AM" and $arr[0] == 12) {
	$arr[0] = "00"; 
}

echo $arr[0] . ":" . $arr[1] . ":" . substr($arr[2],0,2);
//echo chunk_split($s,2,"--");
//echo substr($arr[2],0,2);
//echo $arr[2];
?>