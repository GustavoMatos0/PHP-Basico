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
        $site = "Curso em Video";
        $sub = substr($site, 0, 5);//Começa na posição ZERO e anda CINCO letras an string
        $sub2 = substr($site, 7);//Posição SETE em diante
        $sub3 = substr($site, -5);//Ultimas CINCO letras da string
        $sub4 = substr($site, -5, 2);//Considerar as CINCO ultimas letras, e pegar o valor de DUAS delas
        print "$sub4 ";
        ?>
    </body>
</html>
