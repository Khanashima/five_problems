<?php

/* 
問題4
正の整数のリストを与えられたとき、数を並び替えて可能な最大数を返す関数を記述せよ。例えば、[50, 2, 1, 9]が与えられた時、95021が答えとなる(解答例)。
 */

$list = array(5, 50, 56);
//$list = array(50, 2, 1, 9);

usort($list, 'comp');

echo '<pre>';
print_r(implode('', $list));
echo '</pre>';

function comp($int1, $int2) {
	$str1 = (string)$int1;
	$str2 = (string)$int2;
	if ($str1 === $str2) {
		return 0;
	}
	return -1 * strcmp($str1 . $str2, $str2 . $str1);
}

