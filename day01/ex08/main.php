#!/usr/bin/php
<?PHP
include("ft_is_sort.php");
$tab = array("321", "422", "1He", "hi2", "zZz");
$tab[] = "123";
//sort($tab);
print_r($tab);
if (ft_is_sort($tab))
echo "The array is sorted\n";
else
echo "The array is not sorted\n";
?>