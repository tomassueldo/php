<?php

function test(){
    static $a = 0;
    return $a+=1;
}

echo (test() ."<br>");
echo (test() ."<br>");
echo (test() ."<br>");