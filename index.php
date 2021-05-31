<?php
    require_once __DIR__ . '/movies.php';
    require_once __DIR__ . '/movies-info.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies</title>
</head>
<body>
    <header>
        <h1>Movie list</h1>
    </header>

    <main>
        <section>
            <?php
            foreach ($movies as $movie) { 
                $movie = new Movie($movie['title'], $movie['genre'], $movie['year'], $movie['director'], $movie['about'])
                ?>
                <article>
                    <h2>Titolo: <?php echo $movie->title; ?></h2>
                    <h3>Genere: <?php echo $movie->genre; ?></h3>
                    <h3>Anno: <?php echo $movie->year; ?></h3>
                    <h3>Regia: <?php echo $movie->director; ?></h3>
                    <p>Trama: <?php echo $movie->getExcerpt(); ?>...</p>
                </article>
                <hr>
            <?php } ?>
        </section>
    </main>

</body>
</html>