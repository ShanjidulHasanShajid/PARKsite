<?php
    include 'connection.php';
    if (isset($_GET['regid'])) {
        $regid = $_GET['regid'];
    }
    $sql = "SELECT * from registration WHERE regid = $regid";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    $regdate = $row['regdate'];
    $type = $row['type'];
    $name = $row['name'];
    $email = $row['email'];
    $nid = $row['nid'];
    $phone = $row['phone'];
    $vtype = $row['vtype'];
    $vmodel = $row['vmodel'];
    $vreg = $row['vreg'];
    $vlisc = $row['vlisc'];
    $garsize = $row['garsize'];
    $garcap = $row['garcap'];
    $garadr = $row['garadr'];
    $supnid = $row['supnid'];
    $pass=$row['pass'];
    
    if (isset($_POST['reject'])){
      $query="UPDATE `registration` SET `status`='2' WHERE regid = $regid";
       if (mysqli_query($conn, $query)){
        header("Location: verifyUser.php");
        exit();
       }
    }

    if (isset($_POST['authorize'])){
      if($type=='Vehicle Owner'){
          $q="INSERT INTO `vehicle`( `vehicleType`, `vehicleModel`, `vehicleReg`) VALUES ('$vtype','$vmodel','$vreg')";
          mysqli_query($conn, $q);
          $q2="SELECT vehicleid FROM vehicle ORDER BY vehicleid DESC LIMIT 1";
          $veid = mysqli_query($conn, $q2);
          $row = mysqli_fetch_assoc($veid);
          $veid = $row['vehicleid'];
          $q3="INSERT INTO `vo`( `licenseNo`, `vehicleid`) VALUES ('$vlisc','$veid')";
          mysqli_query($conn, $q3);
          $q4="SELECT void FROM vo ORDER BY void DESC LIMIT 1";
          $void = mysqli_query($conn, $q4);
          $row = mysqli_fetch_assoc($void);
          $void = $row['void'];
          $q5="INSERT INTO `client`( `name`, `email`, `pass`, `nid`, `phone`, `ctype`, `vo`) VALUES ('$name','$email','$pass','$nid','$phone','$type','$void')";
          mysqli_query($conn, $q5);
      }
      if($type=='Garage Owner'){
          $q="INSERT INTO `garage`( `garsize`, `garcap`, `garadr`) VALUES ('$garsize','$garcap','$garadr')";
          mysqli_query($conn, $q);
          $q2="SELECT garageid FROM garage ORDER BY garageid DESC LIMIT 1";
          $gaid = mysqli_query($conn, $q2);
          $row = mysqli_fetch_assoc($gaid);
          $gaid = $row['garageid'];
          $q3="INSERT INTO `go`( `supnid`, `garageid`) VALUES ('$supnid','$gaid')";
          mysqli_query($conn, $q3);
          $q4="SELECT goid FROM go ORDER BY goid DESC LIMIT 1";
          $goid = mysqli_query($conn, $q4);
          $row = mysqli_fetch_assoc($goid);
          $goid = $row['goid'];
          $q5="INSERT INTO `client`( `name`, `email`, `pass`, `nid`, `phone`, `ctype`, `go`) VALUES ('$name','$email','$pass','$nid','$phone','$type','$goid')";
          mysqli_query($conn, $q5);
      }
      if($type=='Supervisor'){
        $q3="INSERT INTO `super`(`workhrs`) VALUES ('2')";
        mysqli_query($conn, $q3);
        $q4="SELECT sid FROM super ORDER BY sid DESC LIMIT 1";
        $sid = mysqli_query($conn, $q4);
        $row = mysqli_fetch_assoc($sid);
        $sid = $row['sid'];
        $q5="INSERT INTO `client`( `name`, `email`, `pass`, `nid`, `phone`, `ctype`, `s`) VALUES ('$name','$email','$pass','$nid','$phone','$type','$sid')";
        mysqli_query($conn, $q5);
      }
      
      $query="UPDATE `registration` SET `status`='1' WHERE regid = $regid";
       
      if (mysqli_query($conn, $query)){
        header("Location: verifyUser.php");
        exit();
       }
    }

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous" />
  <link rel="stylesheet" href="adminAuthorize.css" />

  <title>Authorize</title>
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
            <!-- <li class="nav-item">
              <a href="https://9anime.gs/home" target="_blank" class="nav-link account">Account</a>
            </li> -->
            <li class="nav-item">
              <button class="btn1" onclick="goBack()">Go Back</button>
            </li>
            <!-- <li class="nav-item">
              <button class="btn2">Login</button>
            </li> -->
          </ul>
        </div>
      </div>
    </nav>
  </header>
  <main>
    <div class="info">
      <div class="left common">
        <label for="">Registration ID: <?php echo $regid ?></label>
        <label for="">Registration Date: <?php echo $regdate ?></label>
        <label id="" >User Type: <?php echo $type ?> </label>
        <label id="" >Name: <?php echo $name ?></label>
        <label id="" >Email: <?php echo $email ?></label>
        <label id="" >NID: <?php echo $nid ?></label>
        <label id="" >Phone: <?php echo $phone ?></label>
      </div>
      <div class="right common">
        <label id="" >Vehicle Type: <?php echo $vtype ?></label>
        <label id="" >Vehicle Model: <?php echo $vmodel ?></label>
        <label id="" >Vehicle Reg: <?php echo $vreg ?></label>
        <label id="" >Vehicle License: <?php echo $vlisc ?></label>
        <label id="" >Garage Size: <?php echo $garsize ?></label>
        <label id="" >Garage Capacity: <?php echo $garcap ?></label>
        <label id="" >Garage Address: <?php echo $garadr ?></label>
        <label for="">Supervisor NID: <?php echo $supnid ?></label>
    </div>
    </div>
    <div class="butt">
      <form action="adminAuthorize.php?regid=<?php echo $regid ?>" method="POST">
        <button type="submit" name="authorize" class="btn3" >AUTHORIZE</button>
      </form>
      <form action="adminAuthorize.php?regid=<?php echo $regid ?>" method="POST">
       <button type="submit" name="reject" class="btn3 btn4" >REJECT</button>
      </form>
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
            <br />
            <h2 style="margin-right: auto">PARKsite</h2>
          </div>
          <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
            <h6 class="text-uppercase mb-4 font-weight-bold">PARKsite</h6>
            <p>
              Exciting lists of trendy anime for you to enjoy for free! Visit
              our other websites to watch animes for free!
            </p>
          </div>

          <!-- Grid column -->
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
            <h6 class="text-uppercase mb-4 font-weight-bold">Contact</h6>
            <p><i class="fas fa-home mr-3"></i> New York, NY 10012, US</p>
            <p><i class="fas fa-envelope mr-3"></i> info@gmail.com</p>
            <p><i class="fas fa-phone mr-3"></i> + 01 234 567 88</p>
            <p><i class="fas fa-print mr-3"></i> + 01 234 567 89</p>
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
  <script src="goBack.js"></script>
  <script src="adminAuthorize.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
    crossorigin="anonymous"></script>
</body>

</html>