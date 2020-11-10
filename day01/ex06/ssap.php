#!/usr/bin/php
<?
	for ($i=1; $i < $argc; $i++){
		$keywords = preg_split("/[\s,]+/", trim($argv[$i]));
		$merge = array_merge((array)$merge, (array)$keywords);
	}
	sort($merge);
	print_r(implode("\n", $merge));
?>