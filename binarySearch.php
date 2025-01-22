<?php
function binarySearch($sortedArray,$serchVal){
	print_r($sortedArray);
	echo "\nSearch Val is $serchVal";
	$low = 0;
	$length = count($sortedArray);
	$heigh = $length -1;
	while($low<=$heigh){
		$mid = floor($low + (($heigh - $low) / 2));
		
		$valMid = $sortedArray[$mid];
		//echo "\nCurrent mid value $valMid at $mid";
		if($sortedArray[$mid]==$serchVal){
			return $mid;
		}
		if($valMid < $serchVal){
			//echo "\nSearch Right $valMid < $serchVal";
			//echo "\n\tLow will be $mid + 1";
			$low = $mid + 1;
		}else{
			//echo "\nSearch Left $valMid > $serchVal";
			//echo "\n\theigh will be $mid - 1";
			$heigh = $mid -1;
		}
		//echo "\nLow $low | heigh $heigh";
	}
	//Nothing found
	return -1;
	
}
echo "\n{$argv[0]} <sort_aaray , seprated> <search_val>";
$sortedArray = explode(",",$argv[1]??[]);
$searchIndex = binarySearch($sortedArray,$argv[2]);
echo  "\n\nFound at index $searchIndex";
