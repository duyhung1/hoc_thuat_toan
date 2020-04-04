<?php

$tn = array('1'=>31,'2'=>29,'3'=>31,'4'=>30,'5'=>31,'6'=>30,'7'=>31,'8'=>31,'9'=>30,'10'=>31,'11'=>30,'12'=>31);
$tkn = array('1'=>31,'2'=>28,'3'=>31,'4'=>30,'5'=>31,'6'=>30,'7'=>31,'8'=>31,'9'=>30,'10'=>31,'11'=>30,'12'=>31);


$y=2000;
$thang=1;
$ngay = 1;
$day = 32;
$sum = 0;
$month = $tkn;
if(($y<=1917 && $y%4==0) || ($y>1918&&$y%400==0)||($y%4==0&&$y%100!=0)){
	$month = $tn;
}
foreach ($month as $t=>$td){
	$sum_before = $sum;
	if($sum < $day){
		$sum += $td;
	}
	
	if($sum >= $day){
		$thang = $t;
		$ngay = $day - $sum_before;
		break;
	}
}
echo $ngay."-".$thang."<br>--------";

$y= 2000;
$n =60;
$t1=31;$t21=28;$t22=29;$t3=31;$t4=30;$t5=31;$t6=30;$t7=31;$t8=31;$t9=30;$t10=31;$t11=30;$t12=31;
$ar1=[31,59,90,120,151,181,212,243,273,304,334,365];
$ar2=[31,60,91,121,152,182,213,244,274,305,335,366];
// if($y==1918){
	// echo"26.09.1918";
// }else{
	// if(($y<=1917 && $y%4==0) || ($y>1918&&$y%400==0)||($y%4==0&&$y%100!=0)){
		// echo "12.09.$y";
	// }else{
		// echo "13.09.$y";
	// }
// }
$x=floor($n/30);
$ngay =null;
$thang=null;
if(($y<=1917 && $y%4==0) || ($y>1918&&$y%400==0)||($y%4==0&&$y%100!=0)){
	if($n<32){
		$ngay =$n;
		$thang=1;
	}elseif($n<61){
		$ngay= $n-31;
		$thang =2;
	}elseif($n<92){
		$ngay= $n-60;
		$thang =3;
	}elseif($n<122){
		$ngay= $n-91;
		$thang =4;
	}elseif($n<153){
		$ngay= $n-121;
		$thang =5;
	}elseif($n<183){
		$ngay= $n-152;
		$thang =6;
	}elseif($n<214){
		$ngay= $n-182;
		$thang =7;
	}elseif($n<245){
		$ngay= $n-213;
		$thang =8;
	}elseif($n<275){
		$ngay= $n-244;
		$thang =9;
	}elseif($n<306){
		$ngay= $n-274;
		$thang =10;
	}elseif($n<336){
		$ngay= $n-305;
		$thang =11;
	}elseif($n<267){
		$ngay= $n-335;
		$thang =12;
	}
}else{
		if($n<32){
		$ngay =$n;
		$thang=1;
	}elseif($n<60){
		$ngay= $n-31;
		$thang =2;
	}elseif($n<91){
		$ngay= $n-59;
		$thang =3;
	}elseif($n<121){
		$ngay= $n-90;
		$thang =4;
	}elseif($n<152){
		$ngay= $n-120;
		$thang =5;
	}elseif($n<182){
		$ngay= $n-151;
		$thang =6;
	}elseif($n<213){
		$ngay= $n-181;
		$thang =7;
	}elseif($n<244){
		$ngay= $n-212;
		$thang =8;
	}elseif($n<274){
		$ngay= $n-243;
		$thang =9;
	}elseif($n<305){
		$ngay= $n-273;
		$thang =10;
	}elseif($n<335){
		$ngay= $n-304;
		$thang =11;
	}elseif($n<266){
		$ngay= $n-334;
		$thang =12;
	}
}
echo "$ngay.$thang.$y";

?>