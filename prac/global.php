<?php
$x = 5;
$y = 10;

function myTest() {
    global $x, $y;
    $y = $x + $y;
}



function myTest1() {
    $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
} 

myTest();
echo $y; // outputs 15

echo "<br> <br>";

myTest1();
echo $y; // outputs 20 as y was already 15
?>


