<?php
if(session_id() == "")
{
      session_start();
} 
if(!isset($_SESSION['loggedIN'])){
    header('Location: ../pages/login.php');
    exit();
}
include ('../pages/listado.php');

?>