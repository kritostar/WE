<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Activity 6</title>
    <link rel="icon" href="favicon.ico" type="image/x-icon" />
</head>
<body>
    <h1>Activity 6</h1>
<?php 
    function getNiceTime($showSeconds){
        if ($showSeconds==true)
            return date('H:i:s');
        return date('H:i');
    }

    function getNiceTimeDef($showSeconds=true){
        if ($showSeconds==true)
            return date('H:i:s');
        return date('H:i');
    }
    echo 'Funtion NO DEF: <br>';
    echo 'TRUE: '.getNiceTime(true).'<br>';
    echo 'FALSE: '.getNiceTime(false).'<br>';
    echo 'OTHER: '.getNiceTime('lalalaa').'<br>';
    echo '<br>Funtion NO DEF: <br>';
    echo 'TRUE: '.getNiceTimeDef(true).'<br>';
    echo 'FALSE: '.getNiceTime(false).'<br>';
    echo 'OTHER: '.getNiceTimeDef('lalalal').'<br>';
    ?>
    



</body>
</html>