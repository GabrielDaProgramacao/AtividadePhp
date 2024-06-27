<!DOCTYPE html>
<html>
<head>
    <title>Data e Hora Atual</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            padding: 50px;
        }
        h1 {
            margin-bottom: 30px;
        }
        .datetime {
            font-size: 36px;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <h1>Data e Hora Atual</h1>
    <div class="datetime">
        <?php
            date_default_timezone_set('America/Sao_Paulo');
            echo date('d/m/Y H:i:s');
        ?>
    </div>
</body>
</html>