<?php
	class Tyrion extends Lannister{
		public function sleepWith($obj) {
			if (get_parent_class($obj) == 'Lannister')
				print "Not even if I'm drunk !" . PHP_EOL;
			else
				print "Let's do this." . PHP_EOL;
		}
	}
?>