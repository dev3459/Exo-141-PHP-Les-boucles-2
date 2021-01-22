<?php
$init = 0;
while($init < 10){
    echo $init . "<br>";
    $init++;
}

echo "<br>";

$a = 0;
$b = 55;
while($a < 20){
    echo $a * $b . "<br>";
    $a++;
}

echo "<br>";

$exo4 = 1;
while($exo4 < 10){
    echo $exo4 . "<br>";
    $exo4 = ($exo4 / 2) + $exo4;
}

echo "<br>";

$exo5 = 1;
while($exo5 < 16){
    echo "On y arrive presque $exo5 <br>";
    $exo5++;
}

echo "<br>";

$exo6 = 20;
while($exo6 > 0){
    echo "C'est presque bon $exo6 <br>";
    $exo6--;
}

echo "<br>";

$exo7 = 1;
while($exo7 < 101){
    echo "On tient le bon bout $exo7 <br>";
    $exo7 += 15;
}

echo "<br>";

$exo8 = 200;
while($exo8 > 0){
    echo "Enfin !!!! <br>";
    $exo8 -= 12;
}