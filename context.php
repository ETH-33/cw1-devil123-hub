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

<header>
        <h1>C Programming Course Tutorials</h1>
    </header>

    <nav>
        <ul>
            <li><a href="#introduction">Introduction</a></li>
            <li><a href="#basics">Basics</a></li>
            <li><a href="#loops">Loops</a></li>
            <li><a href="#functions">Functions</a></li>
            <li><a href="#arrays">Arrays</a></li>
        </ul>
    </nav>

    <main>
        <section id="introduction">
            <h2 id="intro">Introduction</h2>
            <p>Here you will learn the basics of C programming and get an introduction to the C language. In this C Tutorial, you’ll learn all the C programming basics to advanced concepts like Variables, Arrays, Pointers, Strings, Loops, etc. This C Programming
                Tutorial is designed for both beginners as well as experienced professionals, who’re looking to learn and enhance their knowledge of the C Programming language. C programming language is a general-purpose, procedural, high-level programming
                language used to develop computer software, computer applications, system programming, game development, web development, and more. C language was developed by Dennis M. Ritchie at the Bell Telephone Laboratories in 1972. C is a powerful
                and flexible language. It is a widely used programming language. C was developed for the programming of the UNIX operating System. C programming is known for its simplicity and efficiency. It is a better choice to start with programming,
                It gives you a foundational understanding of programming.
            </p>
            <h3>Variables and Data Types</h3>
            <p>In C, you declare variables to store data. Common data types include:</p>
            <ul>
                <li>int - for integers</li>
                <li>float - for floating-point numbers</li>
                <li>double - for double-precision floating-point numbers</li>
                <li>char - for characters</li>
                <li>bool - for booleans (requires the stdbool.h header)</li>
            </ul>
            <h3>Input and Output</h3>
            <p>C provides functions like scanf() and printf() for input and output operations:</p>
            <pre>
#include &lt;stdio.h&gt;

int main() {
    int num;
    printf("Enter a number: ");
    scanf("%d", &num);
    printf("You entered: %d\n", num);
    return 0;
}
            </pre>
        </section>

        <section id="basics">
            <h2>Basics</h2>
            <p>This section covers fundamental concepts such as operators, control statements, and basic I/O functions.</p>
            <h3>Operators</h3>
            <p>Operators in C include:</p>
            <ul>
                <li>Arithmetic operators: +, -, *, /, %</li>
                <li>Relational operators: &lt;, &gt;, &lt;=, &gt;=, ==, !=</li>
                <li>Logical operators: &&, ||, !</li>
                <li>Assignment operators: =, +=, -=, *=, /=, %=</li>
            </ul>
            <h3>Control Statements</h3>
            <p>C supports conditional statements and loops:</p>
            <pre>
#include &lt;stdio.h&gt;

int main() {
    int num;
    printf("Enter a number: ");
    scanf("%d", &num);

    if (num > 0) {
        printf("Positive number\n");
    } else if (num < 0) {
        printf("Negative number\n");
    } else {
        printf("Zero\n");
    }

    int i;
    for (i = 1; i <= 5; i++) {
        printf("%d\n", i);
    }

    return 0;
}
            </pre>
            <h3>Basic Input/Output (I/O) Functions</h3>
            <p>C provides functions like gets(), puts(), and getchar() for basic I/O operations:</p>
            <pre>
#include &lt;stdio.h&gt;

int main() {
    char name[20];
    printf("Enter your name: ");
    gets(name);
    printf("Hello, ");
    puts(name);
    printf("\n");

    char ch;
    printf("Enter a character: ");
    ch = getchar();
    printf("You entered: ");
    putchar(ch);
    printf("\n");

    return 0;
}
            </pre>
        </section>

        <section id="loops">
            <h2>Loops</h2>
            <p>This section covers different types of loops in C: while, do-while, and for loops.</p>
            <h3>While Loop</h3>
            <pre>
#include &lt;stdio.h&gt;

int main() {
    int i = 1;
    while (i <= 5) {
        printf("%d\n", i);
        i++;
    }

    return 0;
}
            </pre>
            <h3>Do-While Loop</h3>
            <pre>
#include &lt;stdio.h&gt;

int main() {
    int i = 1;
    do {
        printf("%d\n", i);
        i++;
    } while (i <= 5);

    return 0;
}
            </pre>
            <h3>For Loop</h3>
            <pre>
#include &lt;stdio.h&gt;

int main() {
    int i;
    for (i = 1; i <= 5; i++) {
        printf("%d\n", i);
    }

    return 0;
}
            </pre>
        </section>

        <section id="functions">
            <h2>Functions</h2>
            <p>Functions in C are blocks of code that perform specific tasks.</p>
            <pre>
#include &lt;stdio.h&gt;

// Function declaration
int addNumbers(int a, int b);

int main() {
    int num1 = 5, num2 = 10;
    int sum = addNumbers(num1, num2);
    printf("Sum: %d\n", sum);
    return 0;
}

// Function definition
int addNumbers(int a, int b) {
    return a + b;
}
            </pre>
        </section>

        <section id="arrays">
            <h2>Arrays</h2>
            <p>Arrays allow you to store multiple values of the same data type.</p>
            <pre>
#include &lt;stdio.h&gt;

int main() {
    int numbers[5] = {1, 2, 3, 4, 5};
    int i;

    printf("Array elements: ");
    for (i = 0; i < 5; i++) {
        printf("%d ", numbers[i]);
    }
    printf("\n");

    return 0;
}
            </pre>
        </section>
    </main>





