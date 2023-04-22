<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conditional Statement</title>
</head>
<body>
    <center>
    <h1>
        <?php
            $number1 = 100;

            if($number1 < 30){
                echo "The frist number is less than 30.";
            }
            else if($number1 < 40){
                echo "The frist number is less than 40";
            }

            else if($number1 <50){
                echo "The frist number is less than 50";
            }

            else{
                echo "The frist number greater than 50";
            }
        ?>
    </h1>
    </center>
</body>
</html>