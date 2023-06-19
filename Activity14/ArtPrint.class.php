<?php

        class ArtPrint extends Painting {
            private $printNumber;

            function __construct($year, $artist, $name, $medium, $printNumber) {
                parent::__construct($year,$artist,$name,$medium);
                $this->setPrintNumber($printNumber);    
            }
            public function getPrintNumber(){return $this->printNumber;}
            public function setPrintNumber($printNumber){
                if (is_numeric($printNumber))
                    $this->printNumber = $printNumber;
            }            
            public function __toString(){
                return parent::__toString() . ", Print number " . $this->getPrintNumber();
            }


        }

    ?>
