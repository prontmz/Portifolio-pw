<?php
echo"<h1>Ola php</h1>";
$a=1;
$b=5;
$c=6;
$soma=$a+$b;
echo"Soma: $soma";
echo"<br>";

$delta=($b*$b)-(4*$a*$c);
echo"O delta e igual: $delta";
echo"<br>";
$dia=1;
switch($dia){
    case 1:
        echo"Hoje e Domingo";
        break;
    case 2:
        echo"Hoje e Segunda";
        break;
    case 3:
        echo"Hoje e Terca ";
        break;
    case 4:
        echo"Hoje e Quarta ";
        break;
    case 5:
        echo"Hoje e Quinta";
        break;
    case 6:
        echo"Hoje e sexta";
        break;
    case 7:
        echo"Hoje e Sabado";
        break;        
}


?>