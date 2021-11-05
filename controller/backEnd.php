<?php 
   require_once('./model/backEnd.php');
    function registerUser($fname, $lname, $pseudo, $city, $email, $phoneNumber, $password)
    {
        $jores = insertUser($fname, $lname, $pseudo, $city, $email, $phoneNumber, $password);
    }
    
 ?>