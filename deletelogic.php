<?php
$con=mysqli_connect("127.0.0.1","root","","employee");
$query="DELETE FROM `new_employee` WHERE `ID_Number`='".$_POST['inumber']."'";
$result=mysqli_query($con,$query);
 if($con->query($query)===TRUE){
     header("Location: delete.php?Empty=Delete Successfull!!");
 }
 ?>