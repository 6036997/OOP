<?php
class Movie {
    public $title;
    public $image;
    public $altText;
    public $duration;
    public $genre;

    public function __construct($title, $image, $altText, $duration, $genre) {
        $this->title = $title;
        $this->image = $image;
        $this->altText = $altText;
        $this->duration = $duration;
        $this->genre = $genre;
    }

    public function render() {
        return "
        <article>
            <a href='allmovies.php?title=" . strtolower(str_replace(' ', '', $this->title)) . "'>
                <img src='" . $this->image . "' alt='" . $this->altText . "'>
                <section class='movie-info'>
                    <h3>" . $this->title . "</h3>
                    <p>" . $this->duration . " min | " . $this->genre . "</p>
                </section>
            </a>
        </article>";
    }
}

// Een array van filmobjecten
$movies = [
    new Movie("Venom", "img/venom.jpg", "Venom", 120, "Action"),
    new Movie("Dunkirk", "img/dunkirk.jpeg", "Dunkirk", 120, "Adventure"),
    new Movie("Batman Vs Superman", "img/batman.jpeg", "Batman Vs Superman", 150, "Thriller"),
    new Movie("John Wick 4", "img/johnwick.jpeg", "John Wick 4", 169, "Action"),
    new Movie("Aquaman", "img/aquaman.jpeg", "Aquaman", 143, "Adventure"),
    new Movie("Black Panther", "img/blackp.jpeg", "Black Panther", 134, "Action"),
    new Movie("Thor", "img/thor.jpeg", "Thor", 119, "Fantasy"),
    new Movie("Bumblebee", "img/bumb.jpeg", "Bumblebee", 119, "Sci-Fi"),
    new Movie("Mortal Engines", "img/mortal.jpeg", "Mortal Engines", 128, "Adventure"),
    new Movie("Underworld Blood Wars", "img/underworld.jpeg", "Underworld Blood Wars", 91, "Action"),
    new Movie("Spider-Man: No Way Home", "img/spiderman2.jpg", "Spider-Man: No Way Home", 148, "Action"),
    new Movie("Avatar: The Way of Water", "img/avatar.jpg", "Avatar: The Way of Water", 192, "Sci-Fi")
];
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Almir Maksuti">
    <meta name="keywords" content="">
    <title>Movies</title>
    <link rel="stylesheet" href="css/style.css">
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <?php include 'header.php'; ?>
    <section class="movie-grid">
        <?php 
        // Genereer dynamisch alle films
        foreach ($movies as $movie) {
            echo $movie->render();
        }
        ?>
    </section>
    <?php include 'footer.php'; ?>
</body>
</html>
