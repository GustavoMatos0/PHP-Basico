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
        $m = array(array(6,4),
                   array (4,9),
                   array(3,2));
        $m[0][1] = $m[2][0];
        print_r($m);
        ?>
        </pre>
    </body>
</html>