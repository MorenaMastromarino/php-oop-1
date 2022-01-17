<?php
require_once __DIR__."/Movie.php";
require_once __DIR__."/database.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

<?php foreach($movies as $movie):
$new_movie = new Movie($movie["title"], $movie["genre"], $movie["year"], $movie["director"]);
$new_movie->description = $movie["description"];
$new_movie->cast = $movie["cast"];
?>
<div>
  <h2><?php echo $new_movie->title ?></h2>
  <p><strong>Genere: </strong><?php echo $new_movie->genre ?></p>
  <p><strong>Anno: </strong><?php echo $new_movie->year ?></p>
  <p><strong>Regista: </strong><?php echo $new_movie->director ?></p>

  <h4>Cast:</h4>
  <ul>
    <?php foreach($new_movie->cast as $actor): ?>
    <li><?php echo $actor ?></li>
    <?php endforeach ?>
  </ul>

  <h4>Trama:</h4>
  <p><?php echo $new_movie->getExceptedDescription(70) ?></p>

</div>
<?php endforeach ?>
  
</body>
</html>