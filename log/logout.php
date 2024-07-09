<?php

session_start();
unset($_SESSION['role']);
session_destroy();
setcookie("stompin",$_SESSION['role'], time()  - 3600, "/");
header('location: ../index.php');
exit();

