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

error_reporting(E_ALL & ~E_WARNING & ~E_NOTICE);

/*    tablice
 Array
(
    [seconds] => 40
    [minutes] => 25
    [hours] => 6
    [mday] => 3
    [wday] => 2
    [mon] => 7
    [year] => 2018
    [yday] => 183
    [weekday] => Tuesday
    [month] => July
    [0] => 1530599140
)
*/


//pobranie daty
$date = getdate();



//tablica do zmiennej 
$year = $date[year];
$mday = $date[mday];
$dzientyg = $date[wday]; 
$weekday = $date[weekday];
$miesiac = $date[mon];


switch($dzientyg)
{
    case "1": $dzientyg = "Poniedziałek"; break;
    case "2": $dzientyg = "Wtorek"; break;
    case "3": $dzientyg = "Środa"; break;
    case "4": $dzientyg = "Czwartek"; break;
    case "5": $dzientyg = "Piątek"; break;
    case "6": $dzientyg = "Sobota"; break;
    case "0": $dzientyg = "Niedziela"; break;
}


switch($miesiac) {
    case "01": $miesiac = "stycznia"; break;
    case "02": $miesiac = "lutego"; break;
    case "03": $miesiac = "marca"; break;
    case "04": $miesiac = "kwietnia"; break;
    case "05": $miesiac = "maja"; break;
    case "06": $miesiac = "czerwca"; break;
    case "07": $miesiac = "lipca"; break;
    case "08": $miesiac = "sierpnia"; break;
    case "09": $miesiac = "września"; break;
    case "10": $miesiac = "października"; break;
    case "11": $miesiac = "listopada"; break;
    case "12": $miesiac = "grudnia" ; break;
    }


//wyświetlanie
echo("Dzisiaj jest : " . $dzientyg . " " . $mday . " " . $miesiac . " " . $year . " " . "Jutro będzie Sobota");

?>
</div>
    
</body>
</html>