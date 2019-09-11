<?php
define("projectRoot", "/users/36523/");

// Start the session
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// Check if the user is logged in
if(!isset($_SESSION["JDSite956_loggedin"]) || $_SESSION["JDSite956_loggedin"] !== true){
    $location = $_SERVER['REQUEST_URI'];
    header("location:".projectRoot."login/index.php?location=$location");
    exit;
} elseif(isset($requiredRole) && $_SESSION["role"] !== $requiredRole) {
    header("location:".projectRoot."login/accessdenied.php");
}
?>