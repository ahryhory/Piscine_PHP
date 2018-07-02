<?php
class NightsWatch {
	private $members = array();

	public function recruit($new_member) {
		array_push($this->members, $new_member);
	}

	public function fight() {
		foreach ($this->members as $member) {
			if (method_exists($member, 'fight')) {
				$member->fight();
			}
		}
	}
}
?>