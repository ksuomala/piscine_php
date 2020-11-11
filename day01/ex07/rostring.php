#!/usr/bin/php
<?
$keywords = preg_split("/ +/", trim($argv[1]));
$arr = array_shift($keywords);
array_push($keywords, $arr);
print_r(implode(' ', $keywords));
print "\n";
?>