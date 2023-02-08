<?php
    class ClientInfo{
        private $client_id;
        private $last_name;
        private $given_name;
        private $middle_name;
        private $suffix;
        private $sex;
        private $birthday;
        private $age;
        private $contact;
        private $email;

        function __construct($client_id, $last_name, $given_name, $middle_name, $suffix, $sex, $birthday, $age, $contact, $email){
            $this->client_id = $client_id;
            $this->last_name = $last_name;
            $this->given_name = $given_name;
            $this->middle_name = $middle_name;
            $this->suffix = $suffix;
            $this->sex = $sex;
            $this->birthday = $birthday;
            $this->age = $age;
            $this->contact = $contact;
            $this->email = $email;
        }

        // SETTERS
        function setLastName($lastName){
            $this->last_name = $lastName;
        }

        function setGivenName($givenName){
            $this->given_name = $givenName;
        }

        function setMiddleName($middleName){
            $this->middle_name = $middleName;
        }

        function setSuffix($suffix){
            $this->suffix = $suffix;
        }

        function setSex($sex){
            $this->sex = $sex;
        }

        function setMobileNum($mobileNum){
            $this->contact = $mobileNum;
        }

        function setBirthday($birthday){
            $this->birthday = $birthday;
        }

        // GETTERS
        function getClientID(){
            return $this->client_id;
        }

        function getFullName(){
            return $this->given_name . " " . $this->middle_name . " " . $this->last_name;
        }

        function getLastName(){
            return $this->last_name;
        }

        function getGivenName(){
            return $this->given_name;
        }

        function getMiddleName(){
            return $this->middle_name;
        }

        function getSuffix(){
            return $this->suffix;
        }

        function getSex(){
            return $this->sex;
        }

        function getEmail(){
            return $this->email;
        }

        function getContact(){
            return $this->contact;
        }

        function getBirthday(){
            return $this->birthday;
        }

        function getAge(){
            return $this->age;
        }
    }
?>