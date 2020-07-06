<?php
//Designer PDF Viewer
$a="asdfghhg";
$h =[1,3,1,3,1,4,1,3,2,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,7];
$word =("zaba");
//echo count($h);
$w =["a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z"];
$c = array_combine($w,$h);
$k =array();
for($i=0;$i<strlen($word);$i++){
    foreach($c as $key1=>$val1){
        if($word[$i] ==$key1){
            $k[]=$val1;
        }
    }
}
$max =0;
foreach($k as $val){
    if($val>$max){
        $max = $val;
    }
}
echo $max*strlen($word)."\n";
?>