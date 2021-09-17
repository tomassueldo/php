<?php

function test(){
    static $a = 0;
    return ++$a; //primero incrementa desp asigna

}

echo (test() . "<br>");
echo (test() . "<br>");
echo (test() . "<br>");

