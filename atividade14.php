<!DOCTYPE html>
<html>
<head>
    <title>Informações do Curso</title>
</head>
<body>
    <h1>Informações do Curso</h1>

    <?php
    $curso = array(
        "nome" => "PHP 5",
        "data" => "2024-06-27",
        "carga_horaria" => "40 horas",
        "local" => "Online"
    );

    foreach ($curso as $chave => $valor) {
        echo "$chave: $valor<br>";
    }
    ?>
</body>
</html>