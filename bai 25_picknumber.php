<?php
$a =array(4,97,5,97,97,4,97,4,97,97,97,97,4,4,5,5,97,5,97,99,4,97,5,97,97,97,5,5,97,4,5,97,97,5,97,4,97,5,4,4,97,5,5,5,4,97,97,4,97,5,4,4,97,97,97,5,5,97,4,97,97,5,4,97,97,4,97,97,97,5,4,4,97,4,4,97,5,97,97,97,97,4,97,5,97,5,4,97,4,5,97,97,5,97,5,97,5,97,97,97);
sort($a);
$arr = array();

foreach($a as $val){
	if(isset($arr[$val])){
		$arr[$val]+=1;
	}else{
		$arr[$val]=1;
    }
}
if (count($arr) ==1){
    foreach($arr as $val){
        echo $val;
    }
}else{
$maxx=0;
foreach($arr as $val){
    if($val>$maxx){
        $maxx=$val;
    }
}
echo json_encode($arr);
$tong = array();
foreach($arr as $key=>$val){
    foreach($arr as $key1=>$val1){
      if(abs($key-$key1)==1) {
          $tong[]= $val+$val1;
      }
    }
}
$max =0;
foreach($tong as $val){
    if($val>$max){
        $max =$val;
    }
}
if($max>$maxx){
    echo $max;
}else{
    echo $maxx;
}
}
?>