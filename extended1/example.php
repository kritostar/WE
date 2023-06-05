<?php 
    include ('exampleData.inc.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Activity 5</title>
</head>
<body>
<div class="container">
<h1>Extended Activity 1</h1>
    <form>
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" disabled value="<?php echo $name;?>">
        </div>

        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" disabled size="30" value="<?php echo $email;?>">

        </div>

        <div class="form-group">
            <label for="interests">Interests:</label>
            <select id="interests" name="interests">
            <?php 
                for ($i=0;$i<5;$i++){
                    $count = $i  + 1;
                    echo '<option>Interest ' . $count . '</option>';
                }    
            ?>
            </select>
        </div>

        <div class="form-group">
                <button type="submit">
                    Contact Us
                </button>
        </div>
        
    </form>
</div>
</body>
</html>