<?php
include 'controller/CinemaController.php';
include 'data/cineCartelera.php';

$cinemaController = new CinemaController(cines: $cines);
$cines = $cinemaController->getCines();
$selectedCinema = null;
$longestFilm = null;
$searchDirector ="";

$action = $_GET['action'] ?? null;
$id = $_GET['id'] ?? null;

if ($action === 'showCinema' && $id) {
    $selectedCinema = $cinemaController->getCineById(id: $id);
} elseif ($action === 'showLongestMovie' && $id) {
    $selectedCinema = $cinemaController->getCineById(id: $id);
    if($selectedCinema){
        $longestFilm = $cinemaController->showLongestMovie(cinema: $selectedCinema);
        
    }
} elseif ($action === 'searchDirector') {
    $director = $_POST['director'] ?? "";
    $filmsByDirector = $cinemaController->searchByDirector(director: $director);
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cines</title>
    <link rel="stylesheet" href="public/css/style.css">
</head>
    <body>
        <div id="container">

            <div id="header">
            <nav id="nav-bar">
                    <ul>
                        <?php foreach ($cines as $cine): ?>
                            <li><a href="?action=showCinema&id=<?php echo $cine->getId(); ?>"><?php echo $cine->getName(); ?></a></li>
                        <?php endforeach; ?>
                    </ul>
                </nav>
                    
                <form method="POST" action="?action=searchDirector">
                    <input type="text" name="director" placeholder="Buscar por director" value="<?php echo htmlspecialchars($searchDirector); ?>">
                    <button type="submit">Buscar</button>
                </form>
            </div>



            <main>

                <?php if($director): ?>
                    <h2>Busqueda por director: <?php $cinemaController->searchByDirector($director); ?></h2>
                    <ul>
                        <?php echo $filmsByDirector ?>
                    </ul>
                <?php elseif ($longestFilm): ?>
                    <div class="movie-card">
                        <h2>Película de mayor duración</h2>
                        <p>Nombre: <?php echo $longestFilm->getName(); ?></p>
                        <p>Duración: <?php echo $longestFilm->getDuration(); ?> minutos</p>
                        <p>Director: <?php echo $longestFilm->getDirector(); ?></p>
                    </div>
 
                <?php elseif ($selectedCinema): ?>
                    <h1><?php echo $selectedCinema->getName(); ?></h1>
                    <h2><?php echo $selectedCinema->getCity(); ?></h2>
                    <ul>
                        <?php echo $cinemaController->showFilmsInfo(cinema: $selectedCinema); ?>
                    </ul>
                    <form method="GET" action="">
                        <input type="hidden" name="action" value="showLongestMovie">
                        <input type="hidden" name="id" value="<?php echo $selectedCinema->getId(); ?>">
                        <button type="submit">Mostrar película más larga</button>
                    </form>
                <?php endif; ?>
            </main>
        </div>
    </body>
</html>