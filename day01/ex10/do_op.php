#!/usr/bin/php
<?

if ($argc != 4)
{
	print "incorrect parameters";
	exit();
}
$op = trim($argv[2]);
$a = trim($argv[1]);
$b = trim($argv[3]);
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