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
        $frase = "Estou aprendendo PHP no Curso em Video de PHP";
        $cont = substr_count($frase, "PHP");
        print "$frase <br/>[PHP] encontrado $cont vezes";
        ?>
    </body>
</html>
