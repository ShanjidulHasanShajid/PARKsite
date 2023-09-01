<?php

 include 'connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $selectedCity = $_POST["selectedCity"];
    $selectedArea = $_POST["selectedArea"];
    $newBaseFare = $_POST["newBaseFare"];
    $newHourlyRate = $_POST["newHourlyRate"];

    // Update database, replace with actual update logic
    // Example using PDO
    $sql = "UPDATE pricing SET base = :base, hourly = :hourly WHERE city = :city AND area = :area";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(":base", $newBaseFare);
    $stmt->bindParam(":hourly", $newHourlyRate);
    $stmt->bindParam(":city", $selectedCity);
    $stmt->bindParam(":area", $selectedArea);
    $stmt->execute();

    // Redirect after updating
    header("Location: editPrice.php");
    exit();
}

// Assuming you have retrieved data from the database
// For example, using PDO or MySQLi to fetch data
$selectedCity = "Dhaka"; // Fetched from the database
$selectedArea = "Gulshan"; // Fetched from the database
$baseFare = 100; // Fetched from the database
$hourlyRate = 10; // Fetched from the database
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous" />
    <link rel="stylesheet" href="editPrice.css" />
    <link rel="icon" href="images/logo.png" type="image/x-icon">

    <title>Edit Price</title>
</head>

<body>
    <header>
        <nav class="navbar fixed-top navbar-expand-md navbar-light bg-light">
            <div class="container">
                <a href="home.html" class="navbar-brand"><img class="imglogo" src="images/logo.png" alt="" width="60"
                        class="d-inline-block align-text-top" />
                    PARKsite</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbtn navbar-collapse" id="navmenu">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a href="account.html" class="nav-link account">Preetar Barker</a>
                        </li>
                        <!-- <li class="nav-item">
              <button class="btn1">Join Garage</button>
            </li> -->
                        <li class="nav-item">
                            <a href="home.html"><button class="btn2">Logout</button></a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <br /><br /><br /><br /><br /><br /><br />

        <div class="sidebar">
            <a href="admin.html"><button class="sidebtn"><img src="images/analytics_994170.png" alt=""> <br>View System
                    Statistics</button></a>
            <a href="verifyUser.html"><button class="sidebtn"><img src="images/authentication_1791961.png"
                        alt=""><br>Verify User</button></a>
            <a href="editPrice.html"><button class="sidebtn"><img src="images/pricing_1728450.png" alt=""><br>Edit
                    Price</button></a>
            <a href="#"><button class="sidebtn"><img src="images/cheque_2250736.png" alt=""><br>Edit
                    Earnings</button></a>
        </div>
        <div class="content">
        <div id="button-class" class="button-class">
                <button id="Edit" class="btn1" onclick="edit()">Edit Price</button>
                <button id="Add" class="btn1" onclick="add()">Add Price</button>
            </div>
            <div id="haha" class="haha">
                <div id="search-div" class="search-div">
                    <label>Select City</label>
                    <select class="combo-box" id="citySelect">
                        <!-- Options will be dynamically added here -->
                    </select>
                    <label>Select Area</label>
                    <select class="combo-box" id="areaSelect">
                        <!-- Options will be dynamically added here -->
                    </select>
                    <button id="searchButton"><img class="search-icon src_icn" src="images/search.png" alt=""></button>
                </div>
                <br><br><br>
                <form id="editForm" class="myform" method="post" action="editPrice.php">
                    <label>Base Fare</label>
                    <input type="text" id="baseFareInput" class="field" name="newBaseFare"
                        value="<?php echo $baseFare; ?>" required>
                    <label>Hourly Rate</label>
                    <input type="text" id="hourlyRateInput" class="field" name="newHourlyRate"
                        value="<?php echo $hourlyRate; ?>" required>
                    <button type="submit" class="btn1">Submit</button>
                    <input type="hidden" name="selectedCity" value="<?php echo $selectedCity; ?>">
                    <input type="hidden" name="selectedArea" value="<?php echo $selectedArea; ?>">
                </form>
            </div>
        </div>
    </main>
    <footer class="text-center text-lg-start text-white bg-dark">
        <!-- Grid container -->
        <div class="container p-4 pb-0">
            <section class="">
                <!--Grid row-->
                <div class="row">
                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                        <img class="imglogo" src="images/logo.png" alt="logo" width="100" style="margin-left: 13px" />
                    </div>
                    <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                        <h6 class="text-uppercase mb-4 font-weight-bold">PARKsite</h6>
                        <p>
                            Eliminating Parking Woes: Simplifying Spots, Easing Stress , One Space at a Time. Join us in
                            a hassle-free
                            journey!
                        </p>
                    </div>

                    <!-- Grid column -->
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                        <a class="links" href="contact.html">
                            <h6 class="text-uppercase mb-4 font-weight-bold">Contact</h6>
                        </a>
                        <a class="links" href="faqmain.html">
                            <h6 class="text-uppercase mb-4 font-weight-bold">FAQ</h6>
                        </a>
                        <a class="links" href="termsAndCondition.html">
                            <h6 class="text-uppercase mb-4 font-weight-bold">Terms & Conditions</h6>
                        </a>
                        <p><i class="fas fa-envelope mr-3"></i> <a href="Bangla/homeBangla.html" style=" color: white;">Language: বাংলা</a></p>
                    </div>
                </div>
                <!--Grid row-->
            </section>
        </div>
        <!-- Grid container -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
            © 2023 Copyright:<a class="text-white" href="index.html">www.parksite.com.bd</a>
        </div>
    </footer>
</body>

</html>