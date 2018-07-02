<?php
class Tyrion extends Lannister {
	public function sleepWith($obj) {
		if (get_class($obj) == 'Sansa') {
			print('Let\'s do this.' . PHP_EOL);
		}
		else if (get_class($obj) == 'Cersei' || get_class($obj) == 'Jaime') {
			print('Not even if I\'m drunk !' . PHP_EOL);
		}
	}
}
?>