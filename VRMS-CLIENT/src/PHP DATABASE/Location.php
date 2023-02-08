<?php
    require ('../PHP DATABASE/Client.php');
    
    class Location extends Client{
        private $city;
        private $house_no;
        private $street;
        private $brgy_id;
        private $brgy_name;
        private $zip_code;
        private $address_type;

        function __construct($client_id, $last_name, $given_name, $middle_name, 
        $suffix, $sex, $birthday, $age, $contact, $email, $city, $house_no, $street, 
        $brgy_name, $brgy_id, $zip_code, $address_type)
        {
            parent::__construct($client_id, $last_name, $given_name, $middle_name, 
            $suffix, $sex, $birthday, $age, $contact, $email);

            $this->city = $city;
            $this->house_no = $house_no;
            $this->street = $street;
            $this->brgy_id = $brgy_id;
            $this->brgy_name = $brgy_name;
            $this->zip_code = $zip_code;
            $this->address_type = $address_type;
        }

        function setHouseNo($house_no){
            $this->house_no = $house_no;
        }

        function setStreet($street){
            $this->street = $street;
        }

        function setBrgyID($brgy_id){
            $this->brgy_id = $brgy_id;
        }

        function setBrgyName($brgy_name){
            $this->brgy_name = $brgy_name;
        }

        function setZipCode($zip_code){
            $this->zip_code = $zip_code;
        }

        function setAddressType($address_type){
            $this->address_type = $address_type;
        }

        function getCity(){
            return $this->city;
        }

        function getHouseNo(){
            return $this->house_no;
        }

        function getStreet(){
            return $this->street;
        }

        function getBrgyID(){
            return $this->brgy_id;
        }

        function getBrgyName(){
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