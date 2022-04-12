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
        $t = "Aqui temos um texo grande criado pelo php que vai mostrar a função wordwrap";
        $r = wordwrap($t,5 ,"<br/>\n", true);//false = quebra por palavra
        echo $r;
        ?>
    </body>
</html>
