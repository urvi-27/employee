
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Register</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
  <style>
    .urvi{
      margin-left:25% ;
      margin-right:25% ;
      margin-top:5% ;
      border: 2px solid black;
    }
  </style>
  <div class="urvi">
<div class="modal-body">
        <form action="process.php" method="POST">
        <h5 class="modal-title" id="exampleModalLabel">Registration</h5>
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
              <button class="btn btn-primary mt-2">Sign-In</button>
              </form>
 </div>
</div>
</body>
</html>