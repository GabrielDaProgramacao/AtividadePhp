<?php
$lado1 = null;
$lado2 = null;
$lado3 = null;
$classificacao = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $lado1 = $_POST["lado1"];
    $lado2 = $_POST["lado2"];
    $lado3 = $_POST["lado3"];

    if ($lado1 !== null && $lado2 !== null && $lado3 !== null) {
        if ($lado1 == $lado2 && $lado2 == $lado3) {
            $classificacao = "Triângulo Equilátero";
        } elseif ($lado1 == $lado2 || $lado1 == $lado3 || $lado2 == $lado3) {
            $classificacao = "Triângulo Isósceles";
        } else {
            $classificacao = "Triângulo Escaleno";
        }
    }
}
?>

<html>
<head>
    <title>Classificação de Triângulo</title>
</head>
<body>
    <h1>Classificação de Triângulo</h1>
    <form method="post" action="">
        <label for="lado1">Lado 1:</label>
        <input type="number" id="lado1" name="lado1"><br><br>
        <label for="lado2">Lado 2:</label>
        <input type="number" id="lado2" name="lado2"><br><br>
        <label for="lado3">Lado 3:</label>
        <input type="number" id="lado3" name="lado3"><br><br>
        <input type="submit" value="Classificar">
    </form>

    <?php if ($classificacao !== "") { ?>
        <p>O triângulo é: <?php echo $classificacao; ?></p>
    <?php } ?>
</body>
</html>