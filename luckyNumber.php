<?php 

function lunckyNumberCheck($number=1223){
	if(!empty($number)){
		$num_digits = str_split($number);
		//$digit = count($num_digits);
		for($i=1;$i<count($num_digits);$i++){
			echo $num_digits[$i];
			if($num_digits[$i-1]==$num_digits[$i]){
				return "The Number ".$number." is not Lucky Number";
			}
			else{
				return "This is lucky Number = ".$number;
			}
		}
		//return $num_digits;
	}
}
print_r( lunckyNumberCheck());