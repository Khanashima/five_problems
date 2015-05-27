<?php
/* 
問題4
1,2,…,9の数をこの順序で、”+”、”-“、またはななにもせず結果が100となるあらゆる組合せを出力するプログラムを記述せよ。
例えば、1 + 2 + 34 – 5 + 67 – 8 + 9 = 100となる
 */

define('TARGET_SUM', 100);

$VALUES = array(1,2,3,4,5,6,7,8,9);
$answer = f(TARGET_SUM, $VALUES[0], 1);
foreach ($answer as $ans) {
	print_r($ans);
	echo '<br>';
}

function add($digit, $str, $array) {
	for ($i=0; $i < count($array); $i++) {
		$array[$i] = $digit . $str . $array[$i];
	}
	return $array;
}

function f($sum, $number, $index) {
	$VALUES = array(1,2,3,4,5,6,7,8,9);
	$digit = abs($number % 10);
	if ($index >= count($VALUES)) {
		if ($sum == $number) {
			$array = array();
			$array[] = (string)$digit;
			return $array;
		} else {
			return array();
		}
	}

	$branch1 = f($sum - $number, $VALUES[$index], $index + 1);
	$branch2 = f($sum - $number, -$VALUES[$index], $index + 1);

	$concatenatedNumber = $number >= 0? 10 * $number + $VALUES[$index]: 10 * $number - $VALUES[$index];
	$branch3 = f($sum, $concatenatedNumber, $index + 1);

	$results = array();

	$results = array_merge(array(), add($digit, "+", $branch1));
	$results = array_merge($results, add($digit, "-", $branch2));
	$results = array_merge($results, add($digit, "", $branch3));

	return $results;
}
?>