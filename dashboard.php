<?php
include("config.php");
include("firebaseRDB.php");

if(!isset($_SESSION['user'])){
    header("location: login.php");
}else{
    echo "Hello <b>{$_SESSION['user']['name']}</b>, Welcome to Money Wizards<br>";
    echo "<a href='logout.php'>Logout</a>";
}