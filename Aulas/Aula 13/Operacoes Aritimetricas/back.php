<?php
$a = 2;
$b = 5;
$c = -3;


$delta = ($b * $b) - 4 * $a * $c;

if ($delta < 0) {
    echo "Não existem raízes reais.";
} elseif ($delta == 0) {
    $x1 = -$b / (2 * $a);
    $x2 = $x1;
    echo "X1 = $x1 , X2 = $x2";
} else {
    $x1 = (-$b + sqrt($delta)) / (2 * $a);
    $x2 = (-$b - sqrt($delta)) / (2 * $a);
    echo "X1 = $x1 , X2 = $x2";
}
?>