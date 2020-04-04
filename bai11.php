<?php
$x1 = 0;
$v1 = 2;
$x2 = 5;
$v2 = 3;
$arr = array();
$arr1 = array();
function myfunction($a,$b)
{
if ($a===$b)
  {
  return 0;
  }
  return ($a>$b)?1:-1;
}
for($i=0;$i<10000;$i++){
	$arr[]=$x1+=$v1;
}
for($i=0;$i<10000;$i++){
	$arr1[]=$x2+=$v2;
}
//echo json_encode(array_uintersect_assoc($arr,$arr1,"myfunction"));	
if(array_uintersect_assoc($arr,$arr1,"myfunction")!=null){
	echo "YES";
}else{
	echo "NO";
};

?>