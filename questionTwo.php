<?php

/* 
問題2
交互に要素を取ることで、2つのリストを結合する関数を記述せよ。例えば [a, b, c]と[1, 2, 3]という2つのリストを与えると、関数は [a, 1, b, 2, c, 3]を返す。
 */

$list1 = array('a','b','c','d','e','f');
$list2 = array(1,2,3,4,5,6,7,8,9,10);

echo '<pre>';
print_r($list1);
print_r($list2);
print_r(getAlternationArrayMerge($list1, $list2));
echo '</pre>';

function getAlternationArrayMerge($list1, $list2) {
	$answer = array();
	while(true) {
		if (empty($list1) && empty($list2)) {
			break;
		}
		if($list1) {
			$answer[] = array_shift($list1);
		}
		if ($list2) {
			$answer[] = array_shift($list2);
		}
		
	}
	return $answer;
}