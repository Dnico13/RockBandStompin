<?php
session_start();
unset($_SESSION['role']);
session_destroy();
setcookie("stompin", time()  - 600, "/");
header('location: ../index.php');
exit();
