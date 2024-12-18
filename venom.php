<?php
$movie = [
    'title' => 'Venom The last dance',
    'duration' => '120 min',
    'genre' => 'Action',
    'director' => 'Ruben Fleischer',
    'cast' => ['Tom Hardy', 'Michelle Williams', 'Riz Ahmed'],
    'synopsis' => 'Eddie Brock is a reporter who gains superpowers after becoming the host for an alien symbiote.',
    'trailer_url' => 'https://www.youtube.com/embed/HyIyd9joTTc?si=dm3XVCMSKDUH9H52',
];
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1,0">
    <meta name="description" content="<?php echo $movie['title']; ?> Movie Page">
    <meta name="author" content="Almir Maksuti">
    <meta name="keywords" content="<?php echo $movie['title']; ?>, Movie, Trailer, Action">
    <title><?php echo $movie['title']; ?></title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php include 'header.php'; ?>
    <section class="movie-details">
        <h2><?php echo $movie['title']; ?></h2>
        <div class="movie-trailer">
            <iframe width="100%" height="400" src="<?php echo $movie['trailer_url']; ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
