<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
</head>
<body>
    <center>
        <h1>
            <?php
                $favgames = array("Valorant", "Genshin Impact");
                
                echo "Lust of all games: ";

                print_r($favgames);

                echo "<br>";
                echo "My favorite games is: ";
                echo "<br>";
                echo $favgames [1];
            ?>
        </h1>
    </center>
</body>
</html>