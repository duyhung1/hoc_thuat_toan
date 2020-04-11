<html>
<body>
<?php
$ar = array(
array(11,2,4),
array(4,5,6),
array(10,8,-12)
);
$tong1 = 0;
$tong2 = 0;
$int = 0;
$intt = count($ar)-1;


foreach($ar as $item)
{	
	
	$tong1 += $item[$int];
	$int++;
	$tong2 += $item[$intt];
	$intt--;
	
}
echo abs($tong2-$tong1)."<br>";

echo $tong1."<br>";
echo $tong2;
?>
</body>
</html>