<?php
include 'connection.php'; // Include the database connection file

$garageIds = [];

$query = "SELECT garageid FROM garage";
$result = mysqli_query($conn, $query);

if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
        $garageIds[] = $row["garageid"];
    }
    mysqli_free_result($result);
} else {
    echo "Error fetching garage IDs: " . mysqli_error($conn);
}

mysqli_close($conn); // Close the database connection

echo json_encode($garageIds);
?>