<?php 
$text=" Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laudantium, aperiam nihil dignissimos eos maxime prova quis iusto itaque magnam sapiente repellat! prova Eligendi, prova reiciendis consequatur? Nobis, error consequuntur. Quibusdam perspiciatis eligendi ab?"
$bad_word= $_GET("prova")
$new_text = str_replace($bad_word, "***", $text)
var_dump($_GET)
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Primo php</title>
</head>
<body>
  <p>
    il testo è : <?php echo $text ?>
</p>
<p>Questo paragrafo è lungo <?php echo strlen($text) ?> caratteri </p>
<p>Adesso censuriamo la parola "prova" <br> <?php echo $new_text ?> </p>
 
</body>
</html>