<?php

      define('DB_SERVER', '127.0.0.1');
      define('DB_USER', 'sloanisa_svnr');
      define('DB_PASS', '');
      define('DB_NAME', 'sloanisa_souvinear');

      $connection = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);

      if (mysqli_connect_errno()) {
        die ('Database connection failed: ' .
            mysqli_connect_error() .
            ' )' . mysqli_connect_errno() . ')'
        );
      }
?>
