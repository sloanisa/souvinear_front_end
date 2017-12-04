<?php
  require_once 'includes/initialize.php'; 
  if (isset($_POST['submit'])) {
    // form was submitted
    $user_id = $_SESSION['user'];
    $concert_date = $_POST['concert_date'];
    $concert_time = $_POST['concert_time'];
    $venue = $_POST['venue'];
    $headliner = $_POST['headliner'];
    $supporting_act = $_POST['supporting_act'];
    $entry = $_POST['entry'];


      
    $query = "INSERT INTO concert_info (";
    $query .= " user_id, concert_date, concert_time, venue, headliner, supporting_act, entry";
    $query .= ") VALUES (";
    $query .= " '{$user_id}', '{$concert_date}', '{$concert_time}', '{$venue}', '{$headliner}', '{$supporting_act}', '{$entry}'";
    $query .= ")"; 
      
    $result = mysqli_query($connection, $query);
      
    if ($result) {
        // Success
        echo '<script language="javascript">';
        echo 'alert("Concert Added!")';
        echo '</script>';
        redirect_to("add_concert.php");

    } 
      else {
          die ("Database query failed. " . mysqli_error($connection));
    }
      
  }

  
?>