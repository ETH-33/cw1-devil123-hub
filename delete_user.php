<?php
session_start();

if (isset($_SESSION["user_id"])) {
    $mysqli = require __DIR__ . "/database.php";


    $userId = $_GET['id'];

    $deleteQuery = "DELETE FROM user WHERE id = $userId";
    $result = $mysqli->query($deleteQuery);

    if ($result) {
        
        header("Location: admin.php");
        exit();
    } else {
    
        echo "Error deleting user.";
    }
} else {

    header("Location: index.php");
    exit();
}
?>
