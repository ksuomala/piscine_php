#!/usr/bin/php
<?
if ($argc != 2)
	exit();
$keywords = preg_split("/ +/", trim($argv[1]));
print_r(implode(' ', $keywords));
?>