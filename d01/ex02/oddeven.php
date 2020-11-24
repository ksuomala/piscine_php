#!/usr/bin/php
<?PHP
while (1)
{
	print "Enter a number: ";
	$line = trim(fgets(STDIN));
	if (feof(STDIN))
		exit();
	if (is_numeric($line))
	{
		if ($line % 2)
			print "The number $line is odd\n";
		else
			print "The number $line is even\n";
	}
	else
		print "'$line' is not a number\n";
}
?>