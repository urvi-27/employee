<?php
$con=mysqli_connect("127.0.0.1","root","","employee");
$id_number=$_POST["id"];
$name=$_POST["na"];
$gender=$_POST["ge"];
$email=$_POST["em"];
$contact=$_POST["co"];
$job=$_POST["jo"];
$location=$_POST["lo"];
$department=$_POST["de"];
$salary=$_POST["sa"];
$sql="INSERT INTO `new_employee`(`ID_Number`, `Name`, `Gender`, `Email_Address`, `Contact`, `Job_Title`, `Location`, `Department`, `Salary`) VALUES ('$id_number','$name','$gender','$email','$contact','$job','$location','$department','$salary')";
if(mysqli_query($con, $sql)){
    header("Location:employee.php");
}
?>