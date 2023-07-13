<?php
session_start();

if (isset($_SESSION["user_id"])) {

    $mysqli = require __DIR__ . "/database.php";

    $sql = "SELECT * FROM user
            WHERE id = {$_SESSION["user_id"]}";

    $all = "SELECT * FROM user";

    $result = $mysqli->query($sql);

    $users = $result->fetch_assoc();

    $all_users_result = $mysqli->query($all);

    $all_users = [];
    while ($row = $all_users_result->fetch_assoc()) {
        $all_users[] = $row;
    }

}

?>

<html>
    <head>
        <title>Admin Panel</title>
        <link rel="stylesheet" href="admin.css">
    </head>

<body>
<?php if (isset($users) && $users['role'] === 'admin'): ?>
  <header>
  <div class="container">
            <h1>Admin Dashboard</h1>
            <nav>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="content.php">Course Update</a></li>
                    <li><a href="logout.php">Logout</a></li>
                </ul>
            </nav>
        </div>
    </header>
    
    <main>
        <h1>Admin Dashboard</h1>

        <h2>Users</h2>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($all_users as $user): ?>
                    <tr>
                        <td><?php echo $user["id"]; ?></td>
                        <td><?php echo $user["name"]; ?></td>
                        <td><?php echo $user["email"]; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </main>
    <footer>
        <!-- Add your footer content here -->
    </footer>
    <?php else: ?>
<?php
    header("Location: index.php");
    ?>
<?php endif;?>
</body>
</html>
