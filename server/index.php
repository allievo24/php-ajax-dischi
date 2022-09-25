<?php   
//importo il file che contiene i dati
include '../database.php';

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">

    <title>PHP-Dischi</title>
</head>
    <body>
        <header>
            <div class="container_header">
                <div class="container-left">
                      <img src="https://qph.cf2.quoracdn.net/main-qimg-26b35be139dd768190b8ac56beae7086" alt="logo"/>
                </div>

            </div> 
          

        </header>
         <main>
            <div class="container-card">
                <!--eseguo un ciclo foreach notare che deve essere racchiuso
                    tra i tag php -->
                <?php
                  foreach($database as $data){ 
                ?>
                <!--inserisco la struttura html che voglio che si ripeta
                    dove all'interno inserisco codice php per 
                    generare i dati recuperati con il ciclo-->
                <div class="card">
                    <img class="poster" src="<?php echo $data['poster']  ;?>" alt="">
                    <h3><?php echo $data['title']; ?></h3>
                    <span><?php echo $data['author']; ?></span>
                    <strong><span><?php echo $data['year']; ?></span></strong>  
                </div>
                <!--chiudo il ciclo prima aperto da notare che la chisura del ciclo
                    avviene chiudendo la parentesi graffa del foreach tra i tag php-->
                <?php
                  }
                ?>
            
            </div>
               





   </body>
</html>