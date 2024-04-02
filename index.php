<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Fan Control</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
		<link rel="shortcut icon" type="image/png" href="Images/power_0.png"/>
		<link rel="stylesheet" type="text/css" href="CSS/main.css">
	</head>
	<body>
		<form method="post">
			<fieldset class="container form-group">
				<legend>Office</legend>
				<button title="Fan speed 0" type="submit" class="btn btn-primary btn-lg power_0" name="o_power_0"></button>
				<button title="Fan speed 1" type="submit" class="btn btn-primary btn-lg power_1" name="o_power_1"></button>
				<button title="Fan speed 2" type="submit" class="btn btn-primary btn-lg power_2" name="o_power_2"></button>
				<button title="Fan speed 3" type="submit" class="btn btn-primary btn-lg power_3" name="o_power_3"></button>
				<button title="Light" type="submit" class="btn btn-primary btn-lg light" name="o_light"></button>
			</fieldset>
			<fieldset class="container form-group">
				<legend>Bedroom</legend>
				<button title="Fan speed 0" type="submit" class="btn btn-primary btn-lg power_0" name="b_power_0"></button>
				<button title="Fan speed 1" type="submit" class="btn btn-primary btn-lg power_1" name="b_power_1"></button>
				<button title="Fan speed 2" type="submit" class="btn btn-primary btn-lg power_2" name="b_power_2"></button>
				<button title="Fan speed 3" type="submit" class="btn btn-primary btn-lg power_3" name="b_power_3"></button>
				<button title="Light" type="submit" class="btn btn-primary btn-lg light" name="b_light"></button>
			</fieldset>
		</form>
	</body>
</html>

<pre>
<?php
    // $ini = parse_ini_file('fancontrol.ini');

    // $command = 'sudo '.$ini['sendook']
    //     .' -f '.$ini['frequency']
    //     .' -0 '.$ini['duration_0']
    //     .' -1 '.$ini['duration_1']
    //     .' -p '.$ini['pause']
    //     .' '.$ini['office'].$ini['light'];
    // $_ = shell_exec($command);
?>
</pre>