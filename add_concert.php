<?php require_once 'includes/initialize.php'; ?>
<?php require_once 'concert_processing.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Add Concert</title>
</head>
<body>
    <form action="concert_processing.php" method="post">
      <div id="gather">
        <hr>
        <p>
          <input type="date" name="concert_date" id="concert_date">
        </p>
        <p>
          <input type="time" name="concert_time" id="concert_time">
        <p>
          <input type="text" name="headliner" placeholder="Headliner" id="headliner">
        </p>
        <p>
          <input type="text" name="supporting_act"  placeholder="Supporting Act" id="supporting_act">
        </p>
        <p>
          <input type="text" name="venue"  placeholder="Venue" id="venue">
        </p>
        <p>
          <input type="text" name="entry"  placeholder="Journal Entry" id="entry">
        </p>
          
          <p></p>
        <hr>
        <input type="submit" name="submit" value="Add">
        <a href='main.php'>Back to Main</a>

      </div>
    </form>
</body>
</html>