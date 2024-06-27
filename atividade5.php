<?php
$informacoes_pessoa = array(
    "nome" => "João da Silva",
    "idade" => 35,
    "salario" => 5000.00
);
?>

<html>
<head>
    <title>Informações da Pessoa</title>
</head>
<body>
    <h1>Informações da Pessoa</h1>
    <p>Nome: <?php echo $informacoes_pessoa['nome']; ?></p>
    <p>Idade: <?php echo $informacoes_pessoa['idade']; ?></p>
    <p>Salário: <?php echo $informacoes_pessoa['salario']; ?></p>
</body>
</html>