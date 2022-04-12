<html>
    <head>
        <meta charset="UTF-8">
        <title>Operações Aritméticas</title>
        <h1>Operadores Aritméticos</h1>
    </head>
    <body>
        <?php
          $n1 = $_GET["a"];//passar parametro na URL
          $n2 = $_GET["b"];//passar parametro na URL
          $m = ($n1+$n2) /2;
          echo "<h2>Valores recebidos: $n1 e $n2</h2>";
          echo "A soma vale ".($n1+$n2);
          echo "<br/>A subtração vale ". ($n1-$n2);
          echo "<br/>A multiplicação vale ". ($n1*$n2);
          echo "<br/>A divisão vale ". ($n1/$n2);
          echo "<br>O modulo vale ". ($n1%$n2);
          echo "<br>A média vale $m";
          ?>
    </body>
</html>
