<?php
    $user = "Carolina";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activity 2</title>
    <link rel="icon" href="favicon.ico" type="image/x-icon" />
</head>
<body>
    <h1>Welcome <?php echo $user; ?></h1>
    <p>
        The server time is 
        <?php 
        date_default_timezone_set('US/Eastern');
        echo "<strong>";
        echo date("H:i:s");
        echo "</strong>";
        ?>
    </p>
</body>
</html>