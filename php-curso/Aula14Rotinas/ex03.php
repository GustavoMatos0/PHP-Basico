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
        function soma(...$p){
           $t = func_num_args();
           $s = 0;
           for($i=0; $i<$t; $i++){
               $s += $p[$i];
           }
           return $s;
        }
        $r = soma(3,5,2,8,9,4);
        $s = soma(100,200,500,600);
        $f = soma(1000000,20000000,300000);
        echo "A soma vale : $r<br/>A soma vale $s</br>A soma vale $f";        
        ?>
    </body>
</html>