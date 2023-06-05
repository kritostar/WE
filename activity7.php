<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Activity 7</title>
    <link rel="icon" href="favicon.ico" type="image/x-icon" />
</head>
<body>
    <h1>Activity 7</h1>
<?php 
    function changeParameterVal($arg){
       $arg += 285;
       echo '<br/>args='.$arg;
    }
    echo 'Calling function by value';
    $initial = 15;
    echo '<br/>initial='.$initial;
    changeParameterVal($initial);
    echo '<br/>initial='.$initial;

    function changeParameterRef(&$arg){
        $arg += 300;
        echo '<br/>args='.$arg;
     }
     echo '<br><br>';
     echo 'Calling function by reference';
     $initial = 15;
     echo '<br/>initial='.$initial;
     changeParameterRef($initial);
     echo '<br/>initial='.$initial;
?>
</body>
</html>