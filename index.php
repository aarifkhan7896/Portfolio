<?php include 'partials/dbcon.php'; ?>

<?php
if($_SERVER['REQUEST_METHOD']=="POST"){
  $email = $_POST['email'];
  $subject = $_POST['subject'];

  $sql = "INSERT INTO `contact` (`email`, `subject`) VALUES ('$email', '$subject')";
  $result = mysqli_query($dbcon, $sql);
  if($result){
    $message = "Thank you for showing your interest. I will get back to you soon.";
    echo '<script language="javascript">';
    echo 'alert("'.$message.'");';
    echo 'window.location= "https://localhost/portfolio/index.php";';
    echo '</script>';
  }
  else{
    echo "error".mysqli_error($dbcon);
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/all.min.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/aos.css" />
    <title>Portfolio</title>
</head>

<body id="home">
    <!-- Navbar -->
    <nav class="navbar sticky-top">
        <div class="logo">Portfolio</div>
        <!-- List -->
        <ul>
            <li><a href="#home" class="active">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#work">Work</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
        <!-- List -->
    </nav>
    <!-- Navbar -->

    <!-- Profile Section -->
    <div class="container profile" data-aos="fade-down">
        <section>
            <div class="row">
                <div class="col-sm-9">
                    <h5><span>Hi, my name is</span></h5>
                    <h1>Aarif Khan</h1>
                    <h4>I build things for the web.</h4>
                    <p>
                        I'm a web developer & programmer living in Delhi, India. I make
                        web applications usually with PHP to help people go further
                        online. My specialty is full website strategy, design and
                        development. If you have a project or creative need that I can
                        help with,
                        <a href="#contact" class="text-decoration-none text-warning">
                            please get in touch.</a>
                    </p>
                    <a class="btnmail" href="mailto:aarifkhan7896@gmail.com" type="submit" title="Contact">
                        Get in Touch
                    </a>
                    &nbsp;&nbsp;&nbsp;&nbsp;
                    <a class="btnmail" href="resume.pdf" type="submit" title="Download">
                        Resume
                    </a>
                </div>
                <div class="col-sm-3 flex" id="profileimg" data-aos="fade-down">
                    <img class="rounded mx-auto d-block responsiveimg" src="img/sw.png" alt="bg" />
                </div>
            </div>
        </section>
    </div>
    <!-- Profile Section -->

    <!-- About Section -->
    <div class="container about" id="about" data-aos="fade-down">
        <section>
            <div class="row">
                <div class="col-sm-9">
                    <h1 class="vline">&nbsp; About Me</h1>
                    <p>
                        Hello! My name is Aarif Khan and I enjoy building websites. My
                        interest in web development started back in 2015 when I designed a
                        web page as an assignment in a competition.
                    </p>
                    <p>
                        Today, I work on real projects which helps many customers to start
                        a growth in a business firm. My main focus these days is to build
                        such projects that adapts changing environment and can be modified
                        when required.
                    </p>
                    <p>Here are a few technologies I've been working with recently:</p>
                    <ul class="grid-container">
                        <li><i class="fas fa-caret-right"></i> Javascript</li>
                        <li><i class="fas fa-caret-right"></i> PHP</li>
                        <li><i class="fas fa-caret-right"></i> Bootstrap</li>
                        <li><i class="fas fa-caret-right"></i> JQuery</li>
                        <li><i class="fas fa-caret-right"></i> CSS</li>
                        <li><i class="fas fa-caret-right"></i> MySql</li>
                        <li><i class="fas fa-caret-right"></i> HTML</li>
                    </ul>
                </div>
                <div class="col-sm-3 flex" id="aboutimg" data-aos="fade-up">
                    <img src="img/me.jpg" class="responsiveimg" alt="Photo" />
                </div>
            </div>
        </section>
    </div>
    <!-- About Section -->

    <!-- Project Work Section -->
    <div class="container work" id="work" data-aos="fade-right">
        <section>
            <h1 class="vline">&nbsp;&nbsp;My Work</h1>
            <div class="alignwork">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Online Discussion Forum</h5>
                        <p class="card-text">
                            This Online forum can be used for many purposes, such as helping
                            learners to review material prior to an assignment or exam,
                            involving students in a discussion of the course material before
                            coming to class.
                        </p>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Courier Tracking System</h5>
                        <p class="card-text">
                            Courier tracking system is used to manage the work regarding the
                            services of the courier in an effective manner. It stores the
                            information regarding the customer and his material, which has
                            to be shipped.
                        </p>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Portfolio</h5>
                        <p class="card-text">
                            A portfolio site provides a convenient way for potential clients
                            to view your work while also allowing you to expand on your
                            skills and services. This, however, isn’t the ultimate purpose
                            of a portfolio website.
                        </p>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- Project Work Section -->

    <!-- Services -->
    <div class="container" id="services" data-aos="fade-left">
        <section>
            <h1 class="vline">&nbsp; My Services</h1>
            <div class="alignsection">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Software Development</h5>
                        <p class="card-text">
                            <img class="icon" src="img/swdev.png" alt="Software" />
                            The software can be developed for a variety of purposes, the
                            most common is to meet client requirements, to satisfy the needs
                            of users and personal use.
                        </p>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Web Design</h5>
                        <p class="card-text">
                            <img class="icon" src="img/website.png" alt="Design" />
                            A website should be designed for the people who will use it, so
                            that's exactly what I do. User focused design should be the
                            primary goal of any website.
                        </p>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Web Development</h5>
                        <p class="card-text">
                            <img class="icon" src="img/webdev.png" alt="Development" />
                            Every website should be built with two primary goals and to
                            achieve these goals: Firstly, it needs to work across all
                            devices. Secondly, it needs to be fast as possible.
                        </p>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- Services -->

    <!-- Contact Section -->
    <div class="container" id="contact" data-aos="fade-right">
        <section>
            <h1 class="vline">&nbsp; Get in Touch</h1>
            <h4 id="contactp">
                I'm currently available for freelance projects or full-time work. If
                you're interested in working with me, please get in touch using one of
                the methods below. Or feel free to just say hi. I like that too.
            </h4>
            <div class="row">
                <div class="col-sm-6">
                    <form class="contactform" method="post" action="index.php">
                        <div class="mb-3">
                            <input type="email" name="email" class="form-control" id="email"
                                placeholder="Enter Email" />
                        </div>
                        <div class="mb-3">
                            <textarea style="resize: none" name="subject" class="form-control" name="subject"
                                id="subject" cols="30" rows="10" placeholder="Type something"></textarea>
                        </div>
                        <button type="submit" class="btncontact">Send</button>
                    </form>
                </div>
                <div class="col-sm-6" id="contactinfo" data-aos="zoom-in-up">
                    <ul>
                        <li>
                            <a href="https://www.facebook.com/aarifkhan7896/"><i class="fab fa-facebook-f"></i></a>
                        </li>
                        <li>
                            <a href="https://twitter.com/aarifkhan7896"><i class="fab fa-twitter"></i></a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com/aarifkhan7896"><i class="fab fa-instagram"></i></a>
                        </li>
                        <li>
                            <a href="https://github.com/aarifkhan7896"><i class="fab fa-github"></i></a>
                        </li>
                        <li>
                            <a href="https://www.linkedin.com/in/aarifkhan7896"><i class="fab fa-linkedin-in"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
    </div>
    <!-- Contact Section -->

    <hr />

    <!-- Footer -->
    <div class="container">
        <footer>
            <a href="https://www.linkedin.com/in/aarifkhan7896
        ">
                <p>Designed & Built by Aarif Khan</p>
            </a>
        </footer>
    </div>
    <!-- Footer -->

    <!-- Jquery -->
    <script src="js/jquery.min.js"></script>
    <!-- Popper -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Font Awesome -->
    <script src="js/all.min.js"></script>
    <!-- AOS -->
    <script src="js/aos.js"></script>
    <script>
    AOS.init({
        duration: 1000,
    });
    </script>
    <script>
    $(document).ready(function() {
        $(window).scroll(function() {
            var scroll = $(window).scrollTop();
            if (scroll > 300) {
                $(".navbar").css("background", "#43809f ");
            } else {
                $(".navbar").css("background", "#39a7a7");
            }
        });
    });
    </script>
    <script>
    $("#email, #subject").focusin(function() {
        $(this).css("background-color", "transparent");
    });
    $("#email, #subject").blur(function() {
        $(this).css("background-color", "transparent");
    });
    </script>
</body>

</html>