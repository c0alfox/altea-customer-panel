<?php
session_start();

function is_logged_in() {
    return !empty($_SESSION['user']);
}

if (!is_logged_in()) {
    header("Location: login.php");
    die();
}

require_once "pdo.php";