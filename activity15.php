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

    <h1>Activity 15</h1>
    <?php 
        $host = 'localhost';
        $user ='root';
        $password = '';
        $database = 'webd3';
        $connection = mysqli_connect($host,$user, $password,$database);
        $pdo = new PDO("mysql:host=localhost;dbname=webd3","root","");
        $sql = "SELECT * FROM paintings";
        //$result = $pdo->query($sql);
        $result = mysqli_query($connection,$sql);
        $rows = mysqli_fetch_all($result);
        foreach ($rows as $row){
            echo $row[0] . " - " . $row[1] . " - " . $row[2] . " - " . $row[3];
            echo "<br>";
        }
        mysqli_free_result($result);
        mysqli_close($connection);
        $pdo=null;
    ?>
</body>
</html>