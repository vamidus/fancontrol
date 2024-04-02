<pre>

<?php
    $ini = parse_ini_file('fancontrol.ini');

    $t = 'sudo '.$ini['sendook'].' -f '.$ini['frequency'].' -0 '.$ini['duration_0'].' -1 '.$ini['duration_1'].' -p '.$ini['pause'].' '.$ini['office'].$ini['light'];
    echo $t;
    $output = shell_exec($t);
    //print_r($output);
    echo $output; 
?>

</pre>
