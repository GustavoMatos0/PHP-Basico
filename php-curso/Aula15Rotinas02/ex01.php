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
        function teste(&$x){
            $x+= 2;
            echo "<p>O valor de [x] é $x</p>";
        }
        $a = 3;
        teste($a);
        echo"<p>O valor de [a] é $a</p>";
        ?>
    </body>
</html>
