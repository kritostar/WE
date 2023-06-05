<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activity 4</title>
    <link rel="icon" href="favicon.ico" type="image/x-icon" />
</head>
<body>
<?php 
    $id = '1664807592907';
    $firstName = 'Carolina';
    $lastName  = 'Facchini';
    echo "<img src='1664807592907.png' alt='" . $firstName. " " . $lastName."'>";
    echo '<br>';
    echo  "<img src='$id.png' alt ='$firstName $lastName'>";
    echo '<br>';
    echo "<img src=\"$id.png\"' alt =\"$firstName $lastName\">";
    echo '<br>';
    echo '<img src="'.$id.'.png" alt='.$firstName . ' '.$lastName.'>';
    echo '<br>';
    echo '<a href="artist.php?id='.$id.'">'.$firstName.' '.$lastName.'</a>';
?>
</body>
</html>