<?php
    //get the directory list of /proc
    $arr = scandir("/proc/");
    //loop to sort the array $arr
    for($x=0;$x<10000;$x++){
        asort($arr);

    }
    echo "server1";
?>
