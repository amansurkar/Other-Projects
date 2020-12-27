<?php
session_start();
unset($_SESSION["user"]);
 echo "<script>window.location='http://localhost/login/login.php';</script>";
?>