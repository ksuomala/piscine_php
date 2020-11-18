<?php
	class Targaryen {
		public function getBurned() {
			if ($this->resistsFire() == False)
				return "burns alive";
			else
				return "emerges naked but unharmed";
		}
		public function resistsFire() {
			return False;
		}
	}
?>