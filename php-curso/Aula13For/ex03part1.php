<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
     <?php 
     $r="";
     $totm = 0;
     $n = isset($_GET["num"])?$_GET["num"]:1;
     echo "<h1>Analizando o número $n</h1>";
     echo "Valores Multiplos: ";
     for ($c=1; $c<= $n; $c++){
         if($n==1){
             $r="Nao é Primo";
         }elseif($n%$c==0){
            $totm++;
            echo "$c ";
         }elseif($n%$c==0 && $n%$n==0){
             $r= "Número primo";
         }else{
          $r = "Não é primo";
     }
     }
     echo "<br>Total de multiplos $totm<br/>";
     echo "O numero $n $r<br/>";
     ?>
        <a href="ex03.php">Voltar</a>
    </body>
</html>
