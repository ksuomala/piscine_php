#!/usr/bin/php
<?PHP

print "Enter a number: ";

while ($line = trim(fgets(STDIN)))
{
	if (is_numeric($line))
	{
		if ($line % 2)
			print "The number $line is odd\n";
		else
			print "The number $line is even\n";
	}
	else
		print "$line is not a number\n";
}
?>