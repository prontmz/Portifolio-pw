<!DOCTYPE html>
<html lang="pt-MZ">

<head>
    <meta charset="UTF-8">
    <title>Verificador de Idade</title>

</head>

<body>
    <div class="container">
        <h2>Verificador de Idade</h2>
        <form method="post" action="">
            <label>Nome:</label>
            <input type="text" name="nome" required>

            <label>Idade:</label>
            <input type="number" name="idade" required>

            <label>Sexo:</label>
            <select name="sexo" required>
                <option value="">Selecione</option>
                <option value="Masculino">Masculino</option>
                <option value="Feminino">Feminino</option>
            </select>

            <input type="submit" value="Verificar">
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nome = $_POST['nome'];
            $idade = $_POST['idade'];
            $sexo = $_POST['sexo'];

            echo "<div class='resultado'>";
            echo "<strong>Olá $nome!</strong><br>";
            echo "Sexo: $sexo<br>";
            if ($idade < 18) {
                echo "Idade: $idade anos - Menor de idade";
            } else {
                echo "Idade: $idade anos - Maior de idade";
            }
            echo "</div>";
        }
        ?>
    </div>
</body>

</html>