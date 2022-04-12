<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Integração HTML + PHP</title>
    </head>
    <body>
        <?php
        $valor = $_GET["v"];
        $rq = sqrt($valor);
        echo "A raiz quadrada de $valor é igual a: " . number_format($rq,2);
        ?>
        <a href="01.html">Voltar</a>
    </body>
</html>
