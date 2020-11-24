<?php
	function auth($login, $passwd)
	{
		if (!$login || !$passwd)
			return (FALSE);
		$data = unserialize(file_get_contents("users.csv"));
		foreach ($data as $user)
		{
			if ($user['login'] === $login && $user['passwd'] === hash("whirlpool", $passwd))
			{
				return (TRUE);
			}
		}
		echo "Authentication failed: \n";
		return (FALSE);
	}
?>
