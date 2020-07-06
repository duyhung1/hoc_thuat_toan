<?php
function sequenceEquation($p) {
    $x=array();
    $y = array();
    for($i=1;$i<=count($p);$i++){
        for($j=0;$j<count($p);$j++){
            if($p[$j]==$i){
                $x[] =$j+1;
               // echo $x."\n";
            }
        }
    }
    for($i=0;$i<count($x);$i++){
        foreach($p as $key=>$val){
            if($val==$x[$i]){
                $y[]=$key+1;
            }
        }
    }
    return $y;
}
echo json_encode(sequenceEquation([2,3,1]));

// $p = [4,3,5,1,2];
// $x=array();
// $y = array();
// for($i=1;$i<=count($p);$i++){
//     for($j=0;$j<count($p);$j++){
//         if($p[$j]==$i){
//             $x[] =$j+1;
//            // echo $x."\n";
//         }
//     }
// }
// for($i=0;$i<count($x);$i++){
//     foreach($p as $key=>$val){
//         if($val==$x[$i]){
//             $y[]=$key+1;
//         }
//     }
// }
// echo json_encode($y);
//echo json_encode($y);

?>