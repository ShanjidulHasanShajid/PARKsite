<?php
include 'connection.php';
$clickedButton="";
if ($_SERVER["REQUEST_METHOD"] === "GET") {
    if (isset($_GET['vehicle'])) {
        $clickedButton = $_GET['vehicle'];
        // echo "Clicked Button: " . $clickedButton;
    } else {
        // echo "No button was clicked.";
    }
}

$sql = "SELECT DISTINCT city FROM pricing";
$result = mysqli_query($conn, $sql);
$cities = array();
while ($row = mysqli_fetch_assoc($result)) {
    $cities[] = $row['city'];
}

$sql2 = "SELECT DISTINCT area FROM pricing";
$areaResult = mysqli_query($conn, $sql2);
$area = array();
while ($row = mysqli_fetch_assoc($areaResult)) {
    $area[] = $row['area'];
}


// $garid = $_POST["gid"];  bookingid	bStartTime	bEndTime	bDate	booktype

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $startTime = $_POST["inTime"];
    $endTime = $_POST["outTime"];
    $date = $_POST["inDate"];
    $bookT = $_POST["bookType"];


    $query = "INSERT INTO `booking` (`bStartTime`, `bEndTime`, `bDate`, `booktype`) VALUES ('$startTime', '$endTime', '$date', '$bookT')";
    mysqli_query($conn, $query);
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous" />
    <link rel="stylesheet" href="bookGarage.css" />
    <link rel="icon" href="images/logo.png" type="image/x-icon">
    <title>Book Garage</title>
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
                            <a href="account.html" class="nav-link account">William Jefferson</a>
                        </li>
                        <li class="nav-item">
                            <a href="home.html"><button class="btn2">Logout</button></a>
                        </li>
                        <li class="nav-item">
                            <a href="QRscan.html"><button class="btn1">QR Scan</button></a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <div class="mother-div">
            <div class="side-bar">
                <button class="side-bar-options"><img src="images/searchICON.png" alt="">Search Parking Spot</button>
                <a href="notificationB.html" style="text-decoration: none; color: black;"><button
                        class="side-bar-options"><img src="images/alarm_1302532.png" alt="">Notifications</button></a>
                <a href="voHistory.html" style="text-decoration: none; color: black;"><button
                        class="side-bar-options"><img src="images/history.png" alt="">History</button></a>

            </div>
            <div class="window">

                <p>Press Vehicle Type</p>
                <div>
                    <form class="logos" method="get">
                        <button type="submit" name="vehicle" value="Car"><img src="images/car.png" alt=""></button>
                        <button type="submit" name="vehicle" value="Motorcycle"><img src="images/motorcycle.png"
                                alt=""></button>
                        <button type="submit" name="vehicle" value="Truck"><img src="images/truck.png" alt=""></button>
                    </form>
                </div>
                <p>Enter Details</p>
                <div class="haha">
                    <div class="search-div">
                        <label>Select City</label>
                        <select class="field" name="" id="">
                            <?php
                                $count = 1; 
                                for ($i=0;$i<count($cities);$i++){
                                    echo ' <option value=' . $cities[$i] . '> ' . $cities[$i] . '</option> ';
                                    $count = $count + 1;
                                }
                            ?>
           
                        </select>
                        <label>Select Area</label>
                        <select class="field" name="" id="">
                            <?php
                                $count = 1; 
                                for ($i=0;$i<count($area);$i++){
                                    echo ' <option value=' . $area[$i] . '> ' . $area[$i] . '</option> ';
                                    $count = $count + 1;
                                }
                            ?>
                        </select>
                    </div>
                    <form method="post" class="myform">
                        <label>Selected Vehicle Type</label>
                        <label class="field">
                            <?php
                                if ($_SERVER["REQUEST_METHOD"] === "GET") {
                                    if (isset($_GET['vehicle'])) {
                                        $clickedButton = $_GET['vehicle'];
                                        echo $clickedButton;
                                    }
                                }
                            
                            
                            ?>
                        </label>
                        <label>Check-In Time</label>
                        <input type="time" class="field" name="inTime" required>
                        <label>Check-Out Time</label>
                        <input type="time" class="field" name="outTime" required>
                        <label>Date</label>
                        <input type="date" class="field" name="inDate" required>
                        <input type="hidden" name="bookType" value= "<?php
                                if ($_SERVER["REQUEST_METHOD"] === "GET") {
                                    if (isset($_GET['vehicle'])) {
                                        $clickedButton = $_GET['vehicle'];
                                        echo $clickedButton;
                                    }
                                }
                            
                            
                            ?>">
                        <button class="btn2" type="submit">Submit</button>
                        <!-- <a href="availableGarage.html" style="text-decoration: none;color: black; width: 80px;"><button
                                class="btn2" type="submit">Submit</button></a> -->
                    </form>
                </div>

            </div>
        </div>
    </main>
    <footer class="text-center text-lg-start text-white bg-dark">
        
        <div class="container p-4 pb-0">
            <section class="">
                
                <div class="row">
                    
                    <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                        <img class="imglogo" src="images/logo.png" alt="logo" width="100" style="margin-left: 13px" />
                    </div>
                    <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                        <h6 class="text-uppercase mb-4 font-weight-bold">PARKsite</h6>
                        <p>
                            Eliminating Parking Woes: Simplifying Spots, Easing Stress , One Space at a Time. Join us in
                            a hassle-free journey!
                        </p>
                    </div>

                    
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
            </section>
        </div>
        
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
            © 2023 Copyright:<a class="text-white" href="index.html">www.parksite.com.bd</a>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>
</body>

</html>