<?php
session_start();
session_unset();
session_destroy();
header("Location: /elmotorcito/pages/Login.php");
exit();
?>