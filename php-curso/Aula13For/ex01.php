<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>For</title>
    </head>
    <body>
        <?php
        
        for($c=1; $c<=10; $c++){
            echo "$c ";
        }
        echo "<br/>";
        for($c=10; $c>=1; $c--){
            echo "$c ";
        }
        echo "<br/>";
        for($c=0; $c<=50; $c+=5){
            echo "$c ";
        }
        echo "<br/>";
        for($c=30; $c>=0; $c-=2){
            print "$c ";
        }
        ?>
    </body>
</html>
