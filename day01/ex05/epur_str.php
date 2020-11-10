#!/usr/bin/php
<?

$keywords = preg_split("/[\s,]+/", trim($argv[1]));
print_r(implode(' ', $keywords));

?>