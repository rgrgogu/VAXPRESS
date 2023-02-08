<?php
    class ClientLocation{
        private $city;
        private $house_no;
        private $street;
        private $brgy_name;
        private $zip_code;
        private $address_type;

        function __construct($city, $house_no, $street, $brgy_name, $zip_code, $address_type){
            $this->city = $city;
            $this->house_no = $house_no;
            $this->street = $street;
            $this->brgy_name = $brgy_name;
            $this->zip_code = $zip_code;
            $this->address_type = $address_type;
        }

        // SETTERS
        function setHouseNumber($house_no){
            $this->house_no = $house_no;
        }

        function setStreet($street){
            $this->street = $street;
        }

        function setBrgy($brgy_name){
            $this->brgy_name = $brgy_name;
        }

        function setZipCode($zip_code){
            $this->zip_code = $zip_code;
        }

        function setAddressType($address_type){
            $this->address_type = $address_type;
        }

        // GETTERS
        function getCity(){
            return $this->city;
        }

        function getHouseNumber(){
            return $this->house_no;
        }

        function getStreet(){
            return $this->street;
        }

        function getBrgy(){
            return $this->brgy_name;
        }

        function getZipCode(){
            return $this->zip_code;
        }

        function getAddressType(){
            return $this->address_type;
        }
    }
?>