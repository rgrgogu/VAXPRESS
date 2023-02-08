<?php
    class Dosage{
        private $vaccineDate;
        private $vaccineManufacturer;
        private $lotNumber;
        private $vaccinatorName;
        private $approvedBy;

        function __construct($vaccineDate, $vaccineManufacturer, $lotNumber, $vaccinatorName, $approvedBy)
        {
            $this->vaccineDate = $vaccineDate;
            $this->vaccineManufacturer = $vaccineManufacturer;
            $this->lotNumber = $lotNumber;
            $this->vaccinatorName = $vaccinatorName;
            $this->approvedBy = $approvedBy;
        }

        function getVaccineDate(){
            return $this->vaccineDate;
        }

        function getVaccineManufacturer(){
            return $this->vaccineManufacturer;
        }

        function getLotNumber(){
            return $this->lotNumber;
        }

        function getVaccinatorName(){
            return $this->vaccinatorName;
        }

        function getApprovedBy(){
            return $this->approvedBy;
        }
    }
?>