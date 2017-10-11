<?php
$i = 1;
$p = "";
for ($i; $i < 13; ++$i) {
    if($i < 10){
        $p = "0" . $i;
        echo "<a href=patroon-" . $p .".php" .">" .$p  ."</a>" . PHP_EOL;
    }else if($i>= 10){
        $p = $i;
        echo "<a href=patroon-" . $p .".php" .">" .$p  ."</a>" . PHP_EOL;
    }
 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Patronen • Jordy Van der Haegen</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>

</body>
</html>