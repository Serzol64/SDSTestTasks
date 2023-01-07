<?php
function array_fill_rand($limit, $min=false, $max=false){
	$limit = (int)$limit;
	$array = array();
	
	if ($min !== false && $max !== false)
	{
		$min = (int)$min;
		$max = (int)$max;
		for ($i=0; $i<$limit; $i++)
		{
			$array[$i] = rand($min, $max);
		}
	}
	else
	{
		for ($i=0; $i<$limit; $i++)
		{
			$array[$i] = rand();
		}
	}
	
	return $array;
}

$query = array_fill_rand(10, 2, 5);

[$query[0], $query[1]] = [$query[1], $query[0]];

var_dump($query);
?>
