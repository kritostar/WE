<?php
class Artist {

    const EARLIEST_DATE = 'January 1, 1200';
    public static $artistCount = 0;
    public $firstName;
    public $lastName;
    public $birthDate;
    public $birthCity;
    public $deathDate;

    function __construct($firstName, $lastName, $city, $birth, $death=null) {
        $this->setFirstName($firstName);
        $this->setLastName($lastName);
        $this->setBirthCity($city);
        $this->setBirthDate($birth);
        $this->SetDeathDate($death);
        self::$artistCount++;
    }

    //getters
    public function getFirstName(){ return $this->firstName;   }
    public function getLastName(){ return $this->lastName;   }
    public function getBirthDate(){ return $this->birthDate;  }
    public function getBirthCity(){ return $this->birthCity;  }
    public function getDeathDate(){ return $this->deathDate;  }

public static function getArtistCount() { return self::$artistCount;}
public function getEalistAllowedDate () {
        return date_create(self::EARLIEST_DATE);
    }
    
    //setters
    public function setFirstName($firstName){
        $this->firstName = $firstName;
    }
    public function setLastName($lastName){
        $this->lastName = $lastName;
    }
    public function setBirthDate($birthdate){
        $date = date_create($birthdate);
        if (!$date) {
            $this->birthDate = $this->getEalistAllowedDate();
        }
        else {
            if ($date < $this->getEalistAllowedDate()) {
                $date = $this->getEalistAllowedDate();
            }
            $this->birthDate = $date;
        }
    }
    
    public function setBirthCity($birthCity){
        $this->birthCity = $birthCity;
    }
    public function setDeathDate($deathdate){
        $date = date_create($deathdate);
        if (!$date) {
            $this->deathDate = $this->getEalistAllowedDate();
        }
        else {
            if ($date > $this->getBirthDate()) {
                $this->deathDate = $date;
            }
            else {
                $this->deathDate = $this->getBirthDate();
            }
        }
    }
    public function outputAsTable (){
        $table = "<table>";
        $table .= "<tr><th colspan+'2'>";
        $table .= $this->firstName . " " . $this->lastName;
        $table .= "</th></tr>";
        $table .= "<tr><td>Birth:</td>";
        $table .= "<td>" .  date_format($this->birthDate, 'd M y');
        $table .= "(" .  $this->birthCity .  ")</td></tr>";
        $table .= "<tr><td>Death:</td>";
        $table .= "<td>" .  date_format($this->deathDate, 'd M y');
        $table .= "</td></tr>";
        $table .= "</table>";
        return $table;
    }
}

?>