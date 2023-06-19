<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Activity 14</title>
    <link rel="icon" href="favicon.ico" type="image/x-icon" />
</head>
<body>

    <h1>Activity 14</h1>
    <?php 
        include 'Artist.class.php';
        include 'Art.class.php';
        include 'Painting.class.php';
        include 'Sculpture.class.php';
        include 'ArtPrint.class.php';

        $picasso = new  Artist("Pablo", "Picasso", "Malaga", "May 11, 1904", "Apr 8, 1973");
        $guernica = new  Painting("1937", $picasso, "Guernica", "Oil on canvas");
        $stein =  new  Painting("1907", $picasso, "Portrait of Gertrude Stein", "Oil on canvas");
        $woman = new Sculpture("1909", $picasso, "Head of a woman", 30.5);
        $bowl = new ArtPrint("1912", $picasso, "Still Life with Bowl", "Charchoal on paper", 25);

    ?>
</body>
    <h1>Tester for art classes</h1>
    <h2>Painting</h2>
    <p><em>Use the  toString() methods</em></p>
    <p><?php echo $guernica; ?></p>
    <p><?php echo $stein; ?></p>

    <p><em>Use the  getter methods</em></p>
    <p><?php echo $guernica->getName() . ' by ' . $guernica->getArtist()->getLastName() ; ?></p>

    <h2>Sculpture</h2>
    <p><em>Use the  toString() methods</em></p>
    <p><?php echo $woman; ?></p>

    <h2>Art prints</h2>
    <p>
    <?php 
        echo 'Year: ' . $bowl->getYear() . '<br>';
        echo 'Artist: ' . $bowl->getArtist()->getFirstName() . ' ' . $bowl->getArtist()->getLastName() . '<br>';
        echo '(' . date_format($bowl->getArtist()->getBirthDate(), 'd M y') . ' - ' . date_format($bowl->getArtist()->getDeathDate(),'d M y') . ') <br>';
        echo 'Name: ' . $bowl->getName() . '<br>';
        echo 'Medium: ' . $bowl->getMedium() . '<br>';
        echo 'Print Number: ' . $bowl->getPrintNumber() . '<br>';
    ?>

    </p>

</html>