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
    "home" => [
      "team" => "Nets",
      "score" => "130",
    ],
    "guest" => [
      "team" => "Jazz",
      "95",
    ],

  ],

  [
    "home" => [
      "team" => "Griezzlies",
      "score" => "92",
    ],
    "guest" => [
      "team" => "Lakers",
      "score" => "95",
    ],

  ],

  [
    "home" => [
      "team" => "Raptor",
      "score" => "85",
    ],
    "guest" => [
      "team" => "Chicago Bulls",
      "score" => "110",
    ],

  ],

  [
    "home" => [
      "team" => "Celtics",
      "score" => "115",
    ],
    "guest" => [
      "team" => "Clippers",
      "score" => "95",
    ],

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
        for($i = 0; $i < count($matches); $i++) {
          $homeSide = $matches[$i]["home"]["team"];
          $guestSide = $matches[$i]["guest"]["team"];
          $homeScore = $matches[$i]["home"]["score"];
          $guestScore = $matches[$i]["guest"]["score"];

          echo "<li>".$homeSide." - ".$guestSide." | ".$homeScore." - ".$guestScore."</li>";
        }
      ?>


     </ul>

   </body>
 </html>
