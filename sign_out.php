<?php
session_start();
unset($_SESSION["loggedin"]);
unset($_SESSION["username"]);
header("Location:sign_in.php");
?>