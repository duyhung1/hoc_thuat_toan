<?php
//Counting Valleys
$n=8;
$s="UU";
$sum =0;
$v=0;

for($i=0;$i<$n;$i++){
    if($s[$i]=="D"){
        $sum--;
    }else{
        echo 0;
    }
    if($s[$i]=="U"){
        $sum++;
    }
    if($sum==0 && $s[$i]=="U"){
        $v++;
    }

}


echo $v;
?>