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

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>D-Learning - Online Learning Platform</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer"
    />
</head>

<body>
    <header>
        <nav>
            <ul class="navbar">
                <li><a href="#home">Home</a></li>
                <li><a href="#" onclick="toggleCourseMenu()">Courses</a>
                    <ul id="course-menu" class="dropdown-menu">


                        <li><a href="./course/web.html">HTML</a></li>
                        <li><a href="python.html">Python</a></li>
                        <li><a href="c.html">C</a></li>
                        <li><a href="java.html">JAVA</a></li>
                        <li><a href="c++.html">C++</a></li>
                        <li><a href="javascript.html">JavaScript</a></li>
                        <li><a href="css.html">CSS</a></li>


                    </ul>
                </li>
                <li><a href="#about">About</a></li>
                <li><a href="contact.html">Contact</a></li>
                <?php if (isset($user)): ?>

        <li>Hello <?=htmlspecialchars($user["name"])?></li>
        <li><a href="logout.php">Log out</a></li>
    <?php else: ?>
        <li><a href="login.php">Login</a></li>
        <li><a href="signup.html">Sign Up</a></li>
    <?php endif;?>

            </ul>
        </nav>
    </header>

    <main>
        <section id="home">
            <div class="container">
                <form action="">



                    <h1>Welcome to D-Learning
                    </h1>
                    <p class="code">Learn coding with us


                    </p>
           <?php
           include("context.php")
           ?>
        </section>
    </main>

    <!-- Course Section-->

    <section id="course-details" style="display: none;">
        <div class="container">
            <h2 id="course-title"></h2>
            <p id="course-description"></p>
        </div>

    </section>



    <!-- About Section-->

    <section id="about">
        <div class="container">
            <h2 class="about">About Us</h2>
            <p>Welcome to d-learning, the premier online learning platform for coding enthusiasts. Our mission is to provide high-quality courses on web development, programming, and more, empowering learners to acquire valuable skills and advance their
                careers. With d-learning, you can embark on a coding journey at your own pace. Our courses are designed to be comprehensive and beginner-friendly, catering to individuals with varying levels of coding experience. Our team of experienced
                instructors brings industry expertise to deliver engaging and informative video lectures, along with hands-on coding exercises and projects. You'll gain practical skills and real-world knowledge to apply in your coding endeavors. At d-learning,
                we believe in fostering an interactive learning community. Connect with fellow learners, ask questions, and receive support from both instructors and peers. Collaborate, share insights, and grow together as you progress through your coding
                journey. Join thousands of learners around the world who have unlocked their potential with d-learning. Start exploring our courses today and unlock endless possibilities in the world of coding.
            </p>
        </div>
    </section>

    <!-- Contact Section -->
    <!--Footer-->
    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-column">
                    <h4>About Us</h4>
                    <p>Learn coding with d-learning, the premier online learning platform. Start your coding journey today and unlock endless possibilities.</p>
                </div>
                <div class="footer-column">
                    <h4>Contact Us</h4>
                    <ul>
                        <li>Email: <a href="mailto:bhadelsushant3@gmail.com">bhadelsushant3@gmail.com</a></li>
                        <li>Phone: <a href="tel:+919860662528">9860662528</a></li>
                    </ul>
                </div>
                <div class="footer-column">
                    <h4>Follow Us</h4>
                    <ul class="social-media-links">
                        <li><a href="https://www.facebook.com/profile.php?id=100086044917127" target="_blank">Facebook</a></li>
                        <li><a href="https://github.com/devil123-hub" target="_blank">Github</a></li>
                        <li><a href="https://www.instagram.com/bdlsushant/" target="_blank">Instagram</a></li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2023 d-learning. All rights reserved.</p>
            </div>
        </div>
    </footer>












    <script src="script.js"></script>
</body>

</html>