<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <h1>Operadores</h1>
        <style>
            h1 {
                color:crimson;
            }
        </style>
    </head>
    <body>
        <?php
        /*$preço = $_GET["p"];
        echo "O preço do produto é R$ " . number_format($preço, 2, ",", ".");
        $preço -= ($preço*0.1);
        echo "<br>E o novo preço com 10% desconto sera R$" . number_format($preço, 2, ",", ".");
         */
        
        $anoatual = $_GET["a"];  #vem da URL
        echo "Ano atual foi:" . $anoatual-- . " e o ano anterior foi :$anoatual";
        ?>
    </body>
</html>
