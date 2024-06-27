<?php
$numero = null;
$resultado = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero = $_POST["numero"];

    if ($numero !== null && $numero !== "") {
        if ($numero % 10 == 0 && $numero % 5 == 0 && $numero % 2 == 0) {
            $resultado = "O número $numero é divisível por 10, 5 e 2.";
        } elseif ($numero % 10 == 0) {
            $resultado = "O número $numero é divisível por 10.";
        } elseif ($numero % 5 == 0) {
            $resultado = "O número $numero é divisível por 5.";
        } elseif ($numero % 2 == 0) {
            $resultado = "O número $numero é divisível por 2.";
        } else {
            $resultado = "O número $numero não é divisível por 10, 5 ou 2.";
        }
    }
}
?>

<html>
<head>
    <title>Divisibilidade</title>
</head>
<body>
    <h1>Divisibilidade</h1>
    <form method="post" action="">
        <label for="numero">Número:</label>
        <input type="number" id="numero" name="numero"><br><br>
        <input type="submit" value="Verificar Divisibilidade">
    </form>

    <?php if ($numero !== null && $numero !== "" && $resultado !== "") { ?>
        <p><?php echo $resultado; ?></p>
    <?php } ?>
</body>
</html>