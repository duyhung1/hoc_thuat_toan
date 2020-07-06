<?php
//Beautiful Days at the Movies

$i=20;
$j=23;
$k=6;
$reverngay = 0;
$count=0;
for($a=$i;$a<=$j;$a++){
    $ngay = (int)$a;
    $reverngay = $ngay%10;
    $ngay = (int)($ngay/10);
     $du= 0;
    while($ngay!=0){
        $du = $ngay%10;
        $ngay = (int)($ngay/10);
        $reverngay = $reverngay * 10 + $du;
        
    }
    if(abs($a -$reverngay)%$k==0){
        $count++;
    }
  
}
echo $count;

?>