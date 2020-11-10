#!/usr/bin/php
<?PHP

function ft_split($string)
{
	$keywords = preg_split("/[\s,]+/", trim($string));
	sort($keywords);
	return ($keywords);
}
?>