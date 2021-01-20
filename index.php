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
  "match-one" => [
    "home" => [
      "Nets",
      "130",
    ],
    "guest" => [
      "Jazz",
      "95",
    ],

  ],

  "match-two" => [
    "home" => [
      "Griezzlies",
      "92",
    ],
    "guest" => [
      "Lakers",
      "95",
    ],

  ],

  "match-three" => [
    "home" => [
      "Raptor",
      "85",
    ],
    "guest" => [
      "Chicago Bulls",
      "110",
    ],

  ],

  "match-four" => [
    "home" => [
      "Celtics",
      "115",
    ],
    "guest" => [
      "Clippers",
      "95",
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
       <li>
         <?php
         echo $matches["match-one"]["home"][0] . " - " . $matches["match-one"]["guest"][0]
          ?>
          <span>
           |
          <?php
          echo $matches["match-one"]["home"][1] . " - " . $matches["match-one"]["guest"][1]
           ?>
          </span>
       </li>
       <li>
         <?php
         echo $matches["match-two"]["home"][0] . " - " . $matches["match-two"]["guest"][0]
          ?>
          <span>
           |
          <?php
          echo $matches["match-two"]["home"][1] . " - " . $matches["match-two"]["guest"][1]
           ?>
          </span>
       </li>
       <li>
         <?php
         echo $matches["match-three"]["home"][0] . " - " . $matches["match-three"]["guest"][0]
          ?>
          <span>
           |
          <?php
          echo $matches["match-three"]["home"][1] . " - " . $matches["match-three"]["guest"][1]
           ?>
          </span>
       </li>
       <li>
         <?php
         echo $matches["match-four"]["home"][0] . " - " . $matches["match-four"]["guest"][0]
          ?>
          <span>
           |
          <?php
          echo $matches["match-four"]["home"][1] . " - " . $matches["match-four"]["guest"][1]
           ?>
          </span>
       </li>


     </ul>

   </body>
 </html>
