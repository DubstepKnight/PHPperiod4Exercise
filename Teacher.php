<?php
    class Teacher extends Person
    {
        public $teachingSubjects = array();
        public $department;

        function __construct($fn, $ln, $yob, $sj, $dp)
        {
            $this->firstName=$fn;
            $this->lastName=$ln;
            $this->yearOfBirth=$yob;
            $this->subjects=$sj;
            $this->department=$dp;
        }

        public function setTeachingSubjects($subjects)
        {
            array_push($this->subjects, $subjects);
        }    

        public function getTeachingSubjects()
        {
            return $this->subjects;
        }

        public function setDepartment($department)
        {
            $this->department=$department;
        }

        public function getDepartment()
        {
            return $this->department;
        }

        public function printAll()
        {
            $subjectsLoop=" ";
            foreach ($this -> teachingSubjects as $key ) 
            {
                $subjectsLoop.=$key.", ";
            }
             return parent::printAll(). "Department: ".$this->department." <br> Courses:".$subjectsLoop;
        }
    }

    
?>