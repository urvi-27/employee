<?php
$sql="SELECT * FROM `new_employee`";
$search_result=filtertable($sql);
function filtertable($sql)
{
  $con=mysqli_connect("127.0.0.1","root","","employee");
  $filter_result=mysqli_query($con,$sql);
  return $filter_result;
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RECORDS OF EMPLOYEE</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
  <div class="container ">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="#">Employee <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="dashboard.html"style="text-decoration:none;color: black;"><i class="fa fa-home" aria-hidden="true">Home</i></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="new.php" style="text-decoration:none;color: black; cursor: pointer;"><i class="fa fa-plus" aria-hidden="true">New Employee</i></a>
            </li>
          <li class="nav-item">
            <a class="nav-link" href="update.php" style="text-decoration:none;color: black;cursor: pointer;"><i class="fa fa-pencil" aria-hidden="true">Update Employee</i></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="employee.php"style="text-decoration:none;color: black;"><i class="fa fa-user-circle" aria-hidden="true">All Employee</i></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="delete.php" style="text-decoration:none;color: black; cursor: pointer;"><i class="fa fa-trash" aria-hidden="true">Delete Employee</i></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php" style="text-decoration:none;color: black;"><i class="fa fa-sign-out" aria-hidden="true">Logout</i></a>
          </li>
        </ul>
      </div>
    </nav>
    </div>
          <style>
              .table thead th {
               border-top: 2px solid #000!important;
               border-bottom: 2px solid #000!important;
               border-left: 2px solid #000;
               border-right: 2px solid #000;
            }
          </style>
          <div class="container jumbotron">
            <table class="table table-bordered table-primary table-sm table-hover " style="border: 2px solid black; border-collapse: collapse; text-align: center;">
                <thead>
                  <tr>
                    <th scope="col">Number</th>

                    <th scope="col">ID Number</th>
                    <th scope="col">Employee Name</th>
                    <th scope="col">Employee Gender</th>
                    <th scope="col">Employee Email Address</th>
                    <th scope="col">Employee Contact</th>
                    <th scope="col">Employee Job Title</th>
                    <th scope="col">Employee Location</th>
                    <th scope="col">Employee Department</th>
                    <th scope="col">Employee Salary</th>
                  </tr>
                </thead>
                <tbody>
                <?php
                 $count=1;
                 while($row=mysqli_fetch_array($search_result)) {
                ?>
                <tr>
                  <td><?php echo $count;?></td>
                  <td><?php echo $row["ID_Number"];?></td>
                  <td><?php echo $row["Name"];?></td>
                  <td><?php echo $row["Gender"];?></td>
                  <td><?php echo $row["Email_Address"];?></td>
                  <td><?php echo $row["Contact"];?></td>
                  <td><?php echo $row["Job_Title"];?></td>
                  <td><?php echo $row["Location"];?></td>
                  <td><?php echo $row["Department"];?></td>
                  <td><?php echo $row["Salary"];?></td>
                </tr>
                <?php
                $count++;
                 }
                 ?>
          </tbody>
              </table>
          </div>

          
</body>
</html>