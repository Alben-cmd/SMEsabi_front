
<nav class="navbar navbar-expand-lg bg-white navbar-dark fixed-top shadow" style="padding:18px;">
    <!-- Brand -->
    <a class="navbar-brand" href="{{ route('welcome') }} ">
        <img src="assets/images/logo.svg" alt="logo">
    </a>

    <!-- Toggler/collapsibe Button -->
    <button class="navbar-toggler bg-success" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon text-success"></span>
    </button>

    <!-- Navbar links -->
    <div class="collapse navbar-collapse ml-auto" id="collapsibleNavbar">
        <ul class="navbar-nav ml-auto" style="font-size: 18px;">
            
            <!-- <li class="nav-item">
                <a class="nav-link text-success page-scroll pl-3" href="/#home">Home</a>
            </li> -->
            
            <li class="nav-item" style="padding:4px;">
                <a class="nav-link text-success page-scroll pl-3" href="/about">About Us</a></li>
            </li>
            
            <li class="nav-item" style="padding:4px;">
                <a class="nav-link text-success page-scroll pl-3" href="/availiable-courses">Courses</a></li>
            </li>

            <li class="nav-item" style="padding:4px;">
                <a class="nav-link text-success page-scroll pl-3" href="/help">Need help?</a></li>
            </li>

            <!-- <li class="nav-item" style="padding:4px;">
                <a class="nav-link text-success page-scroll pl-3" href="/availiable-courses">Courses</a></li>
            </li> -->

            <!-- <li class="nav-item">
                <a class="nav-link text-success page-scroll pl-3" href="/resources">Resources</a></li>
            </li> -->

            <!-- <li class="nav-item">
                <a class="nav-link text-success page-scroll pl-3" href="/faqs">FAQs</a></li>
            </li> -->

            <!-- <li class="nav-item">
                <a class="nav-link text-success page-scroll pl-3" href="https://drive.google.com/file/d/1yyAtD8KsFddmyzwotnnEF2qAdG2dZdBr/view" target="_blank">Testimonials</a></li> -->
            </li>

            <!-- <li class="nav-item">
                <a class="nav-link text-success page-scroll pl-3" href="#footer">Help</a></li>
            </li> -->

            <li class="nav-item" style="padding:6px;">
                <a class="btn btn-outline-success" href="https://www.smesabi.com/lms/login/index.php">Login</a></li>
            </li>

            <li class="nav-item" style="padding:6px;">
                <a class="btn btn-success" href="https://www.smesabi.com/lms/login/signup.php" >Get Started</a></li>
            </li>
        </ul>
    </div>
</nav>

@if(Route::is('welcome'))


<!-- <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="assets/images/banner.jpeg" alt="First slide">
        <div class="carousel-caption d-none d-md-block">
            <h5>Thigns</h5>
            <p>...</p>
          </div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="ssets/images/advanced.jpg" alt="Second slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="assets/images/ef.jpg" alt="Third slide">
      </div>
    </div>
  </div> -->

<div id="home" class="header_slider slider-active">
    <div class="single_slider d-flex align-items-center bg_cover" style="background-image: url(/assets/images/sliders.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-sm-10 text-lg-left text-center">
                    <div class="header_content">
                        <h2 class="title" data-animation="fadeInUp" data-delay="0.2s">I sabi am! <br> How about you?</h2>
                        <p data-animation="fadeInUp" data-delay="0.5s">Are you looking to manage your money better, but you don???t know how? Do you have a business idea and you???re wondering where to start from or are you looking to grow your business? Do you want all these for <span style="color: #67cbac;"> FREE?</span></p>
                        <br>
                        <a href="https://www.smesabi.com/lms/login/signup.php" class="btn btn-success" data-animation="fadeInUp" data-delay="0.8s" target="_blank">Get Started</a>
                    </div> <!-- header content -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </div> <!-- single slider -->

</div> <!-- header menu -->

@endif

