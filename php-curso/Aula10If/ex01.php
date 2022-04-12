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
        $n = isset($_GET["num"])?$_GET["num"]:0;
        $o = isset($_GET["oper"])?$_GET["oper"]:1;
        switch($o){
            case 1:
                $r = $n*2;
                break;
            case 2:
                $r = $n^3;
                break;
            case 3:
                $r = sqrt($n);
        }
        echo "O resultado da operção solicitada foi " . number_format($r, 2);
        ?>
        <a href="ex01.html">voltar</a>
    </body>
</html>
