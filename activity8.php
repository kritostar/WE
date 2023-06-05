<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Activity 8</title>
    <link rel="icon" href="favicon.ico" type="image/x-icon" />
</head>
<body>
    <h1>Activity 8</h1>
<?php 
    $forecast = ["Mon"=>40,"Tue"=>47,"Wed"=>52,"Thu"=>40,"Fri"=>37];

    foreach ($forecast as $key => $value) {
        echo 'On <b>'.$key.'</b> temperature will be <b>'.$value.'</b>℉.<br>';
    }
?>
</body>
</html>