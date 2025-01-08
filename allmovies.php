<?php

$movies = [
    'venom' => [
        'title' => 'Venom',
        'trailer' => 'https://www.youtube.com/embed/u9Mv98Gr5pY',
        'description' => 'Eddie Brock probeert de waarheid achter de experimenten van de Life Foundation te ontrafelen...',
        'genre' => 'Actie',
        'duration' => '120 minuten',
    ],
    'dunkirk' => [
        'title' => 'Dunkirk',
        'trailer' => 'https://www.youtube.com/embed/F-eMt3SrfFU',
        'description' => 'Tijdens de Tweede Wereldoorlog probeert een groep soldaten te ontsnappen uit het omsingelde Dunkirk.',
        'genre' => 'Avontuur',
        'duration' => '120 minuten',
    ],
    'batman' => [
        'title' => 'Batman Vs Superman',
        'trailer' => 'https://www.youtube.com/embed/0WWzgGyAH6Y',
        'description' => 'Batman en Superman botsen terwijl ze proberen te bepalen wat voor soort held de wereld nodig heeft.',
        'genre' => 'Thriller',
        'duration' => '150 minuten',
    ],
    'johnwick' => [
        'title' => 'John Wick 4',
        'trailer' => 'https://www.youtube.com/embed/yjRHZEUamCc',
        'description' => 'John Wick keert terug om een bloederige oorlog tegen de High Table te voeren.',
        'genre' => 'Actie',
        'duration' => '169 minuten',
    ],
    'aquaman' => [
        'title' => 'Aquaman',
        'trailer' => 'https://www.youtube.com/embed/WDkg3h8PCVU',
        'description' => 'Arthur Curry ontdekt zijn koninklijke afkomst en moet een oorlog tussen land en zee voorkomen.',
        'genre' => 'Avontuur',
        'duration' => '143 minuten',
    ],
    'blackpanther' => [
        'title' => 'Black Panther',
        'trailer' => 'https://www.youtube.com/embed/xjDjIWPwcPU',
        'description' => 'T’Challa keert terug naar Wakanda om zijn rechtmatige plaats als koning in te nemen.',
        'genre' => 'Actie',
        'duration' => '134 minuten',
    ],
    'thor' => [
        'title' => 'Thor',
        'trailer' => 'https://www.youtube.com/embed/JOddp-nlNvQ',
        'description' => 'Thor, de dondergod, wordt uit Asgard verbannen en moet zichzelf op aarde bewijzen.',
        'genre' => 'Fantasy',
        'duration' => '119 minuten',
    ],
    'bumblebee' => [
        'title' => 'Bumblebee',
        'trailer' => 'https://www.youtube.com/embed/lcwmDAYt22k',
        'description' => 'Bumblebee vindt onderdak op een vuilnisbelt en sluit vriendschap met een tienermeisje.',
        'genre' => 'Sci-Fi',
        'duration' => '119 minuten',
    ],
    'mortalengines' => [
        'title' => 'Mortal Engines',
        'trailer' => 'https://www.youtube.com/embed/IRsFc2gguEg',
        'description' => 'In een post-apocalyptische wereld vechten steden op wielen om middelen.',
        'genre' => 'Avontuur',
        'duration' => '128 minuten',
    ],
    'underworld' => [
        'title' => 'Underworld: Blood Wars',
        'trailer' => 'https://www.youtube.com/embed/rKHL5PyAPzs?si=tuWYWDgIcsoJKyDn',
        'description' => 'Selene gaat de strijd aan tegen Lycans en Vampieren die haar verraden hebben.',
        'genre' => 'Actie',
        'duration' => '91 minuten',
    ],
    'spiderman' => [
        'title' => 'Spider-Man: No Way Home',
        'trailer' => 'https://www.youtube.com/embed/JfVOs4VSpmA',
        'description' => 'Spider-Man worstelt met de onthulling van zijn geheime identiteit.',
        'genre' => 'Actie',
        'duration' => '148 minuten',
    ],
    'avatar' => [
        'title' => 'Avatar: The Way of Water',
        'trailer' => 'https://www.youtube.com/embed/d9MyW72ELq0',
        'description' => 'Jake Sully en Neytiri verdedigen hun thuis tegen een oude vijand.',
        'genre' => 'Sci-Fi',
        'duration' => '192 minuten',
    ],
];


$title = $_GET['title'] ?? null;


$movie = $movies[$title] ?? null;
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $movie['title'] ?? 'Film niet gevonden' ?></title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php include 'header.php'; ?>
<section class="movie-details">
    <?php if ($movie): ?>
        <h1><?= htmlspecialchars($movie['title']) ?></h1>
        <iframe width="560" height="315" src="<?= htmlspecialchars($movie['trailer']) ?>" 
                title="Trailer" frameborder="0" 
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                allowfullscreen></iframe>
        <p>
            <strong>Genre:</strong> <?= htmlspecialchars($movie['genre']) ?><br>
            <strong>Duur:</strong> <?= htmlspecialchars($movie['duration']) ?><br>
            <strong>Samenvatting:</strong> <?= htmlspecialchars($movie['description']) ?>
        </p>
    <?php else: ?>
        <p>Film niet gevonden. <a href="index.php">Terug naar het overzicht</a></p>
    <?php endif; ?>
</section>
<?php include 'footer.php'; ?>
</body>
</html>