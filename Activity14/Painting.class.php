<?php

        class Painting extends Art {
            private $medium;
            function __construct($year, $artist, $name, $medium){
                parent::__construct($year, $artist, $name);
                $this->medium = $medium;
            }
            public function getMedium() { return $this->medium; }
            public function setMedium($medium){
                $this->medium = $medium;
            }
            public function __toString(){
                return parent::__toString() . ", Medium " . $this->getMedium();
            }
        }

       
    ?>
