<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Snack 4</title>
</head>
<body>
  
  <!-- Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta -->

  <?php

    function getArrayOfIntegers($min, $max, $nItems)
    {
        $newArray = [];

        while (count($newArray) < $nItems) {
            $number = rand($min, $max);

            if (!in_array($number, $newArray)) {
                $newArray[] = $number;
            }
        }

        return $newArray;
    var_dump($newArray);

    }
    $newArray=getArrayOfIntegers(1, 100, 15);
    var_dump($newArray);

    
  ?>


</body>
</html>