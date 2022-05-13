<?php

function bubble_sort($array) {
	for ($i = 0; $i < count($array)-1; $i++) {
		if ($array[$i] > $array[$i+1]) {
			$aux = $array[$i];
			$array[$i] = $array[$i+1];
			$array[$i+1] = $aux;
		}
	}
	return $array;
}

var_dump(bubble_sort([3, 1, 2]));

// EOF


