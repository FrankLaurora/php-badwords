<?php
$paragraph = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro vitae, ut dicta tenetur quos necessitatibus cupiditate, harum voluptatum quia ab quisquam veritatis placeat. Ex accusamus, nobis quis quia eaque ipsam? Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas voluptatem, similique ex libero maxime incidunt magni odio impedit voluptates laboriosam, inventore iste facere labore illo tempore at! Corporis, quidem illum!';

$badword = $_GET['badword'];

$newParagraph = str_replace($badword, '***', $paragraph);

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP Badwords</title>
    </head>
    <body>
        <h2>Paragrafo originale</h2>
        <p><?php echo $paragraph; ?></p>
        <p>Questo paragrafo contiene <?php echo strlen($paragraph); ?> caratteri.</p>

        <h2>Paragrafo censurato</h2>
        <h3>Aggiungere il parametro badword all'URL per nascondere una parola.</h3>
        <p><?php echo $newParagraph; ?></p>
        <p>Il paragrafo censurato contiene <?php echo strlen($newParagraph); ?> caratteri.</p>

    </body>
</html>