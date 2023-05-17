<?php 
include __DIR__.'/Models/Movie.php';
include __DIR__.'/db/db.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>List of movies</title>
</head>
<body>
    <div class="container p-5">
    <h1 class="text-center">Movies</h1>
    <?php 
    include __DIR__.'/partials/movie_list.php';
    
    ?>
    </div>
</body>
</html>

