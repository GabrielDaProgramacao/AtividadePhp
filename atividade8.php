<?php
$nome = null;
$sexo = null;
$idade = null;
$mensagem = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $sexo = $_POST["sexo"];
    $idade = $_POST["idade"];

    if ($nome !== null && $sexo !== null && $idade !== null) {
        if ($sexo == "feminino" && $idade < 25) {
            $mensagem = "ACEITA";
        } else {
            $mensagem = "NÃO ACEITA";
        }
    }
}
?>

<html>
<head>
    <title>Entrada de Dados</title>
</head>
<body>
    <h1>Entrada de Dados</h1>
    <form method="post" action="">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome"><br><br>
        <label for="sexo">Sexo:</label>
        <select id="sexo" name="sexo">
            <option value="">Selecione</option>
            <option value="feminino">Feminino</option>
            <option value="masculino">Masculino</option>
        </select><br><br>
        <label for="idade">Idade:</label>
        <input type="number" id="idade" name="idade"><br><br>
        <input type="submit" value="Enviar">
    </form>

    <?php if ($nome !== null && $sexo !== null && $idade !== null && $mensagem !== "") { ?>
        <p>Nome: <?php echo $nome; ?> - <?php echo $mensagem; ?></p>
    <?php } ?>
</body>
</html>