<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Question 2</title>
    <link rel="icon" href="favicon.ico" type="image/x-icon" />
</head>
<body>
    <div class="jumbotron text-center">
        <h1>Question 2</h1>
    </div>
    <div class="container">
    <form action="data.php" method="post">
            <div>
                <label for="username">Username:</label>
                <input type="text" name="username" required value=""><br />
            </div>
            <div>
                Select your favourite colors:<br />
                <input type="checkbox" name="color[]" value="red" />Red<br />
                <input type="checkbox" name="color[]" value="blue" />Blue<br />
                <input type="checkbox" name="color[]" value="green" />Green<br />
                <input type="checkbox" name="color[]" value="yellow" />Yellow<br />
                <input type="checkbox" name="color[]" value="pink" />Pink<br />
                <input type="checkbox" name="color[]" value="black" />Black<br />
                <input type="checkbox" name="color[]" value="white" />White<br />
            </div>
            <input type="submit" name="submit" value="Submit" />
        </div>
    </form>
</body>
</html>