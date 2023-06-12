<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EE2</title>
</head>
<body>
    <h2>Tester for Artist Class</h2>
    <?php 
        include 'Artist.class.php';
        $picasso = new  Artist("Pablo", "Picasso", "Malaga", "Oct 25, 1881", "Apr 8, 1973");

        echo $picasso->getLastName() . ': ';
        echo date_format($picasso->getBirthDate(), 'd M y') . ' to ';
        echo date_format($picasso->getDeathDate(), 'd M y') . ' <hr> ';

        $dali = new Artist("Salvador", "Dali", "Figures","May 11, 1904","Jan 23, 1989");

        echo $dali->getLastName() . ': ';
        echo date_format($dali->getBirthDate(), 'd M y') . ' to ';
        echo date_format($dali->getDeathDate(), 'd M y') . ' <hr> ';

        $picasso->outputAsTable();

        echo 'Number of Instantiated arstist: '. Artist::getArtistCount();
    ?>
</body>
</html>