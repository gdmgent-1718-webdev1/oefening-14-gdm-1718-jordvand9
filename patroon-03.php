<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Patroon 3 • Jordy Van der Haegen</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
<?php
$xpos= 50;
$ypos=50;

for ($row=1; $row < 10; $row++) { 
    for($col=1; $col <= $row; $col++){
        echo "<div class='red'></div>";
    }
    echo "<br>";
}
?>
</svg>
</body>
</html>