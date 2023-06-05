<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Activity 5</title>
    <link rel="icon" href="favicon.ico" type="image/x-icon" />
</head>
<body>
    <h1>Activity 5</h1>
<?php 
    echo '<br>User is NOT logged in<br>'; 
    $userStatus = 'notLogged';
    //IF 1st 
    if ($userStatus == 'loggedIn') { ?>
        <a href="account.php">Account</a><br>
        <a href="logout.php">Log Out</a><br>
    <?php } else {    ?>
        <a href="login.php">Log In</a><br>
        <a href="signup.php">Sign Up</a><br>
    <?php } ?>

    <?php 
    $userStatus = 'loggedIn';
    echo '<br>User is logged in<br>';   
    //IF 2nd
    if ($userStatus == 'loggedIn') { 
        echo '<a href="account.php">Account</a><br>';
        echo '<a href="logout.php">Log Out</a><br>';
    } else {    
        echo '<a href="login.php">Log In</a><br>';
        echo '<a href="signup.php">Sign Up</a><br>';
    } 

    echo '<br>';
    $artType = 'PT';
    //SWITCH
    switch ($artType) {
        case 'PT':
            $output = 'painting';
            break;
        case 'SC':
            $output = 'sculpture';
            break;
        
        default:
            $output = 'other';
    }

    echo $output.'<br>';
    $artType = 'SC';
    //IF same as switch
    if ($artType == 'PT') {
        $output = 'painting';
    } elseif ($artType == 'SC') {
        $output = 'sculpture';
    } else {
        $output = 'other';
    }
    echo $output.' <br>';
    //WHILE
    echo '<br>WHILE Count from 0 to 9: <br>'; 
    $count = 0;
    while ($count < 10) {
        echo $count.' ';
        $count++;
    }
    echo '<br>';
    //DO WHILE
    $count = 0;
    echo ' DO WHILE Count from 0 to 9 LOOP 2: <br>'; 
    do {
        echo $count.' ';
        $count = $count + 2;
        
    } while ($count < 10);
    echo '<br>';
    echo '<br>FOR Count from 0 to 9: <br>'; 
    //FOR 1st
    for ($count = 0; $count < 10; $count++) {
        echo $count.' ';
    }
    echo '<br>FOR Count from 0 to 99 LOOP 5: <br>'; 
    //FOR 2nd
    for ($count = 0; $count < 100; $count+=5) {
        echo $count.' ';
    }
    ?>




</body>
</html>