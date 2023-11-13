<?php
    if (empty($_REQUEST['key']) || $_REQUEST['key'] != 'DeszjuoQ') {
        print_r('Permission denied');
        die();
    }
    $dir = __DIR__;
    exec("cd $dir && git pull 2>&1", $output);
    print_r($output);
