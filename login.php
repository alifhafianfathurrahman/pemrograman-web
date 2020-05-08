<!DOCTYPE html>
<html>
<head>
   <title>login</title>
</head>
<body>
    <div class="container">
            <h2>Silahkan login</h2><br>
  
        <form method="post" action="login_action.php">
        <div class="form-group">
            <label>Username:</label>
            <input type="text" class="form-control" name="username" placeholder="Masukan Username">
        </div>
        <div class="form-group">
            <label>Password:</label>
            <input type="password" class="form-control" name="password" placeholder="Masukan Password">
        </div>
        <div class="form-group">
            <input type="submit"  class="btn btn-primary"  value="Login">
        </div>
        </form>
    </div>
</body>
</html>