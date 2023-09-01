<?php
    include 'connection.php';
  
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $accountType = $_POST["accountType"];
    $name = $_POST["name"];
    $email = $_POST["email"];
    $pass = $_POST["pass"];
    $nid = $_POST["nid"];
    $phone = $_POST["phone"];
    $vlisc = $_POST["vlisc"];
    $vreg = $_POST["vreg"];
    $vtype = $_POST["vtype"];
    $vmodel = $_POST["vmodel"];
    $garadr = $_POST["garadr"];
    $garsize = $_POST["garsize"];
    $garcap = $_POST["garcap"];
    $supnid = $_POST["supnid"];
    $seid=1;
    $status=0;
    $currentDate = date("Y-m-d");
   
    

    $sql = "INSERT INTO `registration`(
         `status`, `regdate`, `name`, `email`, `pass`, `nid`, `phone`, `vtype`, `vmodel`, `vreg`, `vlisc`, `garsize`, `garcap`, `garadr`, `supnid`, `type`, `seid`) VALUES ('$status','$currentDate','$name','$email','$pass','$nid','$phone','$vtype','$vmodel','$vreg','$vlisc','$garsize','$garcap','$garadr','$supnid','$accountType','$seid')";

    $conn->query($sql);
}

header("Location: processing.html");
exit(); 
?>