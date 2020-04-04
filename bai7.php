<?php
$ar = array(1,7,7,8,7,6,8);
$max = null;
$vitri = array();

for($i =0; $i< count($ar); $i++){
	if($max == null){
		$max = $ar[$i];
		$vitri[]=$i;
	}else{
		
		if($max == $ar[$i]){
			$vitri[] = $i;
		}
		
		if($ar[$i]>$max){
			$max = $ar[$i];
			$vitri = [$i];
		}
		
	}
}
echo $max;
/*for($i =0; $i< count($ar); $i++){
	if($max == $ar[$i]){
		$vitri[]=$i;
	}
}*/
echo json_encode($vitri);
?>