<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portfolio</title>
    <link rel="stylesheet" href="CSS/portfolio.css">
    <script src="https://kit.fontawesome.com/10cc918d11.js" crossorigin="anonymous"></script>
</head>
<body>
    <div id="header">
        <div class="container">
            <nav>
                <img class="logo" src="IMAGES/2copy.png" alt="">
                <ul>
                    <li><a href="#header">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#portfolio">Portfolio</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </nav>
            <div class="header-text">
                <p>Full-stack Developer</p>
                <h1>Hi, I'm <span>Bryan</span><br>Ponte From Philippines</h1>
            </div>
        </div>
    </div>
    <!-- --------------about-------------- -->
    <div id="about">
        <div class="container">
            <div class="row">
                <div class="about-col-1">
                    <img src="IMAGES/portrait8.jpg" >
                </div>
                <div class="about-col-2">
                    <h1 class="sub-titles">About Me</h1>
                    <p>Hi, I'm Bryan Ponte, a computer science student from the Philippines with a passion for web development and database management. I enjoy learning and working on projects that involve PHP, HTML, CSS, and JavaScript, and I have experience building systems like portfolio websites and university apps. I’m dedicated to improving my skills in coding and understanding complex concepts like blockchain, decentralized networks, and information management. I also value teamwork, as shown in my contributions to group research projects on topics like intellectual property and professional ethics.</p>
                    <div class="tab-titles">
                        <p class="tab-links active-link" onclick="opentab('skills')">Skills</p>
                        <p class="tab-links" onclick="opentab('experience')">Experience</p>
                        <p class="tab-links" onclick="opentab('education')">Education</p>
                    </div>
                    <div class="tab-contents active-tab" id="skills">
                        <li><span>UX/UI</span><br>Designing Web/App interfaces</li>
                        <li><span>Website Development</span><br>Website App Development</li>
                        <li><span>App Development</span><br>Building Android/iOS apps</li>
                    </div>
                    <div class="tab-contents" id="experience">
                        <li><span>2019 - Current</span><br>Junior Web Developer Intern</li>
                        <li><span>2016 - 2018</span><br>Front-end Developer</li>
                        <li><span>2010 - 2015</span><br>Jr. Developer</li>
                        
                    </div>
                    <div class="tab-contents" id="education">
                        <li><span>2025</span><br>MIT UP Diliman</li>
                        <li><span>2019</span><br>BSCS Western Mindanao State University</li>
                        <li><span>2014</span><br>Xavier HighSchool</li>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ----------services---------- -->
    <div id="services">
        <div class="container">
            <h1 class="sub-title">My Services</h1>
            <div class="services-list">
                <div>
                    <i class="fa-solid fa-code"></i>
                    <h2>Web Design</h2>
                    <p>Developing responsive and engaging websites that deliver a seamless user experience.</p>
                    <a href="#">Learn more</a>
                </div>
                <div>
                    <i class="fa-solid fa-crop-simple"></i>
                    <h2>UX/UI Design</h2>
                    <p>Designing intuitive interfaces and crafting experiences that enhance user satisfaction and interaction.</p>
                    <a href="#">Learn more</a>
                </div>
                <div>
                    <i class="fa-brands fa-app-store"></i>
                    <h2>App Design</h2>
                    <p>Creating visually appealing and user-friendly mobile or desktop applications tailored to client needs.</p>
                    <a href="#">Learn more</a>
                </div>
            </div>
        </div>
    </div>

    <!-- ----------portfolio-------- -->

    <div id="portfolio">
        <div class="container">
            <h1 class="sub-title">My Work</h1>
            <div class="work-list">
                <div class="work">
                    <img src="IMAGES/work2.png" >
                    <div class="layer">
                        <h3>Recipe Database Website</h3>
                        <p>A user-friendly website where users can explore, save, and share recipes. It allows users to search for recipes by ingredients or categories and features a database for storing and organizing a wide variety of culinary ideas.</p>
                        <a href="#"><i class="fa-solid fa-arrow-up-right-from-square"></i></a>
                    </div>
                </div>
                <div class="work">
                    <img src="IMAGES/work1.png" >
                    <div class="layer">
                        <h3>Business Management System</h3>
                        <p>A web application that provides a secure login for administrators, staff, and customers to access a dashboard. The system allows administrators to manage sales, products, orders, and customer data efficiently, streamlining business operations.</p>
                        <a href="#"><i class="fa-solid fa-arrow-up-right-from-square"></i></a>
                    </div>
                </div>
                <div class="work">
                    <img src="IMAGES/work3.png" >
                    <div class="layer">
                        <h3>Library Database Website</h3>
                        <p>An online platform designed to manage and provide access to a library's collection of books, journals, and other resources. Users can search, borrow, and return items, while administrators can manage inventory and member accounts.</p>
                        <a href="#"><i class="fa-solid fa-arrow-up-right-from-square"></i></a>
                    </div>
                </div>
            </div>
            <a href="#" class="btn">See more</a>
        </div>
    </div>

    <!-- -----------contact------------- -->
    
    <div id="contact">
        <div class="container">
            <div class="row">
                <div class="contact-center">
                    <h1 class="sub-title">Contact Me</h1>
                    <p><i class="fa-solid fa-paper-plane" style="color: #ffb200;"></i>bryanregor.ponte@gmail.com</p>
                    <p><i class="fa-solid fa-phone" style="color: #ffb200;"></i>0948-887-8659</p>
                    <div class="social-icons">
                        <a href="https://facebook.com/"><i class="fa-brands fa-facebook"></i></a>
                        <a href="https://twitter.com/"><i class="fa-brands fa-twitter-square"></i></a>
                        <a href="https://instagram.com/"><i class="fa-brands fa-instagram"></i></a>
                        <a href="https://linkedin.com/"><i class="fa-brands fa-linkedin"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script>

        var tablinks = document.getElementsByClassName("tab-links");
        var tabcontents = document.getElementsByClassName("tab-contents");
        
        function opentab(tabname){
            for(tablink of tablinks) {
                tablink.classList.remove("active-link");
            }
            for(tabcontent of tabcontents) {
                tabcontent.classList.remove("active-tab");
            }
            event.currentTarget.classList.add("active-link");
            document.getElementById(tabname).classList.add("active-tab");
        }
    </script>

    
</body>
</html>