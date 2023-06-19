<?php

        class Sculpture extends Art {
            private $weight;
            function __construct($year, $artist, $name, $weight){
                parent::__construct($year, $artist, $name);
                $this->weight = $weight;
            }
            public function getWeight() { return $this->weight; }
            public function setWight ($weight){
                $this->weight = $weight;
            }
            public function __toString(){
                return parent::__toString() . ", Weight " . $this->getWeight() . "kg";
            }
        }

        
?>