<pre>
<?php 
ini_set('display_errors','1');
$en = "\n";
$ar = [];
for ($i=0; $i <pow(2,6) ; $i++) { 
	$ar[]=$i;
}
function binarySearch($arr,$el)
{
	global $en;
	$lowIndex = 0 ;
	$topIndex =  count($arr);
	$itter = 1;
	while($lowIndex <= $topIndex){
	echo 'itter =',$itter,$en;
	$nowIndex  = round(($lowIndex+$topIndex)/2,0,PHP_ROUND_HALF_DOWN);
	echo 'lowIndex = ',$lowIndex,$en;
	echo 'topIndex = ',$topIndex,$en;
	echo 'nowIndex = ',$nowIndex,$en; 
	$nowEl = $arr[$nowIndex];
	echo 'nowEl = ', $nowEl,$en;
	echo '--------------------',$en;
		if($nowEl != $el){
			if ($nowEl > $el){
				$topIndex -= $nowIndex;
			}else{
				$lowIndex += $nowIndex; 
			}
			$itter++;
		}else{
			return "searching index = " .$nowIndex;
		}
	}

/*	for($i=0;$i<=$topIndex;$i++) {
		if($nowEl != $el){


		}else{
			return $nowIndex;
		}
	}
*/
	
}
echo count($ar),$en;
print_r($ar);
echo binarySearch($ar,1);
 ?>

</pre>
 binary search