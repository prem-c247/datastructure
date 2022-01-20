<?php 
function linerSearch($array, $value){
	if(!empty($array) && !empty($value)){
		// foreach($array as $arr){
		// 	if($arr==$value){
		// 		return "Matched value is = ".$arr;
		// 	}
		// }
		for($i=0;$i<count($array);$i++){
			if($array[$i]==$value){
				return "Matched value is = ".$array[$i];
			}
		}
	}
	return "No Match Found";
}

$arraySet = array(1,3,2,44,55,432,678,32,8,97);
$value = 8;
echo linerSearch($arraySet,$value);
