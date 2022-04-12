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
        $frase = "Estou aprendendo PHP";
        $pos = strpos($frase, "PHP");//Encontra a string com a caixa igual
        $pos1 = stripos($frase, "php");//Econtra a string indenpendente da caixa
        print "$frase <br/>A string foi encontrada na posição $pos1";
        ?>
    </body>
</html>
