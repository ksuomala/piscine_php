<?php
if ($_SERVER['PHP_AUTH_USER'] == "zaz" && $_SERVER['PHP_AUTH_PW'] == "Ilovemylittleponey")
{
	echo "<html><body>\nHello Zaz<br />\n";
	$path = "../img/42.png";
	$image = base64_encode(file_get_contents($path));
	echo "<img src='data:image/png;base64,".$image."'>\n";
	echo "</body></html>\n";
}
else
{
	header("WWW-Authenticate: Basic realm=''Member area''");
	header('HTTP/1.0 401 Unauthorized');
	echo "<html><body>That area is accessible for members only</body></html>\n";
	exit;
}
?>