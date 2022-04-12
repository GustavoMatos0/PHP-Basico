<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style>
            h1 {
                color:#0000ff
            }
        </style>
    </head>
    
        <?php
         $d = isset($_GET["ds"])?$_GET["ds"]:0;
         switch($d){
             case 2:
             case 3:
             case 4:
             case 5:
             case 6:
                 $dia = "Estudo";
                 break;
             case 7:
             case 1:
                 $dia = "Descanço";
                 break;
             default:
                 $dia = "[INVALIDO]";
         }
         echo "<h1>Dia de $dia</h1>";
        ?>
        <br/><a href="ex02.html">VOLTAR</a>
    
</html>
