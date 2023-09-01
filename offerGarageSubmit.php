<?php
include 'connection.php'; // Include the database connection file

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $garageId = $_POST["garageid"];
    $startTime = $_POST["aStartTime"];
    $endTime = $_POST["aEndTime"];
    $reservationDate = $_POST["aDate"];

    $query = "UPDATE garage SET aStartTime = ?, aEndTime = ?, aDate = ? WHERE garageid = ?";
    $stmt = mysqli_prepare($conn, $query);
    
    mysqli_stmt_bind_param($stmt, "sssi", $startTime, $endTime, $reservationDate, $garageId);

    if (mysqli_stmt_execute($stmt)) {
        echo "Reservation successfully submitted!";
    } else {
        echo "Error submitting reservation: " . mysqli_error($conn);
    }

    mysqli_stmt_close($stmt);
}

mysqli_close($conn); // Close the database connection
?>
