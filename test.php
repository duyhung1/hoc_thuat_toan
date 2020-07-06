<?php
function bn_mul($n2, $n1) {

    $l1 = strlen($n1);
    $l2 = strlen($n2);

    $rows = [];

    for ($idx1 = $l1 - 1 ; $idx1 >= 0 ; $idx1--) {
        // get digit
        $d1 = substr($n1, $idx1, 1) ;

        $carry = 0; // reset carry
        $row = []; // store digit of $d1 x each digits of $n2

        // prepend 0 (10 * num rows)
        for ($x=0 ; $x<count($rows) ; $x++) $row[] = 0;

        for ($idx2 = $l2 - 1 ; $idx2 >= 0 ; $idx2--) {

            // get digit
            $d2 = substr($n2, $idx2, 1) ;
            // multiplication of digit 1 x digit 2 + current carry
            $r = intval($d1) * intval($d2) + $carry;

            $carry = 0;

            // compute carry
            if ($r >= 10) {
                $carry = substr($r, 0, -1);
                $r = substr($r, -1);
            }
            $row[] = $r ;
        }

        if ($carry) $row[] = $carry;

        $rows[] = $row ;
    }


    // Sum digits of rows
    $total = [] ;
    $carry = 0 ;
    for ($x=0;$x < count(end($rows)) ; $x++){
        $tot = $carry;
        $carry = 0;
        foreach ($rows as $row){
            if (isset($row[$x])) $tot += $row[$x] ;
        }
        while ($tot >= 10) {
            $tot -= 10;
            $carry++;
        }
        $total[$x] = $tot;
    }

    return strrev(implode($total));
}
echo json_encode(bn_mul(111111111111111111111111111111,111111111111111111111111111111));
?>