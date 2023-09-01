<?php
    $url ='localhost';
    $username = "root";
    $password = "";
    $dbname = "parksite";
    $conn = mysqli_connect($url, $username, $password, $dbname);

    if(!$conn) {
        die("Connection failed: ". mysqli_connect_error());
    }
   
?>