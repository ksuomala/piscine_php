#!/usr/bin/php
<?
	if ($argc < 2)
		exit();
	$key = $argv[1];
	for ($i = 2; $i < $argc; $i++){
		if(preg_match("/^$key:/", $argv[$i]))
		{
			$val = preg_split("/:{1}/", $argv[$i]);
			break ;
		}
	}
	print $val[1];
?>