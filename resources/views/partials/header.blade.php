
<nav class="navbar navbar-expand-lg bg-white navbar-dark fixed-top shadow">
    <!-- Brand -->
    <a class="navbar-brand" href="#">
        <img src="assets/images/logo.svg" alt="logo">
    </a>

    <!-- Toggler/collapsibe Button -->
    <button class="navbar-toggler bg-success" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon text-success"></span>
    </button>

    <!-- Navbar links -->
    <div class="collapse navbar-collapse ml-auto" id="collapsibleNavbar">
        <ul class="navbar-nav ml-auto">
            
            <li class="nav-item">
                <a class="nav-link text-success page-scroll pl-3" href="/#home">Home</a>
            </li>
            
            <li class="nav-item">
                <a class="nav-link text-success page-scroll pl-3" href="/#about">About Us</a></li>
            </li>
            
            <li class="nav-item">
                <a class="nav-link text-success page-scroll pl-3" href="/availiable-courses">Available Courses</a></li>
            </li>

            <li class="nav-item">
                <a class="nav-link text-success page-scroll pl-3" href="/resources">Resources</a></li>
            </li>

            <li class="nav-item">
                <a class="nav-link text-success page-scroll pl-3" href="/faqs">FAQs</a></li>
            </li>

            <li class="nav-item">
                <a class="nav-link text-success page-scroll pl-3" href="https://drive.google.com/file/d/1yyAtD8KsFddmyzwotnnEF2qAdG2dZdBr/view" target="_blank">Testimonials</a></li>
            </li>

            <li class="nav-item">
                <a class="nav-link text-success page-scroll pl-3" href="#footer">Help</a></li>
            </li>

            <li class="nav-item">
                <a class="nav-link text-success page-scroll pl-3" href="https://www.smesabi.com/lms/login/index.php">Login</a></li>
            </li>

            <li class="nav-item">
                <a class="nav-link text-success page-scroll pl-3" href="https://www.smesabi.com/lms/login/signup.php">Register</a></li>
            </li>
        </ul>
    </div>
</nav>

@if(Route::is('welcome'))

<div id="home" class="header_slider slider-active">
    <div class="single_slider d-flex align-items-center bg_cover" style="background-image: url(assets/images/banner.jpeg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-sm-10">
                    <div class="header_content">
                        <h2 class="title" data-animation="fadeInUp" data-delay="0.2s">I sabi am! <br> How about you ?</h2>
                        <p data-animation="fadeInUp" data-delay="0.5s">Are you looking to manage your money better, but you don’t know how? Do you have a business idea and you’re wondering where to start from or are you looking to grow your business? Do you want all these for <span style="color: #67cbac;"> FREE?</span></p>
                        <a href="https://www.smesabi.com/lms/login/signup.php" class="main-btn" data-animation="fadeInUp" data-delay="0.8s" target="_blank">Register Now</a>
                    </div> <!-- header content -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </div> <!-- single slider -->

        <!--            <span class="title_shape">DIGITAL</span>-->
</div> <!-- header menu -->

@endif

