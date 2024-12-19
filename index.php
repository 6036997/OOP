<!DOCTYPE html>
<html lang="nl">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1,0">
    <meta name="description" content="">
    <meta name="author" content="Arda">
    <meta name="keywords" content="">
    <title>MBO Cinemas - Home</title>
    <link rel="stylesheet" href="css/style.css">
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <!-- Navigatiebalk -->
    <?php include 'header.php'; ?>

    <div class="slideshow-container">
    <!-- Slide 1: Venom -->
    <div class="slide fade">
        <img src="img/venom-poster.jpg" alt="Venom The Last Dance">
        <div class="text-overlay">
            <h2>Marvel Universe</h2>
            <h1>Venom<br>The Last Dance</h1>
            <button class="book-btn">Book now</button>
        </div>
    </div>

    <!-- Slide 2: Movie 2 -->
    <div class="slide fade">
        <img src="img/nowayhome.jpg" alt="Spider-Man">
        <div class="text-overlay">
            <h2>Marvel Universe</h2>
            <h1>Spider-Man<br>No Way Home</h1>
            <button class="book-btn">Book now</button>
        </div>
    </div>

    <!-- Slide 3: Movie 3 -->
    <div class="slide fade">
        <img src="img/lovethunder.jpg" alt="thor">
        <div class="text-overlay">
            <h2>Marvel Universe</h2>
            <h1>Thor<br>Love and Thunder</h1>
            <button class="book-btn">Book now</button>
        </div>
    </div>

    <!-- Vorige en volgende knoppen -->
    <a class="prev" onclick="changeSlide(-1)">&#10094;</a>
    <a class="next" onclick="changeSlide(1)">&#10095;</a>


<!-- Paginaknoppen -->
<div class="dots-container">
    <span class="dot" onclick="currentSlide(1)"></span>
    <span class="dot" onclick="currentSlide(2)"></span>
    <span class="dot" onclick="currentSlide(3)"></span>
</div>
</div>

    <!-- JavaScript -->
    <script src="script.js"></script>

    <?php include 'footer.php'; ?>

</body>
</html>
