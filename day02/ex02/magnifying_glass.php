#!/usr/bin/php
<?
	if (is_readable($argv[1]))
	{
		$input = file_get_contents($argv[1]);
		echo $input;
		echo "\n";
		$link = "/(<a)(.*?)(>)(.*?)(<.*?\/a>)/";
		$img = "/(<img.*title=\")(.*)(\")/";
//		print $input;
		function upper($input)
		{
			return ($input[1] . $input[2] . $input[3]. strtoupper($input[4]) . $input[5]);
		}
		function upper2($input)
		{
			return $input[1] . strtoupper($input[2]) . $input[3];
		}
		$out = preg_replace_callback($link, 'upper', $input);
		$out = preg_replace_callback($img, 'upper2', $out);
		echo $out;
	}

	// <a(.*?)(>)(.*?)<.*?\/a>
	//(<img).*(title=")(.*)(")
?>