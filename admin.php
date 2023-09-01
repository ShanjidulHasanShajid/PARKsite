<?php
    include 'connection.php';
    $sql = "SELECT * FROM contact;";
    $result = mysqli_query($conn, $sql);
    $count = 0;
    while ($row = mysqli_fetch_assoc($result)) {
      $count = $count + 1;
  }
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous" />
  <link rel="stylesheet" href="admin.css" />
  <link rel="icon" href="images/logo.png" type="image/x-icon">

  <title>System Statistics</title>
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
      <a href="admin.html"><button class="sidebtn"><img src="images/analytics_994170.png" alt=""> <br>View System Statistics</button></a>
      <a href="verifyUser.php"><button class="sidebtn"><img src="images/authentication_1791961.png" alt=""><br>Verify User</button></a>
      <a href="editPrice.html"><button class="sidebtn"><img src="images/pricing_1728450.png"
            alt=""><br>Edit Price</button></a>
      <a href="#"><button class="sidebtn"><img src="images/cheque_2250736.png" alt=""><br>Edit Earnings</button></a>
    </div>
    <div class="content">
    <div class="innercont">
      <div class="top">
        <h1>System Statistics</h1>
      </div>
      <div class="bottom">
        <div class="left">
            <?php
                $barData = [780, 360, 630]; // Need to be replaced with fetched data
                $maxValue = array_sum($barData);
                $barLabels = ['Vehicle Owner', 'Garage Owner', 'Supervisor'];
                $colors = ['bar-color-1', 'bar-color-2', 'bar-color-3'];
                $percent = array_map(function ($value) use ($maxValue) {
                    return round(($value / $maxValue) * 100, 2);
                }, $barData);
                for ($i = 0; $i < count($barData); $i++) {
                    $colorIndex = $i % count($colors);

                    echo '<div class="bar-label style="font-weight: bold;">' . $barLabels[$i] . '</div>';
                    echo '<div class="bar-wrapper">';
                    echo '<div class="bar ' . $colors[$colorIndex] . '" style="width: ' . $percent[$i] . '%;">' . $percent[$i] . '%</div>';
                    echo '</div>';
                }
            ?>
            <div class="manual">
              <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ea quas numquam ipsam tenetur modi, assumenda tempora itaque velit, pariatur aspernatur temporibus? Quisquam, provident. Itaque, voluptas. Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas, deleniti! Lorem ipsum dolor, sit amet consectetur adipisicing elit. Libero aperiam recusandae saepe omnis quaerat dignissimos numquam inventore quibusdam dolorum, possimus nostrum nihil tenetur autem dicta illo? Quod quis error hic?</p>
            </div>
          </div>
        <div class="right">
            <div class="cardX">
                <img src="images/query.png">
                <h3>Unresolved Queries</h3>
                <?php
                    echo '<h5>' . $count . '</h5>';
                ?>
                <a href="adminResolve.html"><button class="btn3">Resolve</button></a>
            </div>
            <div class="cardX">
                <img src="images/gmail.png">
                <h3>Check Your Email</h3>
                <a href="https://mail.google.com/mail/inbox"><button class="btn3">Go To Gmail</button></a>
            </div>
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
              Eliminating Parking Woes: Simplifying Spots, Easing Stress , One Space at a Time. Join us in a hassle-free
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
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
    crossorigin="anonymous"></script>
</body>

</html>