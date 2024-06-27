<?php
$numeros = array(
    "num1" => 0,
    "num2" => 0
);
?>

<html>
<head>
    <title>Algoritmo de Soma</title>
</head>
<body>
    <h1>Algoritmo de Soma</h1>
    <form method="post" action="">
        <label for="num1">Número 1:</label>
        <input type="number" id="num1" name="num1" required><br><br>
        <label for="num2">Número 2:</label>
        <input type="number" id="num2" name="num2" required><br><br>
        <input type="submit" value="Calcular Soma">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numeros["num1"] = $_POST["num1"];
        $numeros["num2"] = $_POST["num2"];

        if (!empty($numeros["num1"]) && !empty($numeros["num2"])) {
            $soma = $numeros["num1"] + $numeros["num2"];

            if ($soma > 20) {
                $soma += 8;
                echo "A soma dos dois números, acrescida de 8, é: " . $soma;
            } else {
                $soma -= 5;
                echo "A soma dos dois números, subtraída de 5, é: " . $soma;
            }
        }
    }
    ?>
</body>
</html>