<!DOCTYPE html>
<html>
<head>
    <title>Cálculo de Área e Perímetro de Retângulo</title>
</head>
<body>
    <h1>Cálculo de Área e Perímetro de Retângulo</h1>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $lado1 = $_POST["lado1"];
        $lado2 = $_POST["lado2"];
        $area = $lado1 * $lado2;
        $perimetro = 2 * ($lado1 + $lado2);
        echo "Área do retângulo: " . $area . " unidades quadradas<br>";
        echo "Perímetro do retângulo: " . $perimetro . " unidades<br>";
    } else {
        echo '<form method="post" action="' . htmlspecialchars($_SERVER["PHP_SELF"]) . '">';
        echo '<label for="lado1">Lado 1:</label>';
        echo '<input type="text" id="lado1" name="lado1"><br><br>';
        echo '<label for="lado2">Lado 2:</label>';
        echo '<input type="text" id="lado2" name="lado2"><br><br>';
        echo '<input type="submit" value="Calcular">';
        echo '</form>';
    }
    ?>
</body>
</html>