<?php
    $dir = __DIR__;
    exec("cd $dir && git pull 2>&1", $output);
    echo $output;
