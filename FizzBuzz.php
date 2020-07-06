<?php 
for($i=1; $i<=100; $i++){
	$check_fizz = $i%3;
	$check_buzz = $i%5;
	$print = "";
	
	if($check_fizz == 0)
		$print = "Fizz";
	if($check_buzz == 0)
		$print .= "Buzz";
	
	
	if($print == "")
		echo $i;
	else
		echo $print;
	
	echo "\n";
}
// for($i=1; $i<=100;$i++) {
// 	if($i%3 == 0 && $i%5 == 0) {
// 		echo "BuzzFizz\n";
// 	}elseif ($i%5 == 0) {
// 		echo "Buzz\n";
// 	}elseif ($i%3 == 0) {
// 		echo "Fizz\n";
// 	}else {
// 		echo "$i\n";
// 	}
// }
	

?>
