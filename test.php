<?php
ini_set('display_errors',1);
ini_set('display__startup_errors',1);
error_reporting(E_ALL);


function test(){
    static $a = 0;
    return $a++;
}

echo (test());
echo (test());
echo (test());