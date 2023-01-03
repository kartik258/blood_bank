<?php
session_start();
unset($_SESSION['username']);
?>
<?php
session_destroy();
header("Location:login.php")



?>s