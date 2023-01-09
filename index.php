<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Badwords</title>
</head>
<body>
  <h1>
    <?php
    $text = 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolor maiores sunt molestiae omnis numquam et. Praesentium suscipit impedit inventore quis dolores magni unde dolore, ad mollitia a fuga facilis voluptates.';
    echo $text;
    ?>
    </h1>  

    <h2>
      Lunghezza paragrafo:
      <?php
      echo strlen($text);
      ?>
    </h2>
</body>
</html>