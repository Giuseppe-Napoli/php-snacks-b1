<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Snack 5</title>
</head>
<body>
  
  <!-- Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo. -->

  <?php

    $harryPotter = 'Il signore e la signora Dursley, di Privet Drive numero 4, erano orgogliosi di poter affermare che erano perfettamente normali, e grazie tante. Erano le ultime persone al mondo da cui aspettarsi che avessero a che fare con cose strane o misteriose, perché sciocchezze del genere proprio non le approvavano.
    Il signor Dursley era direttore di una ditta di nome Grunnings, che fabbricava trapani. Era un uomo corpulento, nerboruto, quasi senza collo e con un grosso paio di baffi. La signora Dursley era magra, bionda e con un collo quasi due volte più lungo del normale, il che le tornava assai utile, dato che passava gran parte del tempo ad allungarlo oltre la siepe del giardino per spiare i vicini. I Dursley avevano un figlioletto di nome Dudley e secondo loro non esisteva al mondo un bambino più bello.';
    

    $paragrafi = explode(".", $harryPotter);
  ?>

    <p>
      <?php var_dump($paragrafi); ?>;
    </p>
</body>
</html>