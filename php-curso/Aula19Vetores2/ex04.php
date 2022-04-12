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
        <pre>
        <?php
        $t = str_repeat("-", 50);
        $v = array("A",3,4,"X","K");
        print_r($v);
        print "<br>$t</br>";
        //sort($v);//ordem crescente
        //rsort($v);//ordem decrescente
        //asort($v);//ordem crescente apenas dos valores
        //arsort($v);//ordem decrecente apenas dos valores
        //ksort($v);//ordem crescente apenas dos indices
        krsort($v);//ordem decrescente apenas dos indices;
        print_r($v);
        ?>
        </pre>
    </body>
</html>
