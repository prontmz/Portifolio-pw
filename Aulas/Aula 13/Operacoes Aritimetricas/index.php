<?php 
$nome="Emerson Ibraimo Cardoso";
$idade=18;
$altura=1.80;
$temProfissao=false;
$texto="Hello php";

echo"Dados Pessoais ";
echo"<br>";
echo " Nome Completo: $nome";
echo"<br>";
echo"Idade:$idade";
echo"<br>";
echo"Mede: $altura";

echo"<p>Eu sou mau</p>";

if($idade<=18){
    echo"Nao pode entrar e menor idade <br>";
}else{
    echo"Maior de idade pode entrar <br> ";
}
$nota = 17;

if ($nota >= 18) {
    echo "Parabéns! Passaste com distinção.<br>";
} elseif ($nota >= 10) {
    echo "Passaste na disciplina.<br>";
} else {
    echo "Infelizmente, reprovaste.<br>";
}
?>