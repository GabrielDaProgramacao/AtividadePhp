<?php
// Definindo as informações do livro
define("CODIGO_LIVRO", "8282");
$tipo_livro = "Páginas dinâmicas";
$autor_livro = "Marcos de Melo";
define("NUMERO_PAGINAS", 360);
?>

<html>
<head>
    <title>Informações do Livro</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body>
    <h1>Informações do Livro</h1>
    <p>Código: <?php echo CODIGO_LIVRO; ?></p>
    <p>Tipo: <?php echo $tipo_livro; ?></p>
    <p>Autor: <?php echo $autor_livro; ?></p>
    <p>Número de Páginas: <?php echo NUMERO_PAGINAS; ?></p>
</body>
</html>

<!-- Este código define um array associativo chamado $livros, com as chaves "Código", "PHP", "Autor" e "Páginas"-->