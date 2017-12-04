<?php if (!(isset($_SESSION['user']))) {
    redirect_to("./login.php");
}
echo $_SESSION['user'];
?>