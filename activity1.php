<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activity 1</title>
    <link rel="icon" href="favicon.ico" type="image/x-icon" />
</head>
<body>
    <?php
    $artist1 = "Picasso";
    $artist2 = "Raphael";
    $artist3 = "Cezanne";
    $artist4 = "Rembrandt";
    $artist5 = "Giotto";

    for ($i=1; $i <= 5; $i++) { 
        echo ${"artist".$i};
        echo "<br>";
    }
?>
</body>
</html>
