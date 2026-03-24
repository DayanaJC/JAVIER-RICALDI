<?php
$n = 10; 
$a = 0;
$b = 1;

echo "Serie Fibonacci: ";

for ($i = 0; $i < $n; $i++) {
    echo $a . " ";
    $temp = $a + $b;
    $a = $b;
    $b = $temp;
}
?>