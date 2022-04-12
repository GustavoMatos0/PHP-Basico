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
        <table border="10"><tr> 
        <pre>
        <?php
        $c = range(5,20,2);
        foreach ($c as $v){
            print "<td>$v ";
        }
        ?>
        </table>
        </pre>
    </body>
</html>
