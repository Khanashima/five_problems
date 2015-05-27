<?php

/* 
問題3
最初の100個のフィボナッチ数のリストを計算する関数を記述せよ。
定義では、フィボナッチ数列の最初の2つの数字は0と1で、次の数は前の2つの合計となる。
例えば最初の10個のフィボナッチ数列は、0, 1, 1, 2, 3, 5, 8, 13, 21, 34となる。
 */

echo '<pre>';
print_r(getSumFibonacci([0, 1], 0, 1, 100));
echo '</pre>';

function getSumFibonacci($array, $firstValue, $secondValue, $limit)
{
	if (count($array) == $limit) {
		return $array;
	} else {
		$array[] = $firstValue + $secondValue;
		return getSumFibonacci($array, $secondValue, $firstValue + $secondValue, $limit);
	}
}

