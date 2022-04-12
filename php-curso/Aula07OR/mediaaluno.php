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
         $m = ($n1+$n2) / 2;
         echo "A média do aluno é: $m<br/>";
         echo  "Aluno " . ($m>6?"Aprovado":"Reprovado");

        ?>
    </body>
</html>