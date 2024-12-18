<?php
$movie = [
    'title' => 'Underworld: Blood Wars',
    'duration' => '91 min',
    'genre' => 'Action, Horror, Fantasy',
    'director' => 'Anna Foerster',
    'cast' => ['Kate Beckinsale', 'Theo James', 'Tobias Menzies', 'Lara Pulver'],
    'synopsis' => 'Selene, the vampire death dealer, must face off against the deadly Lycan army and stop the war between the Lycans and the Vampires, while also protecting her daughter from the terrifying forces that seek to use her powers.',
    'trailer_url' => 'https://www.youtube.com/embed/TS8J7GkDeIY',
];
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1,0">
    <meta name="description" content="<?php echo $movie['title']; ?> Movie Page">
    <meta name="author" content="Almir Maksuti">
    <meta name="keywords" content="<?php echo $movie['title']; ?>, Movie, Trailer, Action, Horror, Fantasy">
    <title><?php echo $movie['title']; ?></title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php include 'header.php'; ?>
    <section class="movie-details">
        <h2><?php echo $movie['title']; ?></h2>
        <div class="movie-trailer">
            <iframe width="100%" height="315" src="<?php echo $movie['trailer_url']; ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <p><strong>Duration:</strong> <?php echo $movie['duration']; ?></p>
        <p><strong>Genre:</strong> <?php echo $movie['genre']; ?></p>
        <p><strong>Director:</strong> <?php echo $movie['director']; ?></p>
        <p><strong>Cast:</strong> <?php echo implode(', ', $movie['cast']); ?></p>
        <p><strong>Synopsis:</strong> <?php echo $movie['synopsis']; ?></p>
    </section>

<?php include 'footer.php'; ?>
</body>
</html>