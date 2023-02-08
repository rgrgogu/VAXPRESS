<?php
    require ('./ClientInfo.php');

    class HealthDetails extends ClientInfo{
        private $philhealth;
        private $category;

        // OBJECT
        private $firstDosage;
        private $secondDosage;                   
        private $firstBooster;
        private $secondBooster;

        function __construct($clientID, $lastName, $givenName, $middleName, 
        $suffix, $sex, $email, $mobileNum, $birthday, $age, $philhealth, $category, 
        $firstDosage, $secondDosage, $firstBooster, $secondBooster)
        {
            parent::__construct(
            $clientID,
            $lastName,
            $givenName,
            $middleName,
            $suffix,
            $sex,
            $mobileNum,
            $email,
            $birthday,
            $age);

            $this->philhealth = $philhealth;
            $this->category = $category;
            $this->firstDosage = $firstDosage;
            $this->secondDosage = $secondDosage;
            $this->firstBooster = $firstBooster;
            $this->secondBooster = $secondBooster;

            // echo $this->getFirstDosage()->getVaccineDate();
            // echo $this->getSecondDosage()->getVaccineDate();
        }

        function getPhilhealth(){
            return $this->philhealth;
        }

        function getCategory(){
            return $this->category;
        }

        function getFirstDosage(){
            return $this->firstDosage;
        }

        function getSecondDosage(){
            return $this->secondDosage;
        }

        function getFirstBooster(){
            return $this->firstBooster;
        }

        function getSecondBooster(){
            return $this->secondBooster;
        }
    }
?>