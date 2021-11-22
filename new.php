<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>New Employee</title>
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
    .urvi1{
      margin-left:25% ;
      margin-right:25% ;
      margin-top:5% ;
      border: 2px solid black;
    }
  </style>
  <div class="urvi1">
<div class="modal-body">
        <form action="add.php" method="POST">
        <h4 class="modal-title" id="exampleModalLabel" >Add New Employee</h4>
          <div class="form-group">
            <label for="exampleInputidnumber">ID Number</label>
            <input type="number" class="form-control" name="id" aria-describedby="emailHelp" placeholder="Enter Id Number">
          </div>
          <div class="form-group">
            <label for="exampleInputname">Employee Name</label>
            <input type="name" class="form-control" name="na" aria-describedby="emailHelp" placeholder="Enter Name">
          </div>
          <div class="form-group">
            <label for="exampleInputgender">Employee Gender</label>
            <select class="form-control" name="ge">
              <option>Select Gender</option>
              <option>Female</option>
              <option>Male</option>
              </select>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail"> Employee Email Address</label>
            <input type="email" class="form-control" name="em" aria-describedby="emailHelp" placeholder="Enter email">
          </div>
          <div class="form-group">
            <label for="exampleInputcontact">Employee Contact</label>
            <input type="contact" class="form-control" name="co" placeholder="Enter Contact" maxLength="10">
          </div>
          <div class="form-group">
            <label for="exampleInputjobtitle">Employee Job Title</label>
            <input type="job title" class="form-control" name="jo" aria-describedby="emailHelp" placeholder="Enter Job Title">
          </div>
          <div class="form-group">
            <label for="exampleInputlocation">Employee Location</label>
            <input type="location" class="form-control" name="lo" aria-describedby="emailHelp" placeholder="Enter Location">
          </div>
          <div class="form-group">
            <label for="exampleInputdepartment">Employee Department</label>
            <select class="form-control" name="de">
              <option>IT Service Desk</option>
              <option>Educational Technology</option>
              <option>IT Administration</option>
              <option>Project Management Office</option>
              <option>Operations</option>
              <option>Information Security</option>
              <option>Systems Infrastructure</option>
              <option>Information Systems</option>
            </select>
          </div>
          <div class="form-group">
            <label for="exampleInputSalary">Employee Salary</label>
            <input type="salary" class="form-control" name="sa" aria-describedby="emailHelp" placeholder="Enter Salary">
          </div>
          <button class="btn btn-primary mt-2">ADD RECORDS</button>
          <button class="btn btn-light mt-2"> <a href="dashboard.html">Home</a></button>
        </form>
      </div>
</div>
</body>
</html>