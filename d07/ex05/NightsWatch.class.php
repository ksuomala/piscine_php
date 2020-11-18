<?php

Class Nightswatch {
	private $members = array();
	public function recruit ($member){
		if (is_subclass_of($member, 'IFighter'))
			$this->members[] = $member;
	}
	public function fight() {
		foreach ($this->members as $fighter)
			$fighter->fight();
	}
}

?>