<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>If</title>
    </head>
    <body>
        <?php
         $a = isset($_GET["ano"])?$_GET["ano"]:1900;
         $i = date("Y") - $a;
         echo "Voce nasceu em $a e tera $i anos.<br/>";
         if($i<16){
             $t = "nao vota";
         }elseif(($i>=16 && $i<18) || ($i>65)){
                $t = "voto opcional";
             } else {
                $t = "voto obrigatorio"; 
             }
         
         echo "Com essa idade, $t";
        ?>
    </body>
</html>
