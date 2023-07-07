<?php
$is_invalid = false;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    
    $mysqli = require __DIR__ . "/database.php";
    
    $sql = sprintf("SELECT * FROM user
                    WHERE email = '%s'",
                   $mysqli->real_escape_string($_POST["email"]));
    
    $result = $mysqli->query($sql);
    
    $user = $result->fetch_assoc();
    
    if ($user) {
        
        if (password_verify($_POST["password"], $user["password_hash"])) {
            
            session_start();
            
            session_regenerate_id(); //Prevents session fixation attack
            
            $_SESSION["user_id"] = $user["id"];
            if ($user['role'] ==="admin"){
              header("Location: admin.php");
            }else{
            header("Location: index.php");
            };
            exit;
        }
    }
    
    $is_invalid = true;
}


?>
<html>

<head>
  <link rel="stylesheet" href="css/style.css">
  <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="login.css">
  <title>Sign in</title>
</head>

<body>
<?php if ($is_invalid): ?>
        <em>Invalid login</em>
    <?php endif; ?>
  <div class="main">
    <p class="sign" align="center">Login in</p>
    <form class="form1" method="POST">
      <input class="un " type="text" align="center" placeholder="email" name="email" value="<?= htmlspecialchars($_POST["email"] ?? "") ?>">
      <input class="pass" type="password" name="password" align="center" placeholder="Password">
      <button type="submit" class="submit" align="center">Sign in</button>
      <p class="forgot" align="center"><a href="#">Forgot Password?</p>  
    </div>
     
</body>

</html>