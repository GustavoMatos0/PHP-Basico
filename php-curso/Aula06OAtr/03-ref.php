<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <h1>Varialvel de Referencia</h1>
        <style>
            h1 {
                color:crimson;
            }
        </style>
    </head>
    <body>
        <?php
        $a = 3;
        $b = &$a;
        $b += 5;
        echo "Valor de a = $a";
        echo "<br>valor de b = $b";
        ?>
    </body>
</html>
