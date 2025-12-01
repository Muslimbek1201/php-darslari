<?php
session_start();
if($_SERVER['REQUEST_METHOD'] == "POST"){
    $login = $_POST['login'];
    $parol = $_POST['parol'];
if($login == 'admin' && $parol == '12345'){
    $_SESSION['login'] == $login;
    header("Location: dashboard.php");
} else {
    echo "Login yoki parol xato";
}
}

?>