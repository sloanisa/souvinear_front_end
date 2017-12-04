<?php require_once 'includes/initialize.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>CREATE ACCOUNT</title>
  <style media="screen">
    form {
      height: 6.25rem;
      width: 6.25rem;
      position: absolute;
      top: 0; right: 0; bottom: 0; left: 0;
      margin: auto;
    }
    .control {
      margin-bottom: 1rem;
    }
  </style>
</head>
<body>


  <form action="create_processing.php" method="post">
      <h1>Create Account</h1>
    <div class="form-group">
        <label for="username">User Name</label>
        <input type="text" name="username" id="username" value="">
    </div>
    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" name="password" id="password" value="">
    </div>
    <input type="submit" name="submit" value="Create Account">
    <br>
    <a href="index.php">Log In</a>
  </form>
    
    <?php echo $_SESSION['user']; ?>

</body>
</html>