<?php
    abstract class Person 
    {
        public $firstName;
        public $lastName;
        public $yearOfBirth;

        public function setFirstName($fname)
        {
            $this->firstName=$fname;
        }
    
        public function getFirstName()
        {
            return $this->firstName;
        }
    
        public function setLastName($lname)
        {
            $this->lastName=$lname;
        }
    
        public function getLastName()
        {
            return $this->lastName;
        }
    
        public function setYearOfBirth($yearOfBirth)
        {
            $this->yearOfBirth=$yearOfBirth;
        }
    
        public function getYearOfBirth()
        {
            return $this->yearOfBirth;
        }
    
        public function getAge()
        {
            if ($this -> yearOfBirth)
            {
                $num=(int)($this->getYearOfBirth());
                return (2019-$num);
            }
            else
            {
                 return "No age added";
            }
        }
    
        
        public function printAll()
        {
            return "First name: ".$this->firstName." <br>
            Last name: ".$this->lastName." <br>
            Year of birth: ".$this->yearOfBirth." <br>
            Age: " .$this ->getAge()."<br>";
        }
    }

    
?>