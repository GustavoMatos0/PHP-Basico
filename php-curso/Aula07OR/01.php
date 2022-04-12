<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Operadores Relacionais</title>
        <h1>Operadores Relacionais</h1>
    </head>
    <body>
        <?php
        $n1 = $_GET["a"];
        $n2 = $_GET["b"];
        $tipo = $_GET["op"];
        echo "Os valores passados foram $n1 e $n2<br/>";
        $r = ($tipo == "s")?$n1+$n2:$n1*$n2; 
        echo "O resultado é $r";
        ?>
    </body>
</html>
