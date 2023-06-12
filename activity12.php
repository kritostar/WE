<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Activity 12</title>
    <link rel="icon" href="favicon.ico" type="image/x-icon" />
</head>
<body>

    <h1>Activity 12</h1>
    <?php 
        $filename = "Sample_Coma.txt";
        $paintings = file($filename) or die ('ERROR: Cannot find file');
        $delimiter =',';

        foreach($paintings as $painting) {
            $paintingFields = explode($delimiter, $painting);
            $id = $paintingFields[0];
            $artist = $paintingFields[1];
            $title = $paintingFields[2];
            $year = $paintingFields[3];
        echo "id: " . $id . " artist: " . $artist . " title: " . $title . " year: " . $year;
        echo "<br>";

        }
    ?>
</body>
</html>