<?php
session_start();
unset($_SESSION['Usuario']);
unset($_SESSION['adminEst']);
unset($_SESSION['adminProf']);
header("Location:index.php");
?>