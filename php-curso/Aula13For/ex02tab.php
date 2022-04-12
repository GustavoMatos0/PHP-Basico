<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
     <?php  
     $n = isset($_GET["num"])?$_GET["num"]:1;
     for ($c=1; $c<=10; $c++){
         $r = $n * $c;
         echo "$n x $c = $r<br/>";
     }
     ?>
        <a href="ex02.php">Voltar</a>
    </body>
</html>
