<?php
function areaTriangulo($base, $altura) {
    return ($base * $altura) / 2;
}

function areaRetangulo($largura, $altura) {
    return $largura * $altura;
}

function areaLosango($diagonalMaior, $diagonalMenor) {
    return ($diagonalMaior * $diagonalMenor) / 2;
}

function areaQuadrado($lado) {
    return $lado * $lado;
}

$baseTriangulo = 5;
$alturaTriangulo = 3;
$larguraRetangulo = 4;
$alturaRetangulo = 6;
$diagonalMaiorLosango = 8;
$diagonalMenorLosango = 5;
$ladoQuadrado = 4;

echo "Área do Triângulo: " . areaTriangulo($baseTriangulo, $alturaTriangulo) . "<br>";
echo "Área do Retângulo: " . areaRetangulo($larguraRetangulo, $alturaRetangulo) . "<br>";
echo "Área do Losango: " . areaLosango($diagonalMaiorLosango, $diagonalMenorLosango) . "<br>";
echo "Área do Quadrado: " . areaQuadrado($ladoQuadrado) . "<br>";
?>