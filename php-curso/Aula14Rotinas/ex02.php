<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Rotina</title>
    </head>
    <body>
        <?php
        function soma($a,$b){
           return $a+$b;;
        }
        $x=3;
        $y=8 ;
        $r = soma($x, $y);
        echo "A soma entre $x e $y é = $r";
        ?>
    </body>
</html>