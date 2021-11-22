<?php
$con=mysqli_connect("127.0.0.1","root","","employee");
$name=$_POST["nm"];
$email=$_POST["em"];
$contact=$_POST["co"];
$username=$_POST["us"];
$password=$_POST["ps"];
$sql="INSERT INTO `registrations`(`Full_Name`, `Email_Address`, `Contact`, `Username`, `Password`)  VALUES ('$name','$email','$contact','$username','$password')";
if(mysqli_query($con, $sql)){
    echo ("Records Saved!!");
}
?>