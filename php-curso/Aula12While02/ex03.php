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
       $c= 1;
       do{
           $res = $v*$c;
           echo "$v x $c = $res<br/>";
           echo "<br/>";
           $c++;
       }while($c<=10);
    ?>
    <p><a href="ex03.html">Voltar</a></p>
</div>
</body>
</html>