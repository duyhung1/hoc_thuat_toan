<?php
//Climbing_the_Leaderboard
$scores =[100,100,50,40,40,20,10];
$alice= [5,7,25,50,120,130];

function climbingLeaderboard2($scores, $alice) {
$out = [];
$currentIndex = 1;
$top = $scores[0];
$ak = count($alice)-1;
$scoreIndex = 0;
$totalScore = count($scores);

    for($i=$ak; $i>=0;$i--){
        $p = $alice[$i];
        //tim index lon nhat cua diem cao nhat hien tai
        for($j=$scoreIndex; $j < $totalScore; $j++ ){
            if($scores[$j] == $top){
            $scoreIndex = $j;
            }else{
                break;
            }
        }

        if($p >= $top){
            $out[] = $currentIndex;
            continue;
        }

        if($p < $top){
            if($scoreIndex >= $totalScore-1){
                $out[] = $currentIndex+1;
                continue;
            }
            $scoreIndex++;
            $currentIndex++;
            $top = $scores[$scoreIndex];
            $i++;
        }
    }
    return array_reverse($out);
}
echo json_encode (climbingLeaderboard2($scores,$alice));

?>