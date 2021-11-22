<?php
$con=mysqli_connect("127.0.0.1","root","","employee");
$sql="UPDATE `new_employee` SET  `Name`='".$_POST['name']."',`Gender`='".$_POST['gender']."',`Email_Address`='".$_POST['email']."',`Contact`='".$_POST['contact']."',`Job_Title`='".$_POST['jobtitle']."',`Location`='".$_POST['location']."',`Department`='".$_POST['department']."',`Salary`='".$_POST['salary']."'WHERE ID_Number='".$_POST['idnumber']."'";
if(mysqli_query($con,$sql)){
    header("Location:update.php?Empty=Update Success");
}
?>