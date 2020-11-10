#!/usr/bin/php

<?
function ft_is_sort($array)
{
	$sort = $array;
	sort($array);
		return ($sort == $array);
}
?>