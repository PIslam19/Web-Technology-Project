<?php
    $serverName= "localhost";
    $userName= "root";
    $password = "";
    $dbName = "project";

    $con = mysqli_connect($serverName, $userName, $password);
    mysqli_select_db($con, $dbName);
    if(!$con){
        echo("connection field!");
    }