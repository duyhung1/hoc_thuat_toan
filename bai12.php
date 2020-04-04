<?php
$n=2;
$m=3;
$a =array(2,4);
$b =array(16,32,96);
$c = array();
$d = array();

for($i=$a[$n-1];$i<=$b[0];$i++){
	if($i%4==0){
		$c[]=$i;
	}
}
for($i=0;$i<count($b);$i++){
	for($j=0; $j<count($c);$j++){
		if($b[$i]%$c[$j]==0){
			$d[]=$c[$j];
		}	
	}
}
echo json_encode ($c)."<br>";
echo json_encode ($d);





function getTotalX($a, $b) {
    // Write your code here
    $minB  = (int) min($b);
    $maxA  = (int) max($a);
    $count = 0;

    if ($minB >= $maxA) {
        // check values inside b[]
        while ($minB >= $maxA) {
            $dividable = true;

            foreach($b as $value) {
                if ($value % $minB) {
                   $dividable = false;

                   break;
                }
            }

            if ($dividable) {
                break;
            }

            $minB = round($minB / 2);    
        }

        // check values inside a[]
        if ($dividable) {
            $vars = [];
            $vars[] = $minB;

            for ($i = $minB - 1; $i > 0; $i--) {
                if (!($minB % $i)) {
                    $vars[] = $i;
                }

                if ($i < $maxA) {
                    break;
                }
            }

            foreach($vars as $var) {
                $dividable = true;

                foreach($a as $aValue) {
                    if ($var % $aValue) {
                        $dividable = false;
                        break;
                    }
                }

                if ($dividable) {
                    $count++;
                }
            }
        }
    }

    return $count;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$first_multiple_input = explode(' ', rtrim(fgets(STDIN)));

$n = intval($first_multiple_input[0]);

$m = intval($first_multiple_input[1]);

$arr_temp = rtrim(fgets(STDIN));

$arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

$brr_temp = rtrim(fgets(STDIN));

$brr = array_map('intval', preg_split('/ /', $brr_temp, -1, PREG_SPLIT_NO_EMPTY));

$total = getTotalX($arr, $brr);

fwrite($fptr, $total . "\n");

fclose($fptr);

?>