<?php
	if ($_POST['submit'] === "OK" && $_POST['login'] && $_POST['passwd'])
	{
		if (!file_exists("../private"))
			mkdir("../private", 0777, true);
		$arr = unserialize(file_get_contents("../private/passwd"));
		foreach ($arr as $user)
		{
			if ($user['login'] === $_POST['login'])
			{
				echo "ERROR\n";
				return ;
			}
		}
		$arr[] = ["login" => $_POST['login'], "passwd" => hash("whirlpool", $_POST['passwd'])];
		file_put_contents("../private/passwd", serialize($arr));
		echo "OK\n";
	}
	else
		echo "ERROR\n";
?>