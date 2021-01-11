<?php 
ini_set('display_errors', '1');
function smallest(array $ar){
	//брать каждый элемент и сравнивать его со следующим, запоминать самый маленький
	$smallest_index = key($ar);
	$smallest = current($ar);
	foreach ($ar as $i => $value) {
		if($smallest > $value ){
			$smallest_index = $i;
			$smallest = $value;
		}
	}
	return [
		'el'=>$smallest,
		'index' =>$smallest_index
	];
}

function sortByChoose($ar){
	$sorted = [];
	$en = "\n";
	//искать в массиве меньший элемент 
	// добавлять его в новый массив 
	// убирать его из старого 
	$count = count($ar);
	for ($i=0; $i < $count ; $i++) { 
		$smallestAr = smallest($ar);
		$smallest = $smallestAr['el'];
		$smallestIndex = $smallestAr['index'];
		$sorted[] = $smallest;
		unset($ar[$smallestIndex]);
	}
	return $sorted;
}
$test = [1,10,5,0,3,12,20];
print_r(sortByChoose($test));
 ?>