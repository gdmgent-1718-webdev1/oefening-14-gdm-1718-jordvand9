<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Patroon 6 • Jordy Van der Haegen</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
<?php
    $color = array("blue","red","green");
    for($row = 1;$row <=10; $row++){
        for($col = 1; $col <= 10; $col++){
            echo "<div class=". $color[$col%3] ."></div>";
        }
        echo "<br>";
    }
    ?>
</body>
</html>