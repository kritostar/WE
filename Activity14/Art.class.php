<?php

        abstract class Art {
            private $name;
            private $artist;
            private $yearCreated;
            function __construct($year , $artist, $name){
                $this->setName($name);
                $this->setArtist($artist);
                $this->setYear($year);
            }

            public function getYear() {return $this->yearCreated;}
            public function getArtist() {return $this->artist;}
            public function getName() {return $this->name;}
            public function setYear($year){
                if (is_numeric($year))
                    $this->yearCreated = $year;
            }

            public function setArtist($artist){
                if ( (is_object($artist)) && ($artist instanceof Artist)){
                    $this->artist = $artist;
                }
            } 
            public function setName ($name){
                $this->name = $name;
            }

            public function __toString(){
                $line = "Year: " . $this->getYear();
                $line .= ", Name: " . $this->getName();
                $line .= ", Artist: " . $this->getArtist()->getFirstName();
                $line .= " " . $this->getArtist()->getLastName();
                return $line;    

            }
        }


    ?>
