<?php
/*
PHP Snack 2:
Passare come parametri GET name, mail e age e
verificare (cercando i metodi che non
conosciamo nella documentazione) che:
1. name sia più lungo di 3 caratteri,
2. mail contenga un punto e una chiocciola
3. age sia un numero.
Se tutto è ok stampare “Accesso riuscito”, altrimenti
“Accesso negato”.
*/

$userName = $_GET["name"];
$userMail = $_GET["mail"];
$useraAge = $_GET["age"];

if ( empty($userName) && empty($userMail) && empty($useraAge) ){
  $message = "effettuare accesso";
} else  {
  $message = "accesso consentito";
  if (strlen($userName) <= 3) {
    $message = "accesso negato - nome non corretto";
  } elseif (strpos($userMail, "@") == false || strpos($userMail, ".") == false){
    $message = "accesso negato - email non corretta";
  } elseif (is_numeric($useraAge) == false){
    $message = "accesso negato -  età non corretta";
  }
}
 ?>


 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>snack 2</title>
   </head>
   <body>
     <h1>
       <?php
       echo $message;
       ?>
     </h1>
   </body>
 </html>
