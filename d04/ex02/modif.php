<?php
	function mod_passwd($arr){
		foreach ($arr as &$user){
			if ($user['login'] === $_POST['login'] && $user['passwd'] === hash("whirlpool", $_POST['oldpw']))
			{
				$user['passwd'] = hash("whirlpool", $_POST['newpw']);
				return ($arr);
			}
		}
		return (false);
	}
	if ($_POST['submit'] === "OK" && $_POST['login'] && $_POST['oldpw'] && $_POST['newpw'] && file_exists("../private/passwd")){
		$arr = unserialize(file_get_contents("../private/passwd"));
		if (($arr = mod_passwd($arr)) == false)
			echo "ERROR\n";
		else
		{
			file_put_contents("../private/passwd", serialize($arr));
			echo "OK\n";
		}
	}
	else
		echo "ERROR\n";
?>