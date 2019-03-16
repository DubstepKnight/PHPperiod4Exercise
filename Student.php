<?php
    class Student extends Person
    {
        public $selectedCourses = array();
        public $creditPoints;
        
        function __construct($fn=null, $ln=null, $yob=null, $cs=null, $cp=null)
        {
            $this->firstName=$fn;
            $this->lastName=$ln;
            $this->yearOfBirth=$yob;
            $this->selectedCourses=$cs;
            $this->creditPoints=$cp;
        }
        
        public function setSelectedCourses($selectedCourses)
        {
            array_push($this->selectedCourses,$selectedCourses);
        }
    
        public function getSelectedCourses()
        {
            return $this->selectedCourses;
        }
        
        public function setCreditPoints($creditPoints)
        {
            $this->creditPoints=$creditPoints;
        }
    
        public function getCreditPoints()
        {
            return $this->creditPoints;
        }

        public function printAll(){
            $coursesLoop=" ";
            foreach ($this -> selectedCourses as $key ) {
                $coursesLoop.=$key.", ";
             }
             return parent::printAll(). "Credits: ".$this->creditPoints." <br> Courses:".$coursesLoop;
        }
    }


    
?>