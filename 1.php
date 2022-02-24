<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<link rel="stylesheet" href="style.css">
</head>
<body>


<div class="d1">
<?php


$day = date("Y-m-d H-i-s");

$dane_zapis = $day . "\n";

$file = fopen("aktualny.txt", "w+") or die("nie można otworzyć pliku");

fwrite($file, $dane_zapis);

fclose($file);

echo "do pliku aktualny.txt dopisałeś " .  $day;


?>
</div>
    
</body>
</html>