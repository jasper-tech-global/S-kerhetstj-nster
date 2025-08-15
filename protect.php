<?php
session_start();
if (!isset($_SESSION['access_granted']) || $_SESSION['access_granted'] !== true) {
    header('Location: code.php');
    exit;
} 