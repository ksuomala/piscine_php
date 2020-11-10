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
$arr = preg_split("/[\s,]+/", trim($argv[1]));
$op = $arr[1];
if (!is_numeric($arr[0]) || !is_numeric($arr[2]) || !is_operator(trim($op)))
{
	print "Syntax Error\n";
	exit();
}
$a = $arr[0];
$b = $arr[2];
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