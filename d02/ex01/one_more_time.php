#!/usr/bin/php
<?php
function isvalid($string){
	$new = preg_split("/[ :]/", $string);
	if (preg_match("/^\d{4}$/", $new[3]) == 0)
		return(false);
	if (preg_match("/^\d{2}$/", $new[6]) == 0)
		return(false);
	return(true);
}
if ($argc != 2)
	exit();
setlocale(LC_ALL, "fr_FR");
date_default_timezone_set('Europe/Paris');
$format = '%A %e %B %Y %H:%M:%S';
$input = strptime($argv[1], $format);
if (!isvalid($argv[1]) || !$input)
{
	print "Wrong Format\n";
	exit();
}
$input = mktime($input['tm_hour'], $input['tm_min'], $input['tm_sec'],
$input['tm_mon'] + 1, $input['tm_mday'], $input['tm_year'] + 1900);
print "$input\n";
?>