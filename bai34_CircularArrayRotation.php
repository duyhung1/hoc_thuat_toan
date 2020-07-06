<?php
// function circularArrayRotation($a, $k, $queries) {
//     while($k>0){
//     $t= $a[count($a)-1];
//     array_pop($a);
//     array_unshift($a,$t);
//     $k--;
//     }
//     // return $a[$queries_iteam];
    
//     for($i=0;$i<count($queries);$i++){
//         $s[]= $a[$queries[$i]];
//     }
//     return $s;
// }
// echo json_encode( circularArrayRotation([1,2,3],2,[0,1,2]));

function circularArrayRotation($a, $k, $queries){
    $count = count($a);
    $du = $k%$count;
    

    for($i=0;$i<count($queries);$i++){
        if($queries[$i]<$du){
            $s[]= $a[$queries[$i]+($count-$du)];
           // $s[]= $a[$queries[$i]+$du];
        }else{
            $s[]= $a[$queries[$i]-$du];
            //$s[]= $a[$queries[$i]-($count-$du)];
        }
        
    }
    return $s;
}
echo json_encode( circularArrayRotation([1,2,3,4,5,6,7],3,[0,1,2]));


?>