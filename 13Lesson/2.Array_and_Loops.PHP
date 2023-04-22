<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array and Loop</title>
</head>
<body>
    <?php
        $names = array("Jaxine", "Kenzie", "Kimi ");
        echo "<h2>List of Names:</h2>";
        echo "<br>";

        for ($i=0; $i < count($names); $i++){
            echo $names[$i];
            echo "<br>";
        }

        echo "<h2>List of Games:</h2>";

        $games = array("Valorant", "PUBG", "Genshin Impact", "Tower of Fantasy");

        foreach ($games as $game){
            echo $game;
            echo "<br>";
        }

        // FOR LOOP AND ORDER
        // FOR LOOP
        $anime = array("86", "Tsuki ga kirrei", "Oshi no ko", "Kubo-san");

        echo "<h2>List of Movies</h2>";

        for ($i=0; $i < count($anime); $i++){
            echo $i+1 . ". " . $anime[$i];
            echo "<br>";
        }
    ?>
</body>
</html>