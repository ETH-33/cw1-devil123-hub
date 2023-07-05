<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Include the database configuration file
    $mysqli = require __DIR__ . "/database.php";

    // Prepare the SQL statement
    $sql = "INSERT INTO contact (name, email, message) VALUES (?, ?, ?)";
    $stmt = $mysqli->prepare($sql);

    // Bind the parameters and execute the statement
    $stmt->bind_param("sss", $name, $email, $message);

    if (!empty($message)) {
        $stmt->execute();

        // Check if the insertion was successful
        if ($stmt->affected_rows > 0) {
            echo '<script>alert("Thank you for contacting us! We will get back to you soon.");</script>';
            $stmt->close();
            $mysqli->close();
            header('Location: index.php');
            exit;
        } else {
            echo "Error: " . $mysqli->error;
        }
    } else {
        echo '<script>alert("Please enter a message.");</script>';
    }

    // Close the statement and the database connection
    $stmt->close();
    $mysqli->close();
}
?>
