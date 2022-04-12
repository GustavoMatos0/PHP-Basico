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
        //array_push($v,5); //add elemento no fim
        array_pop($v); //tira elemento do fim
        print_r($v);
        ?>
        </pre>
    </body>
</html>
