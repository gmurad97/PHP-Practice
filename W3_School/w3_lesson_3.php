<?php

/* declare(strict_types=1); */

//FUNCTION

/* function myFunc($a, $b)
{
    // return $a + $b;
    // return max($a,$b);
    // return min($a,$b);
}

echo myFunc(10, 19); */

/* function myFunc(int $a, string $b, float $c, bool $d)
{
    //code...
} */

/* function myFunc(int $a, int $b):int
{
    return (int)($a + $b);
}

echo myFunc(10, 19); */

/* function myFunc($a = 5, $b = 0) //default value for args...
{
    //code
} */

//Passing Arguments by Reference

/* $val = 10;

function myFunc($arg){
    return $arg **= 2;
}

echo myFunc($val) . "<br>";
echo $val;//NOT CHANGED */


/* $val = 10;

function myFunc(&$arg){
    return $arg **= 2;
}

echo myFunc($val) . "<br>";
echo $val;//CHANGED */
