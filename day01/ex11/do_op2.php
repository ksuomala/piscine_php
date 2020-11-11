#!/usr/bin/php
<?

function is_operator($op)
{
	if ($op != '+' && $op != '-' && $op != '/' && $op != '*' && $op != '%')
		return (false);
	return (true);
}

if ($argc != 2)
{
	print "Incorrect Parameters\n";
	exit();
}
$arr = preg_split("/([ +-\/\*%]+)/", trim($argv[1]), -1, PREG_SPLIT_DELIM_CAPTURE);
print_r($arr);
$op = trim($arr[1]);
if (!is_numeric($arr[0]) || !is_numeric($arr[2]) || !is_operator(trim($op)) || count($arr) != 3)
{
	print "Syntax Error\n";
	exit();
}
$a = trim($arr[0]);
$b = trim($arr[2]);
if ($op == '+')
	print ($a + $b);
if ($op == '-')
	print ($a - $b);
if ($op == '*')
	print ($a * $b);
if ($op == '/')
	print ($a / $b);
if ($op == '%')
	print ($a % $b);
?>