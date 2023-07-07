<?php
session_start();

if (isset($_SESSION["user_id"])) {

    $mysqli = require __DIR__ . "/database.php";

    $sql = "SELECT * FROM user
            WHERE id = {$_SESSION["user_id"]}";

    $result = $mysqli->query($sql);

    $user = $result->fetch_assoc();
}

?>

<html>
    <head>
        <title></title>
    </head>

<body>
<?php if (isset($user) && $user['role'] == 'admin'): ?>
//admin dasboard 
    <?php else: ?>
<?php
    header("Location: index.php");
    ?>
<?php endif;?>
</body>
</html>