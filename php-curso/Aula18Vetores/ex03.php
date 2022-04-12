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
        $v = array(3 => 5,
                   1 => 9,
                   0 => 8,
                   7 => 7);
        unset ($v[0]);
        print_r($v);
        ?>
        </pre>
    </body>
</html>
