<?php
	$area = $_POST['area'];
	$instruction = $_POST['instruction'];
	sendook($area, $instruction);

	function sendook($area, $instruction) {
		$ini = parse_ini_file('fancontrol.ini');
		if (empty($ini[$area]) || empty($ini[$instruction])) {
			http_response_code(400);
			exit();
		}
		$command = 'sudo '.$ini['sendook']
			.' -f '.$ini['frequency']
			.' -0 '.$ini['duration_0']
			.' -1 '.$ini['duration_1']
			.' -p '.$ini['pause']
			.' -d '.$ini[$area].$ini[$instruction];
		shell_exec($command);
	}
?>