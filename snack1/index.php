<?php
/*
PHP Snack 1:
Creiamo un array 'matches' contenente altri array i
quali rappresentano delle partite di basket di
un’ipotetica tappa del calendario. Ogni array della
partita avrà una squadra di casa e una squadra
ospite, punti fatti dalla squadra di casa e punti fatti
dalla squadra ospite.
Stampiamo a schermo tutte le partite con questo
schema:
Olimpia Milano - Cantù | 55 - 60
*/

$matches = [
  [

    "homeTeam" => "Nets",
    "scoreHome" => "130",
    "guestTeam" => "Jazz",
    "scoreGuest" => "95",
  ],

  [

    "homeTeam" => "Griezzlies",
    "scoreHome" => "92",
    "guestTeam" => "Lakers",
    "scoreGuest" => "95",

  ],

  [

    "homeTeam" => "Raptor",
    "scoreHome" => "85",
    "guestTeam" => "Chicago Bulls",
    "scoreGuest" => "110",

  ],

  [

    "homeTeam" => "Celtics",
    "scoreHome" => "115",
    "guestTeam" => "Clippers",
    "scoreGuest" => "95",

  ],

];
 ?>


 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>


     <ul>
       <?php
        for($i = 0; $i < count($matches); $i++) {?>

        <li><?php echo $matches[$i]["homeTeam"]." - ".$matches[$i]["guestTeam"]." | ".$matches[$i]["scoreHome"]." - ".$matches[$i]["scoreGuest"]; ?></li>

      <?php } ?>



     </ul>

   </body>
 </html>
