<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <title>Badwords</title>
</head>
<body>
  <!-- Raccolta variabili php -->
  <?php
  // parola verrà cambiata tramite url
  $word = $_GET['badWord'];
  $text = 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolor maiores sunt molestiae omnis numquam et. Praesentium suscipit impedit inventore quis dolores magni unde dolore, ad mollitia a fuga facilis voluptates.';
  $censored = str_ireplace("$word", "***", "$text");
  ?>
  <!-- fine raccolta variabili -->

  <!-- Titolo esercizio con spiegazione -->
  <header>
    <h1> PHP Badwords </h1>
  </header>

  <main>
    <!-- stampa paragrafo non censurato -->
    <div id="normal">
      <!-- titolo  -->
      <h2>
        Paragrafo:
      </h2>
      
      <!-- testo intatto -->
      <h3>
        <?php echo $text ?>
      </h3>
    
      <!-- conteggio lunghezza testo -->
      <h4>
        Lunghezza paragrafo:
        <?php echo strlen($text); ?>
      </h4>
    </div>
  
    <!-- stampa paragrafo con parola censurata scelta da utente -->
    <div id="censored">
      <!-- titolo -->
      <h2>
        Paragrafo con censura:
      </h2>

      <!-- testo con censura -->
      <h3>
        <?php echo $censored ?>
      </h3>
    
      <!-- conteggio lunghezza testo con censura-->
      <h4>
        Lunghezza paragrafo censurato:
        <?php echo strlen($censored); ?>
      </h4>
    </div>
  </main>
</body>
</html>