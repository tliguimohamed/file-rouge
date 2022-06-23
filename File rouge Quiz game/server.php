<?php

session_start();

if(isset($_GET['type']))
{

    $_SESSION['ii'] = $_GET['type'];
    header("location:Quiz.php");
}