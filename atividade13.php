<!DOCTYPE html>
<html>
<head>
    <title>Programa PHP</title>
</head>
<body>
    <h1>Valores das Variáveis</h1>

    <?php
        $a = 2;
        $b = 4;
        $c = 6;
        $x = --$c + $b;
        $y = $b++ + $a;
        $z = $a - $b--;

        echo "Valores das variáveis:<br>";
        echo "\$a = $a<br>";
        echo "\$b = $b<br>";
        echo "\$c = $c<br>";
        echo "\$x = $x<br>";
        echo "\$y = $y<br>";
        echo "\$z = $z<br>";
    ?>
</body>
</html>