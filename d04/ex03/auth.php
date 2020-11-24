<?php
	function auth($login, $passwd)
	{
		if (!$login || !$passwd)
			return (FALSE);
		$data = unserialize(file_get_contents("../private/passwd"));
		foreach ($data as $user)
		{
			if ($user['login'] === $login && $user['passwd'] === hash("whirlpool", $passwd))
			{
				echo "OK\n";
				return (TRUE);
			}
		}
		echo "ERROR\n";
		return (FALSE);
	}
?>