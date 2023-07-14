<?php
session_start();

if (isset($_SESSION["user_id"])) {
    $mysqli = require __DIR__ . "/database.php";

    
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

   
    $insertQuery = "INSERT INTO user (name, email, password) VALUES ('$username', '$email', '$password')";
    $result = $mysqli->query($insertQuery);

    if ($result) {
        
        header("Location: admin.php");
        exit();
    } else {
    
        echo "Error creating user.";
    }
} else {
    
    header("Location: index.php");
    exit();
}
?>
