<?php
    $dir = __DIR__;
    exec("cd $dir && git pull 2>&1", $output);
    print_r($output);
