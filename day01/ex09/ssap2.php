#!/usr/bin/php
<?

function ssap2_sort($a, $b)
{
	$len = (strlen($a) > strlen($b)) ? strlen($b) : strlen($a);
	$a = strtolower($a);
	$b = strtolower($b);
	$i = 0;
	while (i < $len && $a[$i] == $b[$i])
		$i++;
	$a_char = ($i == strlen($a)) ? chr(0) : $a[$i];
	$b_char = ($i == strlen($b)) ? chr(0) : $b[$i];
	$a_val = ord($a_char);
	$b_val = ord($b_char);
	if ($a_val == 0 || $b_val == 0)
		return ($a_val - $b_val);
	if (!ctype_alpha($a_char))
		$a_val += 255;
	if (!ctype_alnum($a_char))
		$a_val += 512;
	if (!ctype_alpha($b_char))
		$b_val += 255;
	if (!ctype_alnum($b_char))
		$b_val += 511;
	return($a_val - $b_val);
}

if ($argc == 1)
	exit();

for ($i=1; $i < $argc; $i++){
	$keywords = preg_split("/[\s,]+/", trim($argv[$i]));
	$merge = array_merge((array)$merge, (array)$keywords);
}
usort($merge, "ssap2_sort");
print_r(implode("\n", $merge));



?>
