<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Snack 2</title>
</head>
<body>
  
  <!-- Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->

  <?php

    $name = $_GET['name'];
    $mail = $_GET['mail'];
    $age = $_GET['age'];
   
    if(strlen($name) < 3){
      echo "Accesso negato: Nome troppo corto";
    }else if(strpos($mail,'@')=== false || strpos($mail,'.')=== false){
      echo "Accesso negato: Email non corretta";
    }else if(!is_numeric($age)){
      echo "Accesso negato: Età non corretta";
    }else{
      echo "Accesso riuscito: I dati inseriti sono validi";
    }
    
  ?>

</body>
</html>