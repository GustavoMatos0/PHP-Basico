<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <h1>Varialvel de Variavel</h1>
        <style>
            h1 {
                color:crimson;
            }
        </style>
    </head>
    <body>
     <?php
     $site = "cursoemvideo";
     $$site = "CursoPHP";
     echo "A variavel 'site' é :$site";
     echo "<br>A variavel da variavel site(cursoemvideo) é : $cursoemvideo";
     ?>
    </body>
</html>