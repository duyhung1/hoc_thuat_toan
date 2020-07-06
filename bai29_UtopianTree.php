<?php
//Utopian Tree
function utopianTree($n){
    
    $cao1 =1;
    if($n==0){
        return 1;
    }
    $a=array();
    for($i=1;$i<$n+1;$i++){
        $cao=$cao1;
        if($i%2==0){
            $cao = $cao+1;
            $cao1=$cao;
        }else{
           $cao1= $cao1*2;
            
        }

    }
    if($n%2==0){
        return $cao;
    }
    return $cao1;
}
echo utopianTree(6);

?>