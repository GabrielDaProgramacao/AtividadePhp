<?php
// Definindo variáveis
define("NOME_ALUNO", "Maria Fernanda");
$endereco = "Rua das Violetas, 320";
$cidade = "Campinas";
$estado = "SP";
$cep = "13.181-659";
$telefone = "(19) 8888-9696";
$celular = "(19) 3854-3695";
define("RG", "28.290.355-X");
define("CPF", "123.653.659-98");
define("PIS", "84523568888");
?>

<html>
<head>
    <title>Informações do Aluno</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body>
    <h1>Informações do Aluno</h1>
    <p>Nome completo: <?php echo NOME_ALUNO; ?></p>
    <p>Endereço: <?php echo $endereco; ?></p>
    <p><?php echo "$cidade - $estado - CEP: $cep"; ?></p>
    <p>Telefone: <?php echo $telefone; ?></p>
    <p>Celular: <?php echo $celular; ?></p>
    
    <h2>Documentos</h2>
    <p>RG: <?php echo RG; ?></p>
    <p>CPF: <?php echo CPF; ?></p>
    <p>PIS: <?php echo PIS; ?></p>
</body>
</html>