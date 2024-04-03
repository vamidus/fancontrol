<?php
	$area = $_POST['area'];
	$instruction = $_POST['instruction'];
	if(!empty($area) && !empty($instruction)) {
		sendook($area, $instruction);
	}

	function sendook($area, $instruction) {
		$ini = parse_ini_file('fancontrol.ini');
		$command = 'sudo '.$ini['sendook']
			.' -f '.$ini['frequency']
			.' -0 '.$ini['duration_0']
			.' -1 '.$ini['duration_1']
			.' -p '.$ini['pause']
			.' '.$ini[$area].$ini[$instruction];
		shell_exec($command);
	}
?>