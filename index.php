<?php
    $ini = parse_ini_file('fancontrol.ini');

    echo "<pre>";
    echo $ini['sendook'];
    echo "</pre>";

    $output = shell_exec($ini['sendook'] . ' -h');
    echo $output;
?>