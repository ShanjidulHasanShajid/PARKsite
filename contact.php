<?php
    $nameX=$_POST['name'];
    $emailX=$_POST['email'];
    $phoneX=$_POST['phone'];
    $messageX=$_POST['message'];

    $conn = mysqli_connect("localhost","root", "" ,"parksite");
    if($conn === false){
        die("ERROR: Could not connect." . mysqli_connect_error());
    }   

    $sql = "INSERT INTO contact (name,email,phone,message) VALUES ( '$nameX', '$emailX','$phoneX','$messageX')";
    mysqli_query($conn,$sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <link rel="icon" href="images/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="contact.css">
</head>

<body>

    <div class="part1">
        <div class="content">
            <img src="images/pin_7781408.png" alt="">
            <h2  class="glow">ADDRESS</h2>
            <p>343/B Khilgaon, Taltola<br> Dhaka-1205</p>
        </div>
        <div class="content">
            <img src="images/chat-bubble_7781483.png" alt="">
            <h2 class="glow">CONTACT</h2>
            <p>+88019xxxxxxxx, +88017xxxxxxxx</p>
        </div>
        <div class="content">
            <img src="images/mail_7781391.png" alt="">
            <h2 class="glow">EMAIL</h2>
            <p>2020975@iub.edu.bd</p>
        </div>
    </div>
    <div class="part2">
        <p class="glow1">Send Us A Message</p>
        <form action="#" method="POST" >
            <label>Name:</label>
            <input type="text" id="name" name="name" placeholder="enter name here" required>
            <br>
            <label>Email:</label>
            <input type="text" id="email" name="email" placeholder="example@email.com" required>
            <br>
            <label>Phone:</label>
            <input type="text" id="phone" name="phone" placeholder="enter 11 digit number" required>
            <br>
            
            <textarea id="message" name="message" rows="3" placeholder="tell us your thoughts" required></textarea>
            <br>
            <!-- <a href="home.html"><button class="submit" type="submit">Submit</button></a> -->
            <input class="submit" type="submit" value="submit">
        </form>
    </div>

</body>

</html>