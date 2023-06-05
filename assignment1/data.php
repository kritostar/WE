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
    <div id="container" style="margin-left: 60px;">
        <div>
        <?php
            if(isset($_POST['submit']) )
            {
                if (!($_POST['username'])){
                    echo("You did not enter an username");
                } elseif (!isset($_POST['color']))
                {
                    echo("You didn't select any color.");
                }
                else
                {
                    $myboxes = $_POST['color'];
                    $username = $_POST['username'];
                    $i = count($myboxes);
                    echo("<div><p><b>$username</b> favourite color(s) are <b>$i</b> option(s):</p></div>");
                    echo("<div><ul style='list-style-type: none'>");
                    for($j = 0; $j < $i; $j++)
                    {
                        echo "<li>".ucfirst($myboxes[$j])."</li>";
                    }
                    echo "</ul></div>";
                }


            }
        ?>
        </div>
    </div>
</body>
</html>