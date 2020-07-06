<?php
function appendAndDelete($s,$t,$k) {
    $lens = strlen($s);
    $lent = strlen($t);
    $key = [];
    for($i=0;$i<$lens;$i++){
        for($j=0;$j<$lent;$j++){
            if($i==$j && $s[$i]==$t[$j] ){
                $key[]=$i;
            }
        }
    }
    $newkey= [];
    foreach($key as $key1=>$val1){
        if($key1==$val1){
            $newkey[]=$key1;
        }
    }

    if($lens<$lent && $lens+$lent>$k&& count($newkey)!=$lens){
        return "No";
    }else
        if($lens+$lent-2*count($newkey)<=$k){
            return "Yes";
        }else{
            return "No";
        }
}
echo appendAndDelete("ashley", "ash", 2);


?>