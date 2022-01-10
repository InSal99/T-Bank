<?php
include
session_start();

if(!isset($_SESSION['log'])) {
    header('location : login/index.php');
    exit;
}
?>