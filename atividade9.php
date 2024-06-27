<?php
$num1 = null;
$num2 = null;
$num3 = null;
$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $num3 = $_POST["num3"];

    if ($num1 !== null && $num2 !== null && $num3 !== null) {
        $numbers = array($num1, $num2, $num3);
        rsort($numbers); // Ordena os números em ordem decrescente
        $message = "Números em ordem decrescente: " . implode(", ", $numbers);
    }
}
?>

<html>
<head>
    <title>Entrada de Números</title>
</head>
<body>
    <h1>Entrada de Números</h1>
    <form method="post" action="">
        <label for="num1">Número 1:</label>
        <input type="number" id="num1" name="num1"><br><br>
        <label for="num2">Número 2:</label>
        <input type="number" id="num2" name="num2"><br><br>
        <label for="num3">Número 3:</label>
        <input type="number" id="num3" name="num3"><br><br>
        <input type="submit" value="Enviar">
    </form>

    <?php if ($message !== "") { ?>
        <p><?php echo $message; ?></p>
    <?php } ?>
</body>
</html>