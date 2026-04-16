<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Harshitha K N | Web Developer</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <!-- HEADER -->
    <header>
        <div class="container">
            <div class="logo">Harshitha <span>K N</span></div>
            <nav>
                <ul>
                    <li><a href="#hero">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#skills">Skills</a></li>
                    <li><a href="#projects">Projects</a></li>
                    <li><a href="#experience">Experience</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- HERO -->
    <section id="hero" class="hero">
    <div class="container">
        <div class="row align-items-center">

            <!-- LEFT SIDE TEXT -->
            <div class="col-md-6 hero-text">
                <h1>
                    Hi, I'm <span class="highlight">Harshitha</span>
                </h1>

                <p class="hero-sub">
                    <i class="fa-solid fa-code"></i>
                    Junior Web Developer
                </p>

                <p class="hero-exp">
                    1.5 Years of Experience building responsive and dynamic websites
                </p>

                <div class="hero-buttons">
                    <a href="#projects" class="btn btn-primary">View Work</a>
                    <a href="#contact" class="btn btn-outline-light">Contact Me</a>
                </div>
            </div>

            <!-- RIGHT SIDE IMAGE -->
            <div class="col-md-6 text-center">
                <div class="img-wrapper">
                    <img src="img/profile.jpeg" alt="Harshitha" class="profile-img">
                </div>
            </div>

        </div>
    </div>
</section>

    <!-- ABOUT -->
    <section id="about" class="section dark">
        <h2><i class="fa-solid fa-user"></i> About Me</h2>
        <p>
            Motivated Junior Web Developer with 1.5 years of experience in building responsive and dynamic websites
            using HTML, CSS, PHP, and MySQL. Skilled in creating clean UI designs and developing backend functionality
            for dynamic content management. Passionate about improving user experience and learning modern technologies.
        </p>
    </section>

    <!-- SKILLS -->
    <section id="skills" class="section dark">
        <h2><i class="fa-solid fa-laptop-code"></i> Technical Skills</h2>
        <ul class="skills-list">
            <li><i class="fa-brands fa-html5"></i> HTML5</li>
            <li><i class="fa-brands fa-css3-alt"></i> CSS</li>
            <li><i class="fa-brands fa-js"></i> JavaScript (Basic)</li>
            <li><i class="fa-brands fa-php"></i> PHP</li>
            <li><i class="fa-solid fa-database"></i> MySQL</li>
            <li><i class="fa-brands fa-bootstrap"></i> Bootstrap</li>
        </ul>
    </section>

    <!-- PROJECTS -->
    <section id="projects" class="section dark">
        <h2><i class="fa-solid fa-diagram-project"></i> Projects</h2>
        <div class="grid">

            <div class="card">
                <!-- <img src="project3.jpg" alt="Apartment Management System" class="project-img"> -->
                <h3>Apartment Management System</h3>
                <p>
                    Developed a system to manage apartment complexes efficiently, handling tenants, maintenance requests, and billing.
                    Streamlined communication between residents and management for smoother operations.<br>
                    <strong>Tech:</strong> NetBeans, MySQL, Java.
                </p>
            </div>

            <div class="card">
                <!-- <img src="project4.jpg" alt="Human Action Recognition" class="project-img"> -->
                <h3>Human Action Recognition</h3>
                <p>
                    Built a system to recognize human activities in YouTube videos using CNNs and LSTMs in TensorFlow.
                    Implemented machine learning pipelines for accurate activity detection.<br>
                    <strong>Tech:</strong> Python, NumPy, Matplotlib, TensorFlow.
                </p>
            </div>

            <div class="card">
                <!-- <img src="project5.jpg" alt="Shopping Cart App" class="project-img"> -->
                <h3>Shopping Cart App</h3>
                <p>
                    Developed an Android app to display product categories and details, with cart functionality for adding items and tracking total count and amount.
                    Enhanced user experience with intuitive UI and smooth navigation.<br>
                    <strong>Tech:</strong> Java, XML, Android Studio.
                </p>
            </div>

            <div class="card">
                <!-- <img src="project6.jpg" alt="Sign Language Animation System" class="project-img"> -->
                <h3>Sign Language Animation Generating System</h3>
                <p>
                    Developed a system to generate sign language animations using natural language processing.
                    Bridges communication between sign language users and non-fluent individuals.<br>
                    <strong>Tech:</strong> Python, NLP.
                </p>
            </div>


        </div>
    </section>

    <!-- EXPERIENCE -->
    <section id="experience" class="section dark experience">
        <h2><i class="fa-solid fa-briefcase"></i> Experience</h2>
        <p>
            <strong>Junior Web Developer</strong><br>
            • Developed and maintained responsive websites.<br>
            • Built dynamic features using PHP & MySQL.<br>
            • Integrated contact forms and email functionality using PHPMailer, Breevo<br>
        </p>
    </section>

    <!-- CONTACT -->
    <section id="contact" class="section dark">
        <h2><i class="fa-solid fa-envelope"></i> Contact Me</h2>
        <form action="send.php" method="post">
            <input type="text" name="name" placeholder="Your Name" required>
            <input type="email" name="email" placeholder="Your Email" required>
            <input type="text" name="number" placeholder="Your Mobile Number" required>
            <input type="text" name="subject" placeholder="Subject" required>
            <textarea name="comments" placeholder="Your Message" required></textarea>
            <button type="submit">Send Message</button>
        </form>
    </section>

</body>

</html>