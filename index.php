<?php

require __DIR__ . '/film.php';
$films = [
    $film_1 = new Movie('Interstellar', 'English', 'Science fiction', 'Astronauti alla scoperta di un buco nero'),
    $film_2 = new Movie('Avengers - End Game', 'English', 'Action/Sci-fi', "L'ultimo scontro per la salvezza dell'universo"),
    $film_3 = new Movie('Shrek', 'English', 'Animation', 'Shrek deve salvare la regina Fiona'),
    $film_4 = new Movie('Hit', 'English', 'Horror', "Persone scomparse collegate ad un inquietante pagliaccio"),
    $film_5 = new Movie('Baywatch', 'English', 'Comedy', 'I guardaspiaggia devono salvare la costa dalla droga'),
    $film_6 = new Movie('Shark Tale', 'English', 'Animation', "Oscar è un piccolo pesce in cerca di avventura"),
    $film_7 = new Movie('Avatar', 'English', 'Science fiction', 'Un nuovo mondo con creature mai viste'),

];

$film_1->setVote(8);
$film_2->setVote(8.3);
$film_3->setVote(7.7);
$film_4->setVote(7.1);
$film_5->setVote(6.1);
$film_6->setVote(5.5);
$film_7->setVote(9.1);



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100;300;400;500;700&display=swap" rel="stylesheet">
    <!-- Link CSS -->
    <link rel="stylesheet" href="../ASSETS/CSS/style.css">
    <!-- Title -->
    <title>Film PHP</title>
</head>
<body>

    <main>
        <div class="title">
            <span>FILMS PHP</span>
        </div>

        <div class="container">

            <?php foreach( $films as $film){ ?>
            <div class="films">
                <div class="film">
                    <h3> <?php echo $film->name; ?></h3>

                    <h5>Language: <span> <?php echo $film->language;?> </span></h5>

                    <h5>Genre: <span> <?php echo $film->genre; ?></span></h5>

                    <h4>Descrizione:</h4>
                    <p> <?php echo $film->desc; ?></p>

                    <strong> <?php echo $film->vote; ?></strong>

                    <img src="<?php echo $film->img?>" alt="">

                </div>
            </div>
            <?php } ?>

        </div> 
    </main>

</body>
</html>