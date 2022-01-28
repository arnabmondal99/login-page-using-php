<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login page</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>

<!-- Popper JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    
</head>
<body>
    <div class="container">

    <div class="row">
        <div class="col-lg-6">
          <!--login form-->
          <h2>Login form</h2>
          <form action="validation.php" method="post">
             <div class="form-group">
               <label for="">username :</label>
               <input type="text" name="user" class="form-control">
             </div>

             <div class="form-group">
               <label for="">password :</label>
               <input type="password" name="password" class="form-control">
             </div>
          <button type="submit" class="btn btn-primary">Login</button>
          </form>
        </div>

        
        <div class="col-lg-6">
          <!--login form-->
          <h2>sign in</h2>
          <form action="registration.php" method="post">
             <div class="form-group">
               <label for="">username :</label>
               <input type="text" name="user" class="form-control">
             </div>
             <div class="form-group">
               <label for="">password :</label>
               <input type="password" name="password" class="form-control">
             </div>
          <button type="submit" class="btn btn-primary">sign in</button>
          </form>
        </div>
    </div>

    </div>
</body>
</html>