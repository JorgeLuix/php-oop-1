
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Movies</title>
</head>
<body>
<div class="container">
    <div class="row">
        <?php foreach ($movies as $movie): ?>
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card">
                    <img src="<?php echo $movie->image; ?>" class="card-img-top" alt="<?php echo $movie->title; ?>">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $movie->title; ?></h5>
                       <!-- <p class="card-text">ID: <?php echo $movie->id; ?></p> -->
                        <p class="card-text">Original Title: <?php echo $movie->original_title; ?></p>
                        <p class="card-text">Nationality: <?php echo $movie->nationality; ?></p>
                        <p class="card-text">Date: <?php echo $movie->date; ?></p>
                        <p class="card-text">Vote: <?php echo $movie->getRating(); ?></p>
                        <p class="card-text">Genero: <?php echo implode(', ', $movie->genero); ?></p>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

</body>
</html>

