<?php
$connection = mysqli_connect("localhost", "root", "", "dlearing");

if (!$connection) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
}

$title = "HTML";

$query = mysqli_prepare($connection, 'SELECT * FROM content WHERE title = ?');
mysqli_stmt_bind_param($query, "s", $title);
mysqli_stmt_execute($query);

$result = mysqli_stmt_get_result($query);

if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_array($result);
    $title = $row['title'];
    $content = $row['content'];
    $image = $row['image'];

    echo $title;
    echo $content;
    echo $image;
} 

mysqli_close($connection);
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTML Course</title>
    <link rel="stylesheet" href="styles.css">

</head>

<body>
    <!-- The header section -->
    <header>
        <?
        include("context.php")
        ?>
        <h1>HTML Course</h1>
    </header>

      
    <!-- The main content section -->
    <main>
        <h2>HTML</h2>
        <br>
        <br>
        <section>
            <h3>Introduction to HTML</h3>
            <p>Here you will learn the basics of C programming and get an introduction to the C language. In this C Tutorial, you’ll learn all the C programming basics to advanced concepts like Variables, Arrays, Pointers, Strings, Loops, etc. This C Programming
                Tutorial is designed for both beginners as well as experienced professionals, who’re looking to learn and enhance their knowledge of the C Programming language. C programming language is a general-purpose, procedural, high-level programming
                language used to develop computer software, computer applications, system programming, game development, web development, and more. C language was developed by Dennis M. Ritchie at the Bell Telephone Laboratories in 1972. C is a powerful
                and flexible language. It is a widely used programming language. C was developed for the programming of the UNIX operating System. C programming is known for its simplicity and efficiency. It is a better choice to start with programming,
                It gives you a foundational understanding of programming.

            </p>

            <img src="in.jpg" alt="Introduction">

            <p>HTML is a markup language used by the browser to manipulate text, images, and other content, in order to display it in the required format. HTML was created by Tim Berners-Lee in 1991. The first-ever version of HTML was HTML 1.0, but the first
                standard version was HTML 2.0, published in 1995. 
            


            </p>
            <p style="text-align:justify"><strong>&lt;!DOCTYPE html&gt;</strong><strong>:</strong> This is the document type declaration (not technically a tag). It declares a document as being an HTML document. The doctype declaration is not case-sensitive.</p>
            <p style="text-align:justify"><strong>&lt;html&gt;</strong></a><strong>:</strong> This is called the HTML root element. All other elements are contained within it.</p>
            <p style="text-align:justify"><strong>&lt;head&gt;</strong></a><strong>:</strong> The head tag contains the “behind the scenes” elements for a webpage. Elements within the head aren’t visible on the front-end of a webpage. HTML elements used inside the &lt;head&gt; element
                include:&nbsp;
            </p>
            <ul>
                <li>&lt;style&gt;:This html tag allows us to insert styling into our webpages and make them appealing to look at with the help of CSS.</li>
                <li>&lt;title&gt;:The title is what is displayed on the top of your browser when you visit a website and contains the title of the webpage that you are viewing.</li>
                <li>&lt;base&gt;:It specifies the base URL for all relative URL’s in a document.</li>
                <li>&lt;noscript&gt;: Defines a section of HTML that is inserted when the scripting has been turned off in the users browser.</li>
                <li>&lt;script&gt;:This tag is used to add functionality in the website with the help of JavaScript.</li>
                <li>&lt;meta&gt;:This tag encloses the meta data of the website that must be loaded every time the website is visited. For eg:- the metadata charset allows you to use the standard UTF-8 encoding in your website. This in turn allows the users
                    to view your webpage in the language of their choice. It is a self closing tag.</li>
                <li>&lt;link&gt;:The ‘link’ tag is used to tie together HTML, CSS, and JavaScript. It is self closing.</li>
            </ul>



        </section>

        <section>
            <h1>HTML Basic Tags</h1>
            <p>HTML tags are used to define the structure of the page. HTML tags are always opened with a &lt; tag and closed with a &gt; tag. Some tags (called void tags) do not require a closing tag. The &lt;br&gt; tag is an example of a void tag.
                <br>

                <br> HTML tags can be nested (contain other tags inside of them).
                This means you could have an ordered list within another unordered list or vice versa.<br/>

                <br>
                <br>

                <h2>Heading Tags</h2>
                <p>Any document starts with a heading. You can use different sizes for your headings. HTML also has six levels of headings, which use the elements <b>&lt;h1&gt;, &lt;h2&gt;, &lt;h3&gt;, &lt;h4&gt;, &lt;h5&gt;,</b> and <b>&lt;h6&gt;</b>. While
                    displaying any heading, browser adds one line before and one line after that heading.
                    <hr />
                    Example:<br/><br/>
                    <!-- Heading -->
                    <h1>Welcome to my website!</h1>
                    <h2>About me:</h2>
                    I am learning web development with the help from Codecademy!<br /><br />
                    Another example for h4 tag:<br /><br />
                    <!-- Hierarchy level four-->
                    <h4>My favorite foods are:</h4>
                    Pizza, Sushi, Salad
                    <br>
                    <br>
                </p>

                <img src="h1.png" alt="heading">
                <br>
                <br>


                <img src="he.png" alt="code" height="">
                <br>
                <b>Example: <br>
                    HTML provides a set of basic elements that form the building blocks of a web page. These include headings, paragraphs, lists, tables, and forms. Understanding these basic elements is essential for creating well-structured web content.
                    HTML code of an unordered list.<br></b>
                    Here's how you can create an ordered or unordered (bullet) list in HTML using either ol
                    and ul tags respectively.


              
                </b>
                <div class="container">
                    <div class="code1">
                        <pre><code>
              
              &lt;h1&gt;This is a heading&lt;/h1&gt;
              &lt;p&gt;This is a paragraph.&lt;/p&gt;`
              
              &lt;ul&gt;
                &lt;li&gt;Item 1&lt;/li&gt;
                &lt;li&gt;Item 2&lt;/li&gt;
                &lt;li&gt;Item 3&lt;/li&gt;
              &lt;/ul&gt;
              
              &lt;table&gt;
                &lt;tr&gt;
                  &lt;th&gt;Name&lt;/th&gt;
                  &lt;th&gt;Age&lt;/th&gt;
                &lt;/tr&gt;
                &lt;tr&gt;
                  &lt;td&gt;John&lt;/td&gt;
                  &lt;td&gt;25&lt;/td&gt;
                &lt;/tr&gt;
                &lt;tr&gt;
                  &lt;td&gt;Jane&lt;/td&gt;
                  &lt;td&gt;30&lt;/td&gt;
                &lt;/tr&gt;
              &lt;/table&gt;

              
              
            </code></pre>

                    </div>
                </div>

                <img src="tags.jpg" alt="">
                <img src="tables.png" alt="tables" height="850px" width="700px">
        </section>


        <section>
            <h3> HTML Basics</h3>
            <p>HTML provides a set of basic elements that form the building blocks of a web page. These include headings, paragraphs, lists, tables, and forms. Understanding these basic elements is essential for creating well-structured web content.
                <ul style="font-size: 26px;">
                <li><strong>&lthtml&gt;</strong>: This tag is used to define
                the root of an html document.</li>
                <br/>
                <li><strong>&ltshead&gt;&lt/thead&gt;</strong>: These
                tags are used in conjunction with a table element and contain
                information about its columns such as column headings, etc.. The s stands
                for "start".<br/><em>(Note that these two elements can be combined into one
                    using "&lt;thead&gt;" alone.)</em>.</li>
                    <br />
                    <li><strong>&lttbody&gt;&lt/tbody&gt;</strong>: Contains
                    rows or data within a table.<br /><em>(This also has another option called
                        "&lt;tfoot&gt;", which contains summary row(s) at the bottom of the
                        table)</em></li>
                        <br />
                        <li><strong>&lttr&gt;&lt/tr&gt;</strong>: Defines
                        each individual row (or record). It should always come after either
                        thead or tbody but before any td or th child nodes inside it.</li>
                        <br />
                        <li><strong>&lttd&gt;&lt/td&gt;</strong>: Used
                        specifically within tr tags. Represents cell content within a single
                        row.</li>
                        <br />
                        <li><strong>&ltimg src="" alt="" /&gt;</strong>: Inserts
                        images on web pages by specifying their source URL ("src") attribute alongside other attributes like width
                        images on web pages by specifying their source file path ("src") and textual description ("alt
                        images on web pages by specifying their source file path ("src") alongside other attributes like alternative
                        images to web pages by specifying their source URL ("src") attribute alongside optional alternate text ("
                        an image to display on web pages.</li>
                        <br/>
                        <li><strong>&lthtml lang=&quot;en-US&quot;&gt
                            &ltmeta charset="UTF-8"/&gt
                            &lttitle&gt;Page Title&lt;/title&gt;
                            &ltstyle&gt;
                            &lt;/style&gt;
                            &ltbody&gt;
                            &lt;/body&gt;
                            &lt;/html&gt;
                            </strong>:<ul style='list-style:none;'>
                            <li><em>&ltsmoothly transitions between different
                                states of the page.&lt;/smooothly></em></li>
                                <li><em>&lteach element has its own purpose and function, making code easier
                                    to read and understand.&lt;/each></em></li>
                                    <li><em>&tthe meta tag specifies character encoding used in document,&lt;/meta
                                        <li><em>&tthe meta tag specifies character encoding used in document,&lt;/meta
                                            <li><em>&tthe meta tag specifies character encoding used in document's text,&lt
                                                <li><em>&tthe meta tag specifies character encoding used in document. This is important
                                                    <li><em>&tthe meta tag specifies character encoding used in document. This is important
                                                        <li><em>&tthe structure is easy to navigate through using a keyboard or screen reader
                                                            <li><em>&tthe use of semantic tags makes it easy to navigate through a website
                                                                <li><em>&tthe use of semantic tags makes it easy for search engines to index
                                                                    <li><em>&tthe structure is easy to navigate through using a browser's built in
                                                                        <li><em>&tthe use of semantic tags makes it easy for search engines to index
                                                                            <li><em>&tthe use of semantic tags makes it easy for search engines to index

            </p>



        </section>

        <section>
            <h3> HTML Forms</h3>
            <p>HTML forms allow users to input and submit data on a web page. Form elements include text fields, checkboxes, radio buttons, dropdown menus, and buttons. They are essential for interactive web applications and data collection.
                <hr />
                <ul style="list-style: none;">
                <li><a href="#html5FormValidation"><strong>HTML 5 form validation:</
                strong></a>&nbsp;&nbsp;<span>- How it works, how you can use
                    it.</span></li>
                    <li><a href="#exampleForm"><strong>An example of a basic
                        contact us form with HTML and CSS styling:</strong></a>&nbsp;&nbsp;<span
                        >- A simple way to create an attractive user interface
                        using only standard web technologies like HTML/CSS. This is just one possible solution that may not
                        using only standard web technologies like HTML/CSS.
                        This is just one possible implementation that could be used as the basis
                        or inspiration when designing forms in real projects.<br /></span></li>
                        <li><a href="#"><strong>More coming soon...</strong></a></li>
                        </ul>
                        <!-- html5FormValidation -->
                        <article id="html5FormValidation"></article>
                        <header>
                            <h2>How To Use HTML 5 Form Validation?</h2>



            </p>

            <h4>Example Form</h4>
            <div class="container">
                <div class="code1">
                    <pre>
              <code>
                &lt;form&gt;
                  &lt;label for="name"&gt;Name:&lt;/label&gt;
                  &lt;input type="text" id="name" name="name" placeholder="Enter your name" required&gt;
                  
                  &lt;label for="email"&gt;Email:&lt;/label&gt;
                  &lt;input type="email" id="email" name="email" placeholder="Enter your email" required&gt;
                  
                  &lt;label for="message"&gt;Message:&lt;/label&gt;
                  &lt;textarea id="message" name="message" placeholder="Enter your message" required&gt;&lt;/textarea&gt;
                  
                  &lt;input type="submit" value="Submit"&gt;
                &lt;/form&gt;

              </code> 
              </<div>
                
              </div>
              
        
            </pre>
        </section>

    </main>

    <section id="contact">
        <div class="container">
            <h2>Contact Us</h2>
            <div class="contact-info">
                <div class="contact-item">
                    <i class="fas fa-envelope"></i>
                    <p><a href="mailto:bhadelsushant3@gmail.com">bhadelsushant3@gmail.com</a></p>
                </div>
                <div class="contact-item">
                    <i class="fas fa-phone"></i>
                    <p><a href="tel:+9779860662528">9860662528</a></p>
                </div>
                <div class="contact-item">
                    <i class="fab fa-facebook"></i>
                    <p><a href="https://www.facebook.com/profile.php?id=100086044917127">Facebook</a></p>
                </div>
                <div class="contact-item">
                    <i class="fab fa-github"></i>
                    <p><a href="https://github.com/devil123-hub">Github</a></p>
                </div>
                <div class="contact-item">
                    <i class="fab fa-instagram"></i>
                    <p><a href="https://www.instagram.com/bdlsushant/">Instagram</a></p>
                </div>
            </div>
        </div>
    </section>



    <!-- The footer section -->
    <footer>
        &copy; 2023 HTML Course. All rights reserved.
        
    </footer>
</body>

</html>