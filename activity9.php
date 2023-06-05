<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Activity 9</title>
    <link rel="icon" href="favicon.ico" type="image/x-icon" />
</head>
<body>
    <h1>Activity 9</h1>
<?php 
    $days= array("Mon","Tue","Wed","Thu","Fri");
    $days[7]="Sat";
    print_r($days);
    echo $days[6];  
?>
</body>
</html>