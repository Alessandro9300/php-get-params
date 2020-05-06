 <!-- passare come argomenti in GET nome e cognome; e salutare l'interlocutore -->
  <!-- indirizzo -->
 <!-- http://localhost/?name=Alessandro&surname=Andreoli -->




 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body style="width: 100vw; height: 100vh; display: flex; justify-content: center; padding-top: 200px;">

     <?php

      $name = $_GET["name"];
      $surname = $_GET["surname"];


      ?>


     <h1>
       Benvenuto
       <?php
       echo $name . " ";
       echo $surname;

        ?>

     </h1>
   </body>
 </html>
