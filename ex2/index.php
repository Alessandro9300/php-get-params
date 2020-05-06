<!-- passare come argomento in GET una mail e stampare un div che contenga OK se contiene un punto e una chiocciola; KO altrimenti -->

 <!-- http://localhost/?mail=AAndreoli93@gmail.com -->



  <!DOCTYPE html>
  <html lang="en" dir="ltr">
    <head>
      <meta charset="utf-8">
      <title></title>
    </head>
    <body style="width: 100vw; height: 100vh; display: flex; justify-content: center; padding-top: 200px;">

      <?php

       $mail = $_GET["mail"];
       $dotMail = strpos($mail,".");
       $dotChioggia = strpos($mail,"@");



       ?>


      <h1>

        <?php
        // echo $dotMail . " ";
        // echo $dotChioggia;
        if($dotMail && $dotChioggia){
          echo "Ok";
        } else {
          echo "Ko";
        }


        ?>

      </h1>
    </body>
  </html>
