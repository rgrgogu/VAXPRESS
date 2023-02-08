<?php
    class Client{
        // ATTRIBUTES
        private $clientID;
        private $last_name;
        private $given_name;
        private $middle_name;
        private $suffix;
        private $sex;
        private $birthday;
        private $age;
        private $contact;
        private $email;
        
        // CONSTRUCTOR
        function __construct($client_id, $last_name, $given_name, $middle_name, 
        $suffix, $sex, $birthday, $age, $contact, $email){
            $this->clientID = $client_id;
            $this->last_name = $last_name;
            $this->given_name = $given_name;
            $this->middle_name = $middle_name;
            $this->suffix = $suffix;
            $this->sex = $sex;
            $this->contact = $contact;
            $this->birthday = $birthday;
            $this->email = $email;
            $this->age = $age;
        }

        // CUSTOM METHODS

        // SETTERS
        function setLastName($last_name){
            $this->last_name = $last_name;
        }

        function setGivenName($given_name){
            $this->given_name = $given_name;
        }

        function setMiddleName($middle_name){
            $this->middle_name = $middle_name;
        }

        function setSuffix($suffix){
            $this->suffix = $suffix;
        }

        function setSex($sex){
            $this->sex = $sex;
        }

        function setContact($contact){
            $this->contact = $contact;
        }

        function setBirthday($birthday){
            $this->birthday = $birthday;
        }

        function setAge($age){
            $this->age = $age;
        }

        // GETTERS
        function getClientID(){
            return $this->clientID;
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