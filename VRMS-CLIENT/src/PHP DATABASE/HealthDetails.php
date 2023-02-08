<?php
    class HealthDetails{
        private $health_id;
        private $category_id;
        private $category_name;
        private $philhealth;

        // OBJECT UNDER DOSAGE
        private $firstDosage;
        private $secondDosage;                   
        private $firstBooster;
        private $secondBooster;

        function __construct($health_id, $category_id, $category_name, $philhealth, $firstDosage, $secondDosage, $firstBooster, $secondBooster)
        {
            $this->health_id = $health_id;
            $this->category_id = $category_id;
            $this->category_name = $category_name;
            $this->philhealth = $philhealth;
            $this->firstDosage = $firstDosage;
            $this->secondDosage = $secondDosage;
            $this->firstBooster = $firstBooster;
            $this->secondBooster = $secondBooster;

            // echo $this->getFirstDosage()->getVaccineDate();
            // echo $this->getSecondDosage()->getVaccineDate();
        }

        function getHealthID(){
            return $this->health_id;
        }

        function getPhilhealth(){
            return $this->philhealth;
        }

        function getCategoryID(){
            return $this->category_id;
        }

        function getCategoryName(){
            return $this->category_name;
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