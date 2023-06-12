<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Activity 14</title>
    <link rel="icon" href="favicon.ico" type="image/x-icon" />
</head>
<body>

    <h1>Activity 14</h1>
    <?php 
        class Artist {
            public $firstName;
            public $lastName;
            public $birthDate;
            public $birthCity;
            public $deathDate;

            function __construct($firstName, $lastName, $city, $birth, $death=null) {
                $this->firstName = $firstName;
                $this->lastName = $lastName;
                $this->birthCity = $city;
                $this->birthDate = $birth;
                $this->deathDate = $death;
            }

            public function outputAsTable (){
                $table = "<table>";
                $table .= "<tr><th colspan+'2'>";
                $table .= $this->firstName . " " . $this->lastName;
                $table .= "</th></tr>";
                $table .= "<tr><td>Birth:</td>";
                $table .= "<td>" .  $this->birthDate;
                $table .= "(" .  $this->birthCity .  ")</td></tr>";
                $table .= "<tr><td>Death:</td>";
                $table .= "<td>" .  $this->deathDate;
                $table .= "</td></tr>";
                $table .= "</table>";
                return $table;
            }
        }
        $picasso = new  Artist("Pablo", "Picasso", "Malaga", "Oct 25, 1881", "Apr 8, 1973");
        $dali = new Artist("Salvador", "Dali", "Figures","May 11, 1904","Jan 23, 1989");

        echo $picasso->outputAsTable();
        echo $dali->outputAsTable();
    ?>
</body>
</html>