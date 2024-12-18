<?php
$movie = [
    'title' => 'Spider-Man: No Way Home',
    'duration' => '148 min',
    'genre' => 'Action, Adventure, Science Fiction',
    'director' => 'Jon Watts',
    'cast' => ['Tom Holland', 'Zendaya', 'Benedict Cumberbatch', 'Jacob Batalon', 'Alfred Molina', 'Willem Dafoe'],
    'synopsis' => 'With Spider-Man\'s identity now revealed, Peter seeks help from Doctor Strange to make everyone forget he is Spider-Man, leading to unexpected consequences and the return of villains from other dimensions.',
    'trailer_url' => 'https://www.youtube.com/embed/JfVOs4VSpmA?si=X2bqb_UwD0BUvHZD',
];
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1,0">
    <meta name="description" content="<?php echo $movie['title']; ?> Movie Page">
    <meta name="author" content="Almir Maksuti">
    <meta name="keywords" content="<?php echo $movie['title']; ?>, Movie, Trailer, Action, Adventure, Science Fiction">
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
