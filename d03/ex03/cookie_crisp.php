<?php
	if ($_GET[action] == "set")
		setcookie($_GET[name], $_GET[value], time() + (86400 * 30));
	if ($_GET[action] == "get")
		if ($_COOKIE[$_GET[name]] != "")
			echo($_COOKIE[$_GET[name]]."\n");
	if ($_GET[action] == "del")
		setcookie($_GET[name], "", time() - 3600);
?>