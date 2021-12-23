<?php
session_start();

if(!isset($_SESSION['loggedIN'])){
    header('Location: login.php');
    exit();
}
include ('listado.php');

?>