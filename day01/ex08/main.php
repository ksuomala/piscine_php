#!/usr/bin/php
<?PHP
include("ft_is_sort.php");
$tab = array("1!/@#;^", "42", "1Hello World", "hi", "zZzZzZz");
$tab[] = "What are we doing now ?";
//sort($tab);
print_r($tab);
if (ft_is_sort($tab))
echo "The array is sorted\n";
else
echo "The array is not sorted\n";
?>