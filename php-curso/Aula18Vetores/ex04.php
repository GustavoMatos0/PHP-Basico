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
        $v = array("nome" => "Ana",
                   "idade" => 23,
                   "peso" => 65.5);
               foreach ($v as $k => $c){
                 print "<br>$k:$c";
               }
        ?>
        </pre>
    </body>
</html>
