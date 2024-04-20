<!DOCTYPE html>  <?php session_start();?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!--important line for bootstrap-->
    <title>Document</title>
    <!--Adding an external css file(bootstrap)-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <script src="script.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
    <div class="container">
      <h1 align="center" id="heading">Welcome To NBC Sports!</h1>
    <div class="row">
        <div class="col-6" id="login">
      <form action="check_login.php" method="post">
        <div class="modal-header row">
        <div class="col-1"><i class="bi bi-person-circle" style="font-size: 2rem;"></i></div>
          <div class="col-10"><h1 class="modal-title fs-5" id="exampleModalLabel"><b>Already Registered?</b><br>Login</h1><br></div>
        </div>
        <div class="modal-body">
          <div class="mb-3 row">
            <div class="col-4"><label class="form-label">User id</label></div>
            <div class="col"><input class="form-control" type="text" name="user_id"></div>
          </div>
          <div class="mb-1 row">
            <div class="col-4"><label class="form-label">Password</label></div>
            <div class="col"><input class="form-control" type="password" name="password"></div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Login</button></div>
      </form>
    
        </div>
        <div class="col-6" id="register">
            <h2>New here?</h2>
            <a href="register.php"><h4>Register</h4></a>
        </div>
    </div>
</div>
</body>