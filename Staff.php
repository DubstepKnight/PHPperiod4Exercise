<?php
    class Staff extends Person
    {
        public $vacancy;
    
        function __construct($fn=null, $ln=null, $yob, $vy)
        {
            $this->firstName=$fn;
            $this->lastName=$ln;
            $this->yearOfBirth=$yob;
            $this->vacancy=$vy;
        }
    
        function setVacancy($value)
        {
            $this->vacancy=$value;
        }
        function getVacancy()
        {
            return $this->vacancy;
        }
        
        public function printAll(){
            return parent::printAll(). "Vacancy: ".$this->vacancy." <br>";
        }
    
    }

    
    
?>