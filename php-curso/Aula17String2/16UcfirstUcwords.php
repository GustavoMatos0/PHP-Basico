<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $nome = "gustavo matos";
        $nome2 = ucfirst(strtolower($nome));//Primeira letra da string para maiscula
        $nome3 = ucwords($nome);//Primeira letra de cada palavra da string para maiscula 
        print "<p>Seu nome é $nome2</p>";
        print "<p>Seu nome é $nome3</p>";
        ?>
    </body>
</html>
