<?php

  require_once("includes/initialize.php");
  if (isset($_POST['submit'])) {
    // form was submitted
    $username = $_POST['username'];
    $password = $_POST['password'];
      
    $hashed_password = sha1($password);
      
    $query = "SELECT * FROM user_accounts WHERE";
    $query .= " username = '{$username}'";
    $query .= " AND hashed_password = '{$hashed_password}'";
    $query .= " LIMIT 1";
    
    $result = mysqli_query($connection, $query);
      
    $row = mysqli_fetch_assoc($result);
      
    $user_id = $row['id'];
    echo $user_id;

    $_SESSION['user'] = $user_id;
    echo $_SESSION['user'];
      
    if (($result->num_rows)== 1) {
        //object(mysqli_result)#2 (5) { ["current_field"]=> int(0) ["field_count"]=> int(3) ["lengths"]=> NULL ["num_rows"]=> int(0) ["type"]=> int(0) } <- wrong password
        
        //object(mysqli_result)#2 (5) { ["current_field"]=> int(0) ["field_count"]=> int(3) ["lengths"]=> NULL ["num_rows"]=> int(1) ["type"]=> int(0) } <- right password
      
        //var_dump($result);
        redirect_to("main.php");
    }
    else {
      // unsuccessful login
        redirect_to("wrong.php");
    }
  }

?>