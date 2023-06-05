<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Question 1</title>
</head>
<body>
    <h1>Question 1</h1>
    <table width="400px" border="1px" cellspacing="0px">
        <?php
        $value = 0;
        for($col = 0; $col < 8; $col++) {
            echo "<tr>";
            $value = $col;
              for($row = 0; $row < 8; $row++) {
                if($value%2 == 0) {
                    echo "<td height=30px width=30px bgcolor=black></td>";
                    $value++;
                }
                else {
                    echo "<td height=30px width=30px bgcolor=white></td>";
                    $value++;
                }
            }
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>