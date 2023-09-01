<?php
    include 'connection.php';
  
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $city = $_POST["city"];
    $area = $_POST["area"];
    $base = $_POST["base"];
    $hourly = $_POST["hourly"];
   
    

    $sql = "INSERT INTO `pricing`(`city`, `area`, `base`, `hourly`) VALUES ('$city','$area','$base','$hourly')";

    $conn->query($sql);
}

header("Location: editPrice.html");
exit(); 
?>