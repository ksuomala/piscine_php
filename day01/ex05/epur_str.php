#!/usr/bin/php
<?

$keywords = preg_split("/ +/", trim($argv[1]));
print_r(implode(' ', $keywords));

?>