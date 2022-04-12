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
        $frase = "Eu vou estudar PHP agora";
        $cont = str_word_count($frase,0);//conta as palavras
        $cont1 = str_word_count($frase,1); //cria um vetor
        $cont2 = str_word_count($frase,2);// vetor mantendo cada palavra na posiçao da string
        print "$cont <br/>";
        print_r($cont1);
        echo "<br/>";
        print_r($cont2);
        ?>
    </body>
</html>
