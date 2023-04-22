<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loops</title>
</head>
<body>
    <center>
        <h1>Types of loops</h1>
        
        <?php
            // Three Types of loops:
            // 1. While Loop
            // 2. Do...While...Loop
            // 3. For Loop

            echo "<h2>While Loop</h2>";

            $counter = 0;
            while ($counter < 10){
                echo "This is an example of while loops";
                echo "<br>";
                $counter++;
            }

            echo "<br>";
            echo "<h2>Do While Loop</h2>";
            echo "<br>";

            $counter2 = 0;
            do{
                echo "This is an example of while loops";
                echo "<br>";
                $counter2++;
            }
            while($counter2 < 10);
            
            // FOR LOOP

            echo "<br>";
            echo "<h2>Do While Loop</h2>";
            echo "<br>";

            for ($counter3=0; $counter3<5; $counter3++){
                echo "<i>This is an example of while loops</i>";
                echo "<br>";
            }

        ?>

    </center>
</body>
</html>