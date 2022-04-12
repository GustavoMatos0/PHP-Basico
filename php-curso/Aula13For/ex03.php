<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form method="get" action="ex03part1.php">
            <select name="num">
                <?php
                for ($i = 1; $i<=20; $i++){
                    echo "<option>$i</option>";
                }
                ?>
            </select>
            <input type="submit" value="Primo"/>
        </form>
        <?php    
        ?>
    </body>
</html>
