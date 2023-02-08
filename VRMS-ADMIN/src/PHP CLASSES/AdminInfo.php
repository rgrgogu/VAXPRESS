<?php
    class AdminInfo{
        private $adminID;
        private $last_name;
        private $given_name;
        private $middle_name;
        private $suffix;
        private $sex;
        private $birthday;
        private $age;
        private $address;
        private $contact;
        private $department;
        private $email;

        function __construct($arr_adminInfo){
            $this->adminID = $arr_adminInfo[0];
            $this->last_name = $arr_adminInfo[1];
            $this->given_name = $arr_adminInfo[2];
            $this->middle_name = $arr_adminInfo[3];
            $this->suffix = $arr_adminInfo[4];
            $this->sex = $arr_adminInfo[5];
            $this->birthday = $arr_adminInfo[6];
            $this->age = $arr_adminInfo[7];
            $this->address = $arr_adminInfo[8];
            $this->contact = $arr_adminInfo[9];
            $this->department = $arr_adminInfo[10];
            $this->email = $arr_adminInfo[11];

            // echo $this->adminID . "<br>";
            // echo $this->last_name . "<br>";
            // echo $this->given_name . "<br>";
            // echo $this->middle_name . "<br>";
            // echo $this->suffix . "<br>";
            // echo $this->sex . "<br>";
            // echo $this->birthday . "<br>";
            // echo $this->age . "<br>";
            // echo $this->address . "<br>";
            // echo $this->contact . "<br>";
            // echo $this->department . "<br>";
            // echo $this->email . "<br>";
        }

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

        function setBirthday($birthday){
            $this->birthday = $birthday;
        }

        function setAge($age){
            $this->age = $age;
        }

        function setAddress($address){
            $this->address = $address;
        }

        function setContact($contact){
            $this->contact = $contact;
        }

        function setDepartment($department){
            $this->department = $department;
        }

        function setEmail($email){
            $this->email = $email;
        }

        // GETTERS
        function getAdminID(){
            return $this->adminID;
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

        function getFullName(){
            return $this->getGivenName() . " " . $this->getMiddleName() . " " . $this->getLastName();
        }

        function getSuffix(){
            return $this->suffix;
        }

        function getSex(){
            return $this->sex;
        }

        function getBirthday(){
            return $this->birthday;
        }

        function getAge(){
            return $this->age;
        }

        function getAddress(){
            return $this->address;
        }

        function getContact(){
            return $this->contact;
        }

        function getDepartment(){
            return $this->department;
        }

        function getEmail(){
            return $this->email;
        }
    }
