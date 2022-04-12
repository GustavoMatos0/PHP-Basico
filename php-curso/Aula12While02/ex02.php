<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <?php
       $v = isset($_GET["val"])?$_GET["val"]:1;
       echo "<h1>Calculando o fatorial de $v</h1>";
       $c = $v;
       $f =1;
       echo $v;
       do{
          $f = $f * $c;
          $c--;
         if($c != 0){
             echo " x $c ";
         }
       }while($c>=1);
       echo"<h2>$v ! = $f</h2>";
    ?>
    <p><a href="ex02.html">Voltar</a></p>
</div>
</body>
</html>
 