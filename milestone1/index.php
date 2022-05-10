<?php 

require __DIR__ . '/database.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Dischi</title>
</head>

<body>
    <div class="bg-dark">
        <div class="container">
            <div class="row row-cols-3 g-3">
                <?php foreach ( $database as $song){?>
                <div>
                    <div class="col text-center mt-5 text-white">
                        <img class="img-fluid" src="<?php echo $song['poster']?>" alt="">
                        <h3><?php echo $song['title']?></h3>
                        <span><?php echo $song['author']?></span>
                        <span><?php echo $song['year']?></span>
                    </div>
                </div>
                <?php }?>
            </div>
        </div>
    </div>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</body>

</html>