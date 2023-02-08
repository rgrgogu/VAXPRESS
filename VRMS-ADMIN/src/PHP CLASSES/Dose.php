<?php
    class Dose{
        private $vaccineID;
        private $vaccineDate;
        private $vaccineManufacturer;
        private $lotNumber;
        private $vaccinatorName;
        private $approvedBy;

        function __construct($vaccine_id, $vaccineDate, $vaccineManufacturer, $lotNumber, $vaccinatorName, $approvedBy)
        {
            $this->vaccineID = $vaccine_id;
            $this->vaccineDate = $vaccineDate;
            $this->vaccineManufacturer = $vaccineManufacturer;
            $this->lotNumber = $lotNumber;
            $this->vaccinatorName = $vaccinatorName;
            $this->approvedBy = $approvedBy;
        }

        function setVaccineDate($vaccineDate){
            return $this->vaccineDate = $vaccineDate;
        }

        function setVaccineManufacturer($vaccineManufacturer){
            return $this->vaccineManufacturer = $vaccineManufacturer;
        }

        function setLotNumber($lotNumber){
            return $this->lotNumber = $lotNumber;
        }

        function setVaccinatorName($vaccinatorName){
            return $this->vaccinatorName = $vaccinatorName;
        }

        function setApprovedBy($approvedBy){
            return $this->approvedBy = $approvedBy;
        }

        function getVaccineID(){
            return $this->vaccineID;
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