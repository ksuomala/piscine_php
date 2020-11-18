<?php
	include_once('Fighter.class.php');
	class UnholyFactory
	{
		private $army = array();

		public function absorb($soldier)
		{
			print "(Factory ";
			if (get_parent_class($soldier) == 'Fighter' && !in_array($soldier, $this->army)){
				$this->army[] = $soldier;
				print "absorbed a fighter of type ";
			}
			else if (!get_parent_class($soldier))
			{
				print "can't absorb this, it's not a fighter)" . PHP_EOL;
				return ;
			}
			else
				print "already absorbed a fighter of type ";
			print $soldier->name . ")" . PHP_EOL;
		}

		public function fabricate($rf)
		{
			$ret = NULL;
			print "(Factory ";
			foreach ($this->army as $soldier)
			{
				if ($soldier->name == $rf)
				{
					print "fabricates a fighter of type ";
					$ret = $soldier;
				}
			}
			if ($ret == NULL)
				print "hasn't absorbed any fighter of type ";
			print $rf . ")" . PHP_EOL;
			return ($ret);
		}
	}
?>