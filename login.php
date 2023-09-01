<?php

include 'connection.php';
    $message = "";
    $clientid = $_POST["clientid"];
    $pass = $_POST["pass"];
    $ctype = $_POST["ctype"];


    $query = "SELECT * FROM client WHERE clientid = '$clientid'";
    $result = mysqli_query($conn,$query);

    if ($result) {
        if (mysqli_num_rows($result) > 0) {
            $user = $result->fetch_assoc();
            if ($pass === $user["pass"]) {
                if($ctype === $user["ctype"]){
                    switch ($ctype) {
                        case 'Vehicle Owner':
                            header("Location: bookGarage.php");
                            exit;
                        case 'Garage Owner':
                            header("Location: offerGarage.html");
                            exit;
                        case 'Supervisor':
                            header("Location: supervise.html");
                            exit;
                        default:
                            header("Location: processing.html");
                    }
                }
                else{
                    $message =  "Incorrect Credentials";
                }
            } 
            else {
                $message = "Incorrect Credentials";
            }
        } 
        else {
            $message = "Incorrect Credentials";
        }
    } 
    else {
        $message = "Incorrect Credentials";
    }

    $conn->close();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login to your account</title>
    <link rel="stylesheet" href="login.css">
    <link rel="icon" href="images/logo.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>
    <div class="login-form">
        <form action="login.php" method="POST">
            <div class="head">
                <a href="home.html"><img class="imglogo" src="images/logo.png"></a>
                <h1>Login to PARKsite</h1>
            </div>
            <div class="content">
                <div class="input-field">
                    <input type="clientid" name="clientid" placeholder="User ID">
                </div>
                <div class="input-field">
                    <input type="pass" name="pass" placeholder="Password">
                </div>
                <br>
                <select id="menuX" name= "ctype" >
                    <option value="Vehicle Owner">Vehicle Owner</option>
                    <option value="Garage Owner">Garage Owner</option>
                    <option value="Supervisor">Supervisor</option>
                    <option value="Admin">Admin</option>
                </select>
                <br>
                <a href="#" class="link">Forgot Your Password?</a>
                <?php
                echo "<p>" . $message . "</p>";
                ?>
            </div>
            <div class="action">
                <button type="submit" value="submit">Log in</button>
            </div>
        </form>
    </div>
    <script src="login.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>
</body>

</html>

