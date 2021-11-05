<?php
/**
 * Connexion DB
 */
class DbConnect 
{
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $dbname = "ndjamlah_db";

    $db = mysqli_connect($hostname, $username, $password, $dbname);

    return $db;
}
