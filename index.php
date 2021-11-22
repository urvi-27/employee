<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container jumbotron mt-5 pt-5 pb-5 ml-25 mr-25 ">
        <div class="card mx-auto" style="width: 18rem;">
            <div class="card-body">
        <h1 style="text-align: center;">Login</h1>
        <?php
          if(@$_GET['Empty']==true)
          {
           ?>
           <div class="alert alert-warning alert-dismissible fade show" role="alert">
          <strong>Error!!</strong> <?php echo $_GET['Empty']?>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </button>
        </div>
            <?php
          }
      ?>


         <form action="loginlogic.php" method="POST">
            <div class="form-group">
              
              <label for="exampleInputEmail">Username</label>
              <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="" placeholder="Enter user" name="user">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Password</label>
              <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="pass">
            </div>
            <button type="submit" class="btn btn-primary mt-2">Login</button>
        </form>
        
        
            <!-- <a href="register.html" style="text-decoration: none;">Register here</a> -->
            <!-- Button trigger modal -->

<div href="registeremp.php" style="cursor:pointer;">

<a href="registeremp.php" style="text-decoration: none;color:black;">Register</a>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Registration</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="process.php" method="POST">
          <div class="form-group row">
            <label for="inputfullname" class="col-sm-5 col-form-label">Full Name</label>
            <div class="col-sm-15 ">
              <input type="text" class="form-control" name="nm" placeholder="Full Name">
            </div>
          </div>
          <div class="form-group row">
              <label for="inputemail" class="col-sm-5 col-form-label">Email Address</label>
              <div class="col-sm-15">
                <input type="text" class="form-control" name="em" placeholder="Email">
              </div>
              </div>
              <div class="form-group row">
                  <label for="inputcontact" class="col-sm-5 col-form-label">Contact</label>
                  <div class="col-sm-15">
                    <input type="text" class="form-control" name="co" placeholder="Contact">
                  </div>
                  </div>
                  <div class="form-group row">
                      <label for="inputusername" class="col-sm-5 col-form-label">Username</label>
                      <div class="col-sm-15">
                        <input type="text" class="form-control" name="us" placeholder="Username">
                      </div>
                      </div>
                      <div class="form-group row">
                          <label for="inputPassword" class="col-sm-5 col-form-label">Password</label>
                          <div class="col-sm-15">
                            <input type="password" class="form-control" name="ps" placeholder="Password">
                          </div>
                        </div>
                        <!-- <button type="signup" class="btn btn-primary"><a href="dashboard.html" style="color: white;text-decoration: none;">Sign-In</a> </button>
                        <a href="index.html" style="text-decoration: none;">Login</a> -->
              <button class="btn btn-primary">Sign-In</button>
              </form>




      </div>
      <div class="modal-footer">
      </div>
    </div>
  </div>
</div>
</div>
          </div>
          </div>
    </div>
</body>
</html>