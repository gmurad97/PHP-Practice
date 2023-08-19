<?php

//LOOP EXAMPLE

//WHILE

/* $expr = 1;

while($expr <= 10){
    echo $expr++ . "<br>";
} */

//================================================== */

//DO WHILE

/* $expr = 1;

do {
    echo $expr++ . "<br>";
} while ($expr <= 10); */

//================================================== */

//FOR

/* for($i = 1; $i <= 10; $i++){
    echo $i . "<br>";
} */

//================================================== */

//FOREACH

/* $arr = ["1","2","3","4","5","6","7","8","9","10"];

foreach($arr as $arrItem){
    echo $arrItem . "<br>";
} */

//================================================== */

/* $assocArray = [
    "brand"     => "Mercedes-Benz",
    "model"     => "S600 Brabus",
    "engine"    => "V12 Engine 1000+ HP",
    "year"      => "2023"
];

foreach($assocArray as $assocArrayKey => $assocArrayVal){
    echo "Key:" . $assocArrayKey . " => Value:" . $assocArrayVal . "<br>";
} */

//================================================== */

//BREAK & CONTINUE

//BREAK

/* $z = 0;

for(;;){
    echo $z . "<br>";
    if($z >= 10){
        break;
    }
    $z++;
} */

/* for($z = 0; $z <= 10;$z++){
    if($z == 5){
        continue;
    }
    echo $z . "<br>";
} */