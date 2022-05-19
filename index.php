<?php
$text = 'Lorem, ipsum dolor sit amet consectetur adipisicing elit.';
$length = strlen($text);
$wordCensored = $_GET['word'];
$replaceWord = str_replace($wordCensored, '***', $text);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-badwords</title>
</head>

<body>

    <h2> Text: <?php echo $text; ?></h2>
    <h2> Length: <?php echo $length; ?> </h2>
    <h2> Text censored: <?php echo $replaceWord; ?> </h2>

</body>

</html>