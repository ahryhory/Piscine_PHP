<?php
class UnholyFactory {
	protected $fighters = array();

	public function __construct() {
	}

	public function absorb($fightersObj) {
		if (get_parent_class($fightersObj) != 'Fighter') {
			print('(Factory can\'t absorb this, it\'s not a fighter)' . PHP_EOL);
			return;
		}
		foreach ($this->fighters as $fighter => $Obj) {
			if ($fighter == $fightersObj->newFighter) {
				print('(Factory already absorbed a fighter of type ' . $fightersObj->newFighter . ')' . PHP_EOL);
				return;
			}
		}
		print('(Factory absorbed a fighter of type ' . $fightersObj->newFighter . ')' . PHP_EOL);
		$this->fighters[$fightersObj->newFighter] = $fightersObj;
	}

	public function fabricate($check_fighter) {
		foreach ($this->fighters as $fighter => $fightersObj) {
			if ($fighter == $check_fighter) {
				print('(Factory fabricates a fighter of type ' . $check_fighter . ')' . PHP_EOL);
				return ($fightersObj);
			}
		}
		print('(Factory hasn\'t absorbed any fighter of type ' . $check_fighter . ')' . PHP_EOL);
	}
}
?>