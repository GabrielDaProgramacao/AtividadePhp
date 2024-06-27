<?php
$informacoes_livros = array(
    array(
        "codigo" => "8282",
        "livro" => "PHP",
        "autor" => "Marcos de Melo",
        "paginas" => 360
    ),
    array(
        "codigo" => "8283", 
        "livro" => "HTML5",
        "autor" => "Ernandes Silva",
        "paginas" => 266
    ),
    array(
        "codigo" => "8284",
        "livro" => "jQuery",
        "autor" => "Nicoly Almeida", 
        "paginas" => 159
    ),
    array(
        "codigo" => "8285",
        "livro" => "CSS",
        "autor" => "Juliana Aparecid",
        "paginas" => 123
    )
);
?>

<html>
<head>
    <title>Informações dos Livros</title>
</head>
<body>
    <h1>Informações dos Livros</h1>
    <table>
        <tr>
            <th>Código</th>
            <th>Livro</th>
            <th>Autor</th>
            <th>Páginas</th>
        </tr>
        <?php foreach ($informacoes_livros as $livro): ?>
        <tr>
            <td><?php echo $livro['codigo']; ?></td>
            <td><?php echo $livro['livro']; ?></td>
            <td><?php echo $livro['autor']; ?></td>
            <td><?php echo $livro['paginas']; ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>