<!DOCTYPE html>
<html lang="EN">

<head>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Tangerine:wght@400;700&display=swap"
        rel="stylesheet" />
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" />
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
        crossorigin="anonymous" />
    <link rel="stylesheet" href="/assets/css/login.css" />
    <title>Login</title>
    <link rel="stylesheet" href="../assets/css/maicons.css" />

    <link rel="stylesheet" href="../assets/css/bootstrap.css" />

    <link
        rel="stylesheet"
        href="../assets/vendor/owl-carousel/css/owl.carousel.css" />

    <link rel="stylesheet" href="../assets/vendor/animate/animate.css" />

    <link rel="stylesheet" href="../assets/css/theme.css" />
</head>

<body>
    <div class="col">
        <!-- Back to top button -->
        <div class="back-to-top"></div>

        <header>
            <div class="topbar">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 text-sm">
                            <div class="site-info">
                                <a href="#"><span class="mai-call text-primary"></span> +00 123 4455 6666</a>
                                <span class="divider">|</span>
                                <a href="#"><span class="mai-mail text-primary"></span> mail@example.com</a>
                            </div>
                        </div>
                        <div class="col-sm-4 text-right text-sm">
                            <div class="social-mini-button">
                                <a href="#"><span class="mai-logo-facebook-f"></span></a>
                                <a href="#"><span class="mai-logo-twitter"></span></a>
                                <a href="#"><span class="mai-logo-dribbble"></span></a>
                                <a href="#"><span class="mai-logo-instagram"></span></a>
                            </div>
                        </div>
                    </div> <!-- .row -->
                </div> <!-- .container -->
            </div> <!-- .topbar -->

            <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
                <div class="container">
                    <a class="navbar-brand" href="#"><span class="text-primary">One</span>-Health</a>

                    <form action="#">
                        <div class="input-group input-navbar">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="icon-addon1"><span class="mai-search"></span></span>
                            </div>
                            <input type="text" class="form-control" placeholder="Enter keyword.." aria-label="Username" aria-describedby="icon-addon1">
                        </div>
                    </form>

                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupport">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="index.html">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="about.html">About Us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="doctors.html">Doctors</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="blog.html">News</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="contact.html">Contact</a>
                            </li>
                            <li class="nav-item active">
                                <a class="btn btn-primary ml-lg-3" href="/html/register.html">Login / Register</a>
                            </li>
                        </ul>
                    </div> <!-- .navbar-collapse -->
                </div> <!-- .container -->
            </nav>
        </header>
        <!--header ends-->
        <br />
        <section class="d-flex justify-content-center align-items-center">
            <form action="" method="post">
                <div class="form-box">
                    <div class="form-value">
                        <form action="" method="post">
                            <h5>Please Login</h5>
                            <div class="inputbox">
                                <i class="fa-solid fa-user"></i>
                                <input type="text" placeholder="Enter Username" required id="username" />
                                <label for="username">Enter Username:</label>
                            </div>
                            <div class="inputbox">
                                <i class="fa-solid fa-lock"></i>
                                <input
                                    type="password"
                                    placeholder="Password"
                                    required
                                    id="password" />
                                <label for="password">Password</label>
                            </div>
                            <div class="remember">
                                <label for="checkbox"><input type="checkbox" id="checkbox" />Remember Me</label>
                                <a href="#">Forgot Password</a>
                            </div>
                            <button value="" id="Login">Log in</button>
                            <br />
                            <br />
                            <br />
                            <div class="register">
                                <p>Don't have account?<a href="/html/register.html">register</a></p>
                            </div>
                        </form>
                    </div>
                </div>
            </form>
        </section>
        <!--footer start-->
        <footer class="page-footer">
            <div class="container">
                <div class="row px-md-3">
                    <div class="col-sm-6 col-lg-3 py-3">
                        <h5>Company</h5>
                        <ul class="footer-menu">
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Career</a></li>
                            <li><a href="#">Editorial Team</a></li>
                            <li><a href="#">Protection</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-6 col-lg-3 py-3">
                        <h5>More</h5>
                        <ul class="footer-menu">
                            <li><a href="#">Terms & Condition</a></li>
                            <li><a href="#">Privacy</a></li>
                            <li><a href="#">Advertise</a></li>
                            <li><a href="#">Join as Doctors</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-6 col-lg-3 py-3">
                        <h5>Our partner</h5>
                        <ul class="footer-menu">
                            <li><a href="#">One-Fitness</a></li>
                            <li><a href="#">One-Drugs</a></li>
                            <li><a href="#">One-Live</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-6 col-lg-3 py-3">
                        <h5>Contact</h5>
                        <p class="footer-link mt-2">351 Willow Street Franklin, MA 02038</p>
                        <a href="#" class="footer-link">701-573-7582</a>
                        <a href="#" class="footer-link">healthcare@temporary.net</a>

                        <h5 class="mt-3">Social Media</h5>
                        <div class="footer-sosmed mt-3">
                            <a href="#" target="_blank"><span class="mai-logo-facebook-f"></span></a>
                            <a href="#" target="_blank"><span class="mai-logo-twitter"></span></a>
                            <a href="#" target="_blank"><span class="mai-logo-google-plus-g"></span></a>
                            <a href="#" target="_blank"><span class="mai-logo-instagram"></span></a>
                            <a href="#" target="_blank"><span class="mai-logo-linkedin"></span></a>
                        </div>
                    </div>
                </div>

                <hr />

                <p id="copyright">
                    Copyright &copy; 2020
                    <a href="#" target="_blank">MACode ID</a>. All
                    right reserved
                </p>
            </div>
        </footer>
        <!--footer ends-->
    </div>
    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <script
        src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
        crossorigin="anonymous"></script>
    <script type="module" src="../assets//js//login.js"></script>
    <!--axios libaray-->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
</body>

</html>