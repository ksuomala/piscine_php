#!/usr/bin/php
<?
	if ($argc < 2)
		exit();
	for ($i=1; $i < $argc; $i++){
		$keywords = preg_split("/ +/", trim($argv[$i]));
		$merge = array_merge((array)$merge, (array)$keywords);
	}
	sort($merge);
	print_r(implode("\n", $merge));
	print "\n";
?>