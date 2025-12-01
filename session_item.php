<?php
session_start();
if(isset($_SESSION['name'])){
    echo "Name: ".$_SESSION['name']."<br>";
}
if(isset($_SESSION['age'])){
    echo "Age: ".$_SESSION['age']."<br>";
}
?>