<?php
//Angry Professor
$k=7;
$a=[26, 94, -95, 34, 67 ,-97, 17 ,52 ,1 ,86];
$s=array();
for($i=0;$i<count($a);$i++){
    if($a[$i]<=0){
        $s[]= $a[$i];
    }
}
// echo count($s)."\n";
// echo json_encode($s);
if(count($s)>=$k){
    echo "NO";
}else{
    echo "YES";
}

?>