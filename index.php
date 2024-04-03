<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Fan Control</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
		<link rel="shortcut icon" type="image/png" href="Images/power_0.png"/>
		<link rel="stylesheet" type="text/css" href="CSS/main.css">
		<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
		<script src="Scripts/main.js"></script>
		<script>
			$(function () {
				Main.CreateInstance({
					xxx: null,
				});
			});
		</script>
	</head>
	<body>
		<form method="post">
			<fieldset class="container form-group">
				<legend>Office!</legend>
				<button title="Fan speed 0" type="submit" class="btn btn-primary btn-lg power_0" name="o_power_0">Fan speed 0</button>
				<button title="Fan speed 1" type="submit" class="btn btn-primary btn-lg power_1" name="o_power_1">Fan speed 1</button>
				<button title="Fan speed 2" type="submit" class="btn btn-primary btn-lg power_2" name="o_power_2">Fan speed 2</button>
				<button title="Fan speed 3" type="submit" class="btn btn-primary btn-lg power_3" name="o_power_3">Fan speed 3</button>
				<button title="Light" type="submit" class="btn btn-primary btn-lg light" name="o_light">Light</button>
			</fieldset>
			<fieldset class="container form-group">
				<legend>Bedroom</legend>
				<button title="Fan speed 0" type="submit" class="btn btn-primary btn-lg power_0" name="b_power_0">Fan speed 0</button>
				<button title="Fan speed 1" type="submit" class="btn btn-primary btn-lg power_1" name="b_power_1">Fan speed 1</button>
				<button title="Fan speed 2" type="submit" class="btn btn-primary btn-lg power_2" name="b_power_2">Fan speed 2</button>
				<button title="Fan speed 3" type="submit" class="btn btn-primary btn-lg power_3" name="b_power_3">Fan speed 3</button>
				<button title="Light" type="submit" class="btn btn-primary btn-lg light" name="b_light">Light</button>
			</fieldset>
		</form>
	</body>
</html>

<pre>
<?php
	if(array_key_exists('o_light', $_POST)) {
		sendook("office", "light");
	}

	function sendook($area, $instruction) {
		$ini = parse_ini_file('fancontrol.ini');
		$command = 'sudo '.$ini['sendook']
			.' -f '.$ini['frequency']
			.' -0 '.$ini['duration_0']
			.' -1 '.$ini['duration_1']
			.' -p '.$ini['pause']
			.' -d '.$ini[$area].$ini[$instruction];
		$_ = shell_exec($command);
	}
?>
</pre>
