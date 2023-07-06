<?php
include("database.php");
$connection = mysqli_connect("localhost", "root", "", "dlearing");

if (!$connection) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
}

$query = mysqli_query($connection, 'select * from content');

while ($row = mysqli_fetch_array($query))
{
    $title = $row['title'];
    $content = $row['content'];
    $image = $row['image'];

    echo "<h2>$title</h2>";
    echo "<h2>$content</h2>";
    echo "<img src='assest/images/$image>$image</img>";

}

mysqli_close($connection);
?>


<div class="images-container">
                        <img src="assest/images/2.png" alt="Coding Image 1">
                        <p class="journey">Start your coding journey today and unlock endless possibilities. By joining this course, students will gain the skills and knowledge to create stunning and interactive websites from scratch. They will unleash their creativity,
                            learn to write clean and efficient code, and develop the ability to bring their ideas to life in the digital realm. The benefits of learning web development extend far beyond the classroom. In today's digital age, proficiency
                            in web programming opens up a world of exciting opportunities. From pursuing a career as a professional web developer to creating personal portfolios and launching entrepreneurial ventures, the possibilities are endless. Web
                            development skills are in high demand, making it a valuable asset for future prospects. What sets this course apart is its unique and effective structure. I have carefully designed a step-by-step learning journey that fosters
                            both understanding and practical application. Through engaging projects, hands-on exercises, and real-world examples, students will build a solid foundation in web development. Each lesson is crafted to be interactive, encouraging
                            active participation and problem-solving. By taking a project-based approach, students will gain valuable experience working on real-life web development scenarios, empowering them to tackle challenges with confidence. Furthermore,
                            my teaching method focuses on individual growth and development. I believe in fostering a supportive and nurturing environment where students can thrive. I provide personalized attention, ensuring that each student's unique
                            needs and learning styles are addressed. By combining theoretical knowledge with practical exercises and continuous feedback, I guide students towards mastery of web development concepts.



                        </p>


                        <img src="assest/images/1.jpg" alt="Coding Image 2">
                    </div>

                    <h2 class="features">Why Choose d-learning?</h2>
                    <ul class="features-list">
                        <li>Wide range of courses on web development, programming, and more.</li>
                        <li>High-quality video lectures and course materials.</li>
                        <li>Experienced instructors with industry expertise.</li>
                        <li>Hands-on coding exercises and projects.</li>
                        <li>Interactive learning community and support.</li>
                        <li>Flexible learning at your own pace.</li>
                    </ul>
                    <p>Join thousands of learners around the world and start your coding journey with D-Learning today!</p>
            </div>