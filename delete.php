<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Employee</title>
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
        .urvi4{
      margin-left:25% ;
      margin-right:25% ;
      margin-top:5% ;
      margin-bottom:5% ;
      border: 2px solid black;
    }
    </style>
    <div class="urvi4">
<div class="modal-body">
        <div class="container jumbotron">
        <form action="deletelogic.php" method="POST">
            <h2>Delete Employee </h2>
            <?php
          if(@$_GET['Empty']==true)
          {
           ?>
           <div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong></strong> <?php echo $_GET['Empty']?>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </button>
        </div>
            <?php
          }
      ?>
          <div class="form-group row">
              <label for="exampleInputidnumber" class="col-sm-2 col-form-label">ID_Number</label>
              <div class="col-sm-10">
                <input type="id number" class="form-control" id="inputPassword" placeholder="Enter ID number" name="inumber"> 
              </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="delete" class="btn btn-danger ">Delete</button>
        <button class="btn btn-light"><a href="dashboard.html">Home</a></button>
        </form>
      </div>
    </div>
</div>
</body>
</html>