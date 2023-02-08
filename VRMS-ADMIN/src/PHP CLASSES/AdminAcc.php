<?php
    require('../PHP CLASSES/AdminInfo.php');

    class AdminAcc extends AdminInfo{
        private $username;
        private $password;
        private $website;
        private $facebook;
        private $twitter;
        private $instagram;
        private $github;

        function __construct($arr_adminInfo, $arr_adminAcc, $arr_socmed){
            parent::__construct($arr_adminInfo);

            $this->username = $arr_adminAcc[1];
            $this->password = $arr_adminAcc[2];

            $this->website = $arr_socmed[1];
            $this->github = $arr_socmed[2];
            $this->twitter = $arr_socmed[3];
            $this->instagram = $arr_socmed[4];
            $this->facebook = $arr_socmed[5];
            // echo $this->username . "<br>";
            // echo $this->password . "<br>";
        }

        function setUsername($username){
            $this->username = $username;
        }

        function setPassword($password){
            $this->password = $password;
        }

        function setWebsite($website){
            $this->website = $website;
        }

        function setFacebook($facebook){
            $this->facebook = $facebook;
        }

        function setTwitter($twitter){
            $this->twitter = $twitter;
        }

        function setInstagram($instagram){
            $this->instagram = $instagram;
        }

        function setGithub($github){
            $this->github = $github;
        }

        function getUsername(){
            return $this->username;
        }

        function getPassword(){
            return $this->password;
        }

        function getWebsite(){
            return $this->website;
        }

        function getFacebook(){
            return $this->facebook;
        }

        function getTwitter(){
            return $this->twitter;
        }

        function getInstagram(){
            return $this->instagram;
        }

        function getGithub(){
            return $this->github;
        }
    }
