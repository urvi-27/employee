<?php
$con=mysqli_connect("127.0.0.1","root","","employee");
if(!$con){
    echo "NOT CONNECTED TO SERVER";
}
session_start();
$query="SELECT * FROM `registrations` WHERE Username='".$_POST['user']."' AND Password='".$_POST['pass']."'";
$result=mysqli_query($con,$query);
if (mysqli_fetch_assoc($result)){

 header("Location:dashboard.html");
}
else{
    header("Location:index.php?Empty=Either Username and Password do not match or You are not yet Verified! Contact your IT Dept.");
}
?>