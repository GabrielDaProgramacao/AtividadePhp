<!DOCTYPE html>
<html>
<head>
    <title>Capitais da Região Sul</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <h1>Capitais da Região Sul</h1>

    <?php
        $estado = array(
            "PR" => "Curitiba",
            "SC" => "Florianópolis",
            "RS" => "Porto Alegre"
        );

        foreach ($estado as $sigla => $capital) {
            echo "<div class='capital'>" . $sigla . " - " . $capital . "</div>";
        }
    ?>

</body>
</html>