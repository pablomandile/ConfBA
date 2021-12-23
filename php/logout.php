<?php
session_start();

unset($_SESSION['loggedIN']);
session_destroy();
header('location: ../pages/TechTalksBA.php');
exit();
?>