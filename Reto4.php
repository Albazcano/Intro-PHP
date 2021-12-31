<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reto 4</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
</head>

<style>

body {
    width: 80%;
    margin: 0 auto;
}

h1 {
    text-align: center;
    margin bottom: 0.62rem;
}
.card-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-evenly;
    
    
}
.card {
    width: 20%;
    margin-top: 0.62rem;
}

.card-img-top {
    width: 100%;
    height: 25rem;
    object-fit: cover;
}

</style>

<body>
    <a href="index.php">Atrás</a>
    <h1> Películas</h1>
    <div class="card-container">
    <div class="card-container">

    <?php

        class Movie {

            var $title;
            var $duration;
            var $year;
            var $image;
               
            public function __construct($title, $duration, $year, $image)
            {
                $this->title = $title;
                $this->duration = $duration;
                $this->year = $year;
                $this->image = $image;
            }

            public function getTitle()
            {
                return $this->title;
            }
            
            public function getDuration()
            {
                return $this->duration;
            }

            public function getYear()
            {
                return $this->year;
            }
        
            public function getImage()
            {
                return $this->image;
            }
            
        
        }
        
            $movie1 = new Movie('The King´s Man', '2021', '2h 10min', 'https://bit.ly/31fsqzQ');
            $movie2 = new Movie('The Vault', '2021', '1h 58min', 'https://bit.ly/3sIZOKq');
            $movie3 = new Movie('Sing 2', '2021', '2h', 'https://bit.ly/3Hmiu6X');            
            $movie4 = new Movie('Ghostbusters: Afterlife', '2021', '2h 05min', 'https://bit.ly/3qB7A6x');
            $movie5 = new Movie('Silent Night', '2021', '1h 32 min', 'https://bit.ly/3sKKLzT');
            $movie6 = new Movie('The last Execution', '2021', '1h 56min', 'https://bit.ly/3FIRYV0');
            $listOfMovies = array($movie1, $movie2, $movie3, $movie4, $movie5, $movie6);
    ?>
    
    <?php
    foreach ($listOfMovies as $valor): ?>
        <div class="card" style="width: 18rem;">
            <img src="<?php echo $valor->getImage(); ?>" class="card-img-top" alt="Cartel película">
            <div class="card-body">
                <h5 class="card-title"><?php echo $valor->getTitle();?></h5>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><?php echo $valor->getDuration();?></li>
                <li class="list-group-item"><?php echo $valor->getYear();?></li>
            </ul>
        </div>
        <?php endforeach; ?>
    </div>

    
</body>
</html>