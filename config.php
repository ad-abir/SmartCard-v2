<?php
    //error_reporting(0);

    $servername = "localhost";
    $username   = "root";
    $password   = "";
    $dbname     = "smartcard";

    $connection = mysqli_connect($servername,$username,$password,$dbname);

    if(!$connection)
    {
        echo "Connection Failed".mysqli_connect_error();
    }
?>