<?php

	class Jaime  extends Lannister{
		public function sleepWith($obj) {

			$cl = get_class($obj);
			$pr = get_parent_class($obj);

			if ($pr == 'Lannister'){
				if ($cl == 'Cersei')
					print "With pleasure, but only in a tower in Winterfell, then." . PHP_EOL;
				else
					print "Not even if I'm drunk !" . PHP_EOL;
			}
			else
				print "Let's do this." . PHP_EOL;
		}
	}

?>