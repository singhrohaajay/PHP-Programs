<?php 

session_start();

session_unset();
session_destroy();

if(!isset($_SESSION['username'])){
    header('location:q7.html');
}



?>