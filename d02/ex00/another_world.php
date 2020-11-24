#!/usr/bin/php
<?PHP

$array = preg_split("/[ \t]+/", trim($argv[1]));
print_r(implode(' ', $array));

?>