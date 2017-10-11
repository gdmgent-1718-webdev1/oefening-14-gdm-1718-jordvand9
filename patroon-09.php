<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Patroon 9 • Jordy Van der Haegen</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
<?php
$color = array("blue","red","green");
    for ($row=1; $row < 10; $row++) { 
        for($col=1; $col < 10 ; $col++)
        {
            if (10 - $row == $col || $row == $col) {
                $kleur = $color[1];
            } else if ( 10 - $col > $row) {
                $kleur = $color[0];
            } else {
                $kleur = $color[2];
            }
            echo "<div class=". $kleur ."></div>";
        }
        echo "<br>";
    }
    ?>
</body>
</html>