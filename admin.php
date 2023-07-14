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
    <title>Admin Panel</title>
    <link rel="stylesheet" href="admin.css">
</head>

<body>
<?php if (isset($user) && $user['role'] === 'admin'): ?>
    <header>
        <div class="container">
            <h1>Admin Dashboard</h1>
            <nav>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">User</a></li>
                    <li><a href="content.php">Course update</a></li>
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
                <th>Actions</th> <!-- New column for actions -->
            </tr>
            </thead>
            <tbody>
            <?php
            $allUsersQuery = "SELECT * FROM user";
            $allUsersResult = $mysqli->query($allUsersQuery);
            while ($row = $allUsersResult->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['name'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";
                echo "<td>";
                echo "<a href='delete_user.php?id=" . $row['id'] . "'>Delete</a>"; // Delete button
                echo "</td>";
                echo "</tr>";
            }
            ?>
            </tbody>
        </table>

        <h2>Create New User</h2>
        <form action="create_user.php" method="POST">
            <input type="text" name="username" placeholder="Username" required>
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <input type="submit" value="Create User">
        </form>
    </main>

    <footer>
        <!-- Add your footer content here -->
    </footer>
<?php else: ?>
    <?php header("Location: index.php"); ?>
<?php endif; ?>
</body>
</html>
