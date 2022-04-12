<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Integração HTML + PHP</title>
    </head>
    <body>
        <?php
           $nome = isset($_GET["nome"])?$_GET["nome"]:"[nao informado]";
           $ano = isset($_GET["ano"])?$_GET["ano"]:0;
           $sexo = isset($_GET["sexo"])?$_GET["sexo"]:"[nao informado]";
           $idade = date("Y") - $ano;
           echo "$nome é um(a) $sexo e tem $idade anos";
           
           ?>
        <a href="02ex.html">Voltar</a>
    </body>
</html>
