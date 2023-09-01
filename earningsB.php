<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous" />
    <link rel="stylesheet" href="earningsB.css" />
    <link rel="icon" href="images/logo.png" type="image/x-icon">
    <title>Earnings & Performance</title>
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
                            <a href="account.html" class="nav-link account">Preetar Parker</a>
                        </li>
                        <li class="nav-item">
                            <a href="processing.html"><button class="btn2">Join Garage</button></a>
                          </li>
                        <li class="nav-item">
                            <a href="home.html"><button class="btn1">Logout</button></a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <div class="sidebar">
            <a href="supervise.html"><button class="sidebtn"><img src="images/garage_3005402.png" alt=""> <br>Active
                    Garages</button></a>
            <a href="notification.html"><button class="sidebtn"><img src="images/alarm_1302532.png"
                        alt=""><br>Notifications</button></a>
            <a href="earningsB.html"><button class="sidebtn"><img src="images/banknote_5735283.png" alt=""><br>Earnings & Performance</button></a>
        </div>
        <div class="content">
            <div class="rowX">
                <div class="cardX">
                    <div class="cardhead">
                        <img src="images/partial.png">
                        <h4>Time-Based Income</h4>
                    </div>
                    <div class="cardtxt">
                        <div class="time">
                            <p>TODAY</p>
                            <img class="timeimg" src="images/coin.png">
                            <?php
                                $today = 200.00; //fetch from db
                                echo '<p>BDT ' . $today . '</p>';
                            ?>
                        </div>
                        <div class="time">
                            <p>YESTERDAY</p>
                            <img class="timeimg" src="images/coin.png">
                            <?php
                                $yesterday = 500.00; //fetch from db
                                echo '<p>BDT ' . $yesterday . '</p>';
                            ?>
                        </div>
                        <div class="time">
                            <p>LAST WEEK</p>
                            <img class="timeimg" src="images/coin.png">
                            <?php
                                $week = 1000.00; //fetch from db
                                echo '<p>BDT ' . $week . '</p>';
                            ?>
                        </div>
                        <div class="time">
                            <p>LAST MONTH</p>
                            <img class="timeimg" src="images/coin.png">
                            <?php
                                $month = 5000.00; //fetch from db
                                echo '<p>BDT ' . $month . '</p>';
                            ?>
                        </div>
                    </div>
                </div>
                <div class="cardX">
                    <div class="cardhead">
                        <img src="images/total.png">
                        <h4>Cumulative Income</h4>
                    </div>
                    <div class="cardtxt10">
                        <img class="totalimg" src="images/coin.png">
                        <?php
                            $total = 1000; //fetch from db
                            echo '<p class="totaltxt">' . $total . '</p>';
                        ?>
                    </div>
                </div>
            </div>
            <div class="rowX">
                <div class="cardX">
                    <div class="cardhead">
                        <img src="images/performance.png">
                        <h4>Performance Metrics</h4>
                    </div>
                    <div class="cardtxt11">
                        <img class="totalimg2" src="images/time.png">
                        <?php
                            $hours = 45; //fetch from db
                            echo '<p class="totaltxt2">' . $hours . ' hours</p>';
                        ?>
                        <img class="totalimg2" src="images/ratings.png">
                        <?php
                            $ratings = 8.20; //fetch from db
                            echo '<p class="totaltxt2">' . $ratings . '</p>';
                        ?>
                    </div>
                </div>
                <div class="cardX">
                    <div class="cardhead">
                        <img src="images/distribution.png">
                        <h4>Earning Distribution</h4>
                    </div>
                    <div class="cardtxt10">
                        <img class="totalimg3" src="images/pie-chart.png">
                        <p class="totaltxt3">Garage Owner:<br>Supervisor:<br>Company:</p>
                        <?php
                            $gorate = 50; //fetch from db
                            $svrate = 30; //fetch from db
                            $crate = 15; //fetch from db
                            echo '<p class="totaltxt4"> ' . $gorate . '%<br> ' . $svrate . '%<br> ' . $crate .'%</p>';
                        ?>
                    </div>
                </div>
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
                            Eliminating Parking Woes: Simplifying Spots, Easing Stress , One Space at a Time. Join us in a hassle-free journey!
                        </p>
                    </div>

                    <!-- Grid column -->
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                        <a class="links" href="contact.html"><h6 class="text-uppercase mb-4 font-weight-bold">Contact</h6></a>
                        <a class="links" href="faqmain.html"><h6 class="text-uppercase mb-4 font-weight-bold">FAQ</h6></a>
                        <a class="links" href="termsAndCondition.html"><h6 class="text-uppercase mb-4 font-weight-bold">Terms & Conditions</h6></a>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>
</body>

</html>