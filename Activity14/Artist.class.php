    <?php 
class Artist {

    const EARLIEST_DATE = 'January 1, 1200';
    public static $artistCount = 0;
    private $firstName;
    private $lastName;
    private $birthDate;
    private $birthCity;
    private $deathDate;

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
    public function getEarliestAllowedDate () {
            return date_create(self::EARLIEST_DATE);
        }
        
        //setters
        public function setFirstName($firstName){
            $this->firstName = $firstName;
        }
        public function setLastName($lastName){
            $this->lastName = $lastName;
        }
            
        public function setBirthCity($birthCity){
            $this->birthCity = $birthCity;
        }
        public function setBirthDate($birthDate)
        {
            $date = date_create($birthDate);
            if (!$date) {
                $this->birthDate = $this->getEarliestAllowedDate();
            } else {
                if ($date < $this->getEarliestAllowedDate()) {
                    $date = $this->getEarliestAllowedDate();
                }
                $this->birthDate = $date;
            }
        }

        public function setDeathDate($deathDate)
        {
            $date = date_create($deathDate);
            
            if (!$date) {
                $this->deathDate = $this->getEarliestAllowedDate();
            } else {
                if ($date > $this->getBirthDate()) {
                    $this->deathDate = $date;
                }
                else 
                    $this->deathDate = $this->getBirthDate();
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