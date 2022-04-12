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
         $ano = $_GET["a"];
         $idade = 2022 - $ano;
         echo "A idade é $idade anos e o voto é " . (($idade>=18 && $idade<65)?"Obrigatório":"Não obrigatório");
        ?>
    </body>
</html>