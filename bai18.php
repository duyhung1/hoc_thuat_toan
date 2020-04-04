<?php
//Bon Appétit

$bill=[3,10,2,9];
$k=1;
$b=7;

$x = (array_sum($bill)-$bill[$k])/2;
if($x==$b){
	echo "Bon Appetit";
}else{
	echo $b-$x;
}

?>