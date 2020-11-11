<?PHP
function ft_split($string)
{
	$keywords = preg_split("/ +/", trim($string));
	sort($keywords);
	return ($keywords);
}
?>