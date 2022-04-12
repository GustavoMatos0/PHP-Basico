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
        $t = str_repeat("-", 50);
        $frase = "Gosto de estudar Matemática";
        $novafrase = str_ireplace("matemática", "PHP", $frase);
        print "$t<br>$frase<br/>$novafrase<br>$t";
        ?>
    </body>
</html>
