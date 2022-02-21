@extends('layout')

@section('content')


    <!--====== ABOUT PART START ======-->

    <section id="about" class="about_area pt-80 pb-130">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about_video mt-50 wow fadeInRightBig" data-wow-duration="1.3s" data-wow-delay="0.5s">
                        <img src="assets/images/about-1.jpg" alt="about">
                        <a href="https://www.youtube.com/watch?v=fccI8zccmRs" class="play video-popup"><i class="lni lni-play"></i></a>
                    </div> <!-- about image -->
                </div>
                <div class="col-lg-6">
                    <div class="about_content mt-50 wow fadeInLeftBig" data-wow-duration="1.3s" data-wow-delay="0.5s">
                        <div class="section_title">
                            <h4 class="title">About</h4>
                            <h2 class="main_title"> Our SMESabi <span> Financial Literacy Course</span></h2>
                        </div> <!-- section title -->

                        <p class="text-justify">SMEsabi is a free eLearning platform that brings entrepreneurship and financial literacy knowledge directly to you. With SMEsabi, your financial skills would be enhanced...</p>

                        <div class="accordion pt-10" id="accordionExample">
                            <div class="card mt-25">
                                <div class="card-header" id="headingOne">
                                    <a href="#" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Basic and Advanced Financial Literacy</a>
                                </div>

                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <p>Take this course and bring your finanacial knowledge to the next level</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card mt-25">
                                <div class="card-header" id="headingTwo">
                                    <a href="#" class="collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Financial Literacy Trainer</a>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <p>You are interested in sharing your finanacial knowledge with others ? Click here!</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card mt-25">
                                <div class="card-header" id="headingThree">
                                    <a href="#" class="collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Entrepreneurship Fundamentals</a>
                                </div>
                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <p>
                                            This online course will be available soon!
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- about image -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== ABOUT PART ENDS ======-->

    <!--====== SERVICES PART START ======-->

    <section id="services" class="services_area pt-115 pb-120 bg_cover mb-150" style="background-image: url(assets/images/services_bg.jpg)">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section_title text-center pb-20">
                        <h4 class="title">Services</h4>
                        <h2 class="main_title">Our Professional Services</h2>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="single_services mt-30 wow fadeInUpBig" data-wow-duration="1.3s" data-wow-delay="0.2s">
                        <i class="lni lni-pallet"></i>
                        <h4 class="services_title">Graphic Design</h4>
                        <p>Donsetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore .</p>
                    </div> <!-- single services -->
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single_services mt-30 wow fadeInUpBig" data-wow-duration="1.3s" data-wow-delay="0.4s">
                        <i class="lni lni-code-alt"></i>
                        <h4 class="services_title">Web Design</h4>
                        <p>Donsetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore .</p>
                    </div> <!-- single services -->
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single_services mt-30 wow fadeInUpBig" data-wow-duration="1.3s" data-wow-delay="0.6s">
                        <i class="lni lni-target"></i>
                        <h4 class="services_title">Business Analysis</h4>
                        <p>Donsetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore .</p>
                    </div> <!-- single services -->
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single_services mt-30 wow fadeInUpBig" data-wow-duration="1.3s" data-wow-delay="0.8s">
                        <i class="lni lni-invention"></i>
                        <h4 class="services_title">Digital Marketing</h4>
                        <p>Donsetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore .</p>
                    </div> <!-- single services -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== SERVICES PART ENDS ======-->

    {{-- <!--====== COUNTER PART START ======-->

    <section id="counter" class="counter_area pt-115">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section_title text-center pb-20">
                        <h4 class="title">Stories</h4>
                        <h2 class="main_title">Achievements in Numbers</h2>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            
            <div class="row">
                <div class="col-md-3 col-6">
                    <div class="single_counter mt-30 wow fadeIn" data-wow-duration="1.3s" data-wow-delay="0.2s">
                        <i class="lni lni-cup"></i>
                        <span class="count counter">2435</span>
                        <p>Project Completed</p>
                    </div> <!-- single counter -->
                </div>
                <div class="col-md-3 col-6">
                    <div class="single_counter mt-30 wow fadeIn" data-wow-duration="1.3s" data-wow-delay="0.4s">
                        <i class="lni lni-users"></i>
                        <span class="count counter">535</span>
                        <p>Our Happy Clients</p>
                    </div> <!-- single counter -->
                </div>
                <div class="col-md-3 col-6">
                    <div class="single_counter mt-30 wow fadeIn" data-wow-duration="1.3s" data-wow-delay="0.6s">
                        <i class="lni lni-coffee-cup"></i>
                        <span class="count counter">23</span>
                        <p>Awards Won</p>
                    </div> <!-- single counter -->
                </div>
                <div class="col-md-3 col-6">
                    <div class="single_counter mt-30 wow fadeIn" data-wow-duration="1.3s" data-wow-delay="0.8s">
                        <i class="lni lni-user"></i>
                        <span class="count counter">41</span>
                        <p>Team Members</p>
                    </div> <!-- single counter -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== COUNTER PART ENDS ======--> --}}

    {{-- <!--====== PROJECT PART START ======-->

    <section id="project" class="project_area pt-115 pb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section_title pb-60">
                        <h4 class="title">Portfolio</h4>
                        <h2 class="main_title">Latest Project</h2>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single_project">
                        <div class="project_image">
                            <img src="assets/images/project-1.jpg" alt="project">
                        </div>
                        <div class="project_content">
                            <h6 class="sub_title">Graphic</h6>
                            <h4 class="title"><a href="#">Design Scratch</a></h4>
                            <a class="plus image-popup" href="assets/images/project-1.jpg"><i class="lni lni-plus"></i></a>
                        </div>
                    </div> <!-- single project -->
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_project">
                        <div class="project_image">
                            <img src="assets/images/project-2.jpg" alt="project">
                        </div>
                        <div class="project_content">
                            <h6 class="sub_title">Branding</h6>
                            <h4 class="title"><a href="#">Logo Design</a></h4>
                            <a class="plus image-popup" href="assets/images/project-2.jpg"><i class="lni lni-plus"></i></a>
                        </div>
                    </div> <!-- single project -->
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_project">
                        <div class="project_image">
                            <img src="assets/images/project-3.jpg" alt="project">
                        </div>
                        <div class="project_content">
                            <h6 class="sub_title">Web</h6>
                            <h4 class="title"><a href="#">Web Design</a></h4>
                            <a class="plus image-popup" href="assets/images/project-3.jpg"><i class="lni lni-plus"></i></a>
                        </div>
                    </div> <!-- single project -->
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_project">
                        <div class="project_image">
                            <img src="assets/images/project-4.jpg" alt="project">
                        </div>
                        <div class="project_content">
                            <h6 class="sub_title">Web</h6>
                            <h4 class="title"><a href="#">Web Development</a></h4>
                            <a class="plus image-popup" href="assets/images/project-4.jpg"><i class="lni lni-plus"></i></a>
                        </div>
                    </div> <!-- single project -->
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_project">
                        <div class="project_image">
                            <img src="assets/images/project-5.jpg" alt="project">
                        </div>
                        <div class="project_content">
                            <h6 class="sub_title">UI/UX</h6>
                            <h4 class="title"><a href="#">App Design</a></h4>
                            <a class="plus image-popup" href="assets/images/project-3.jpg"><i class="lni lni-plus"></i></a>
                        </div>
                    </div> <!-- single project -->
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_project">
                        <div class="project_image">
                            <img src="assets/images/project-3.jpg" alt="project">
                        </div>
                        <div class="project_content">
                            <h6 class="sub_title">Marketing</h6>
                            <h4 class="title"><a href="#">Banner Design</a></h4>
                            <a class="plus image-popup" href="assets/images/project-5.jpg"><i class="lni lni-plus"></i></a>
                        </div>
                    </div> <!-- single project -->
                </div>
            </div> <!-- row -->
        </div> <!-- container fluid -->
        <div class="container">
            <div class="project_btn text-center pt-30">
                <a href="javascript:void(0)" class="main-btn">View All</a>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== PROJECT PART ENDS ======--> --}}

    <!--====== TESTMONIAL PART START ======-->

    <section id="testimonial" class="testimonial_area pt-115 pb-120 bg_cover mb-150" style="background-image: url(assets/images/testimonial_bg.jpg)">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section_title section_title_2 text-center pb-50">
                        <h4 class="title">Testimonials</h4>
                        <h2 class="main_title">What Client Says</h2>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            
            <div class="row testimonial_active">
                <div class="col-lg-6">
                    <div class="single_testimonial text-center">
                        <img src="assets/images/author-1.jpg" alt="author">
                        <h5 class="name">MARY ADEGELU</h5>
                        <span> CEO, Scent Bee Wax Candle</span>
                        <p>The start-up loop has enabled me to maintain a good record keeping, which has led to progress in my business. I have performed primary and secondary research about my competitors resulting in the branding of my product in a unique way and doubling of sales. </p>
                    </div> <!-- single testimonial -->
                </div>
                
                <div class="col-lg-6">
                    <div class="single_testimonial text-center">
                        <img src="assets/images/author-2.jpg" alt="author">
                        <h5 class="name">MARY ADEGELU</h5>
                        <span>2808 Fingers & Events</span>
                        <p>After passing through the startup loop training, coaching and mentorship programme, I have been able to build great networking and communication skill that has helped boost my business.</p>
                    </div> <!-- single testimonial -->
                </div>
                
                <div class="col-lg-6">
                    <div class="single_testimonial text-center">
                        <img src="assets/images/author-3.jpg" alt="author">
                        <h5 class="name">OLAKUNLE IYANDA</h5>
                        <span>Damark Farms</span>
                        <p>The programme has sharpened my personal development in business and entrepreneurship development and has equipped me with the in-depth skill and nitty-gritty of business development and planning. </p>
                    </div> <!-- single testimonial -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== TESTMONIAL PART ENDS ======-->

    {{-- <!--====== TEAM PART START ======-->

    <section id="team" class="team_area pt-115 pb-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section_title text-center pb-20">
                        <h4 class="title">Team</h4>
                        <h2 class="main_title">Meet The Team</h2>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            
            <div class="row justify-content-center">
                <div class="col-md-4 col-sm-7">
                    <div class="single_team mt-30 wow fadeIn" data-wow-duration="1.3s" data-wow-delay="0.2s">
                        <div class="team_image">
                            <img src="assets/images/team-1.jpg" alt="team">
                        </div>
                        <div class="team_content">
                            <h4 class="team_name"><a href="#">David Smith</a></h4>
                            <span class="sub_title">UI/UX Designer</span>
                            <a class="arrow" href="javascript:void(0)"><i class="lni lni-chevron-right"></i></a>
                        </div>
                    </div> <!-- single team -->
                </div>
                <div class="col-md-4 col-sm-7">
                    <div class="single_team mt-30 wow fadeIn" data-wow-duration="1.3s" data-wow-delay="0.5s">
                        <div class="team_image">
                            <img src="assets/images/team-2.jpg" alt="team">
                        </div>
                        <div class="team_content">
                            <h4 class="team_name"><a href="#">Sara A. K.</a></h4>
                            <span class="sub_title">Creative Designer</span>
                            <a class="arrow" href="javascript:void(0)"><i class="lni lni-chevron-right"></i></a>
                        </div>
                    </div> <!-- single team -->
                </div>
                <div class="col-md-4 col-sm-7">
                    <div class="single_team mt-30 wow fadeIn" data-wow-duration="1.3s" data-wow-delay="0.8s">
                        <div class="team_image">
                            <img src="assets/images/team-3.jpg" alt="team">
                        </div>
                        <div class="team_content">
                            <h4 class="team_name"><a href="#">Ena Shah</a></h4>
                            <span class="sub_title">Graphic Designer</span>
                            <a class="arrow" href="javascript:void(0)"><i class="lni lni-chevron-right"></i></a>
                        </div>
                    </div> <!-- single team -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== TEAM PART ENDS ======--> --}}

    {{-- <!--====== PRICING PART START ======-->

    <section id="pricing" class="pricing_area bg_cover pt-115 pb-120" style="background-image: url(assets/images/pricing_bg.jpg)">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section_title section_title_2 text-center pb-20">
                        <h4 class="title">Pricing</h4>
                        <h2 class="main_title">Choose Your Perfect Plan</h2>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-7 col-sm-9">
                    <div class="single_pricing mt-30 wow fadeIn" data-wow-duration="1.3s" data-wow-delay="0.2s">
                        <div class="pricing_header text-center ">
                            <div class="clearfix">
                                <span class="sticker">20% Off</span>
                            </div>
                            <h3 class="pricing_title">Basic Plan</h3>
                            <span class="pricing"> <span>$</span>99/ M.</span>
                        </div>
                        <div class="pricing_list d-flex justify-content-center">
                            <ul class="list">
                                <li>Graphic Design</li>
                                <li>Web Development</li>
                                <li>Search Engine Optimization</li>
                                <li>Business Analysis</li>
                                <li>Full-stack Service</li>
                            </ul>
                        </div>
                        <div class="pricing_btn text-center">
                            <a class="main-btn main-btn_2" href="javascript:void(0)">Purchase Now</a>
                        </div>
                    </div> <!-- single pricing -->
                </div>
                <div class="col-lg-4 col-md-7 col-sm-9">
                    <div class="single_pricing mt-30 wow fadeIn" data-wow-duration="1.3s" data-wow-delay="0.5s">
                        <div class="pricing_header text-center ">
                            <div class="clearfix">
                                <span class="sticker sticker_2">Special</span>
                            </div>
                            <h3 class="pricing_title">Standard Plan</h3>
                            <span class="pricing"> <span>$</span>149/ M.</span>
                        </div>
                        <div class="pricing_list d-flex justify-content-center">
                            <ul class="list">
                                <li>Graphic Design</li>
                                <li>Web Development</li>
                                <li>Search Engine Optimization</li>
                                <li>Business Analysis</li>
                                <li>Full-stack Service</li>
                            </ul>
                        </div>
                        <div class="pricing_btn text-center">
                            <a class="main-btn" href="javascript:void(0)">Purchase Now</a>
                        </div>
                    </div> <!-- single pricing -->
                </div>
                <div class="col-lg-4 col-md-7 col-sm-9">
                    <div class="single_pricing mt-30 wow fadeIn" data-wow-duration="1.3s" data-wow-delay="0.8s">
                        <div class="pricing_header text-center ">
                            <div class="clearfix">
                                <span class="sticker">New</span>
                            </div>
                            <h3 class="pricing_title">Premium Plan</h3>
                            <span class="pricing"> <span>$</span>199/ M.</span>
                        </div>
                        <div class="pricing_list d-flex justify-content-center">
                            <ul class="list">
                                <li>Graphic Design</li>
                                <li>Web Development</li>
                                <li>Search Engine Optimization</li>
                                <li>Business Analysis</li>
                                <li>Full-stack Service</li>
                            </ul>
                        </div>
                        <div class="pricing_btn text-center">
                            <a class="main-btn main-btn_2" href="javascript:void(0)">Purchase Now</a>
                        </div>
                    </div> <!-- single pricing -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== PRICING PART ENDS ======--> --}}

    {{-- <!--====== BLOG PART START ======-->

    <section id="blog" class="blog_area pt-115 pb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section_title pb-20">
                        <h4 class="title">Blog</h4>
                        <h2 class="main_title">Latest News</h2>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="blog_image mt-30">
                        <img src="assets/images/blog-1.jpg" alt="blog">
                    </div> <!-- blog image -->
                </div>
                <div class="col-lg-6">
                    <div class="blog_content mt-25">
                        <ul class="meta">
                            <li>Post by :<a href="javascript:void(0)">Admin</a></li>
                            <li>15 June, 2023</li>
                        </ul>
                        <h3 class="blog_title"><a href="javascript:void(0)">Lorem ipsum dolor sitconsetetur sadipscing diam nonumy eirmod tempor invidunt ut.</a></h3>
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At veroaccusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum.</p>
                        <a href="javascript:void(0)" class="main-btn">Read More</a>
                    </div> <!-- blog content -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== BLOG PART ENDS ======--> --}}

    <!--====== FOOTER PART START ======-->

    <section id="footer" class="footer_area">
        <div class="footer_widget bg_cover pt-80 pb-130" style="background-image: url(assets/images/footer_bg.jpg)">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="footer_info mt-45">
                            <div class="section_title section_title_2">
                                <h4 class="title">Contact </h4>
                                <h2 class="main_title">Get In Touch</h2>
                            </div> <!-- section title -->

                            <p>Want to get in touch with us or have a question? Fill out this form or contact support</p>

                            <div class="single_info d-flex align-items-center mt-30">
                                <div class="info_icon">
                                    <I class="lni lni-phone"></I>
                                </div>
                                <div class="info_content media-body">
                                    <p>+2348103966057</p>
                                </div>
                            </div> <!-- single info -->

                            <div class="single_info d-flex align-items-center mt-30">
                                <div class="info_icon">
                                    <I class="lni lni-envelope"></I>
                                </div>
                                <div class="info_content media-body">
                                    <p>support@smesabi.com</p>
                                </div>
                            </div> <!-- single info -->

                            <div class="single_info d-flex align-items-center mt-30">
                                <div class="info_icon">
                                    <I class="lni lni-map-marker"></I>
                                </div>
                                <div class="info_content media-body">
                                    <p>SME Sabi Secretriat,<br> Federal University of Technology, Minna,<br> Niger State, Nigeria</p>
                                </div>
                            </div> <!-- single info -->
                        </div> <!-- footer info -->
                    </div>
                    <div class="col-lg-7">
                        <div class="footer_form pt-40">
                            <form id="contact-fm" action="#" method="post">
                                @csrf   
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="single_input mt-30">
                                            <input type="text" name="name" placeholder="Name">
                                        </div> <!-- single input -->
                                    </div>
                                    <div class="col-md-6">
                                        <div class="single_input mt-30">
                                            <input type="text" name="email" placeholder="Email">
                                        </div> <!-- single input -->
                                    </div>
                                    <div class="col-md-6">
                                        <div class="single_input mt-30">
                                            <input type="text" name="phone" placeholder="Phone">
                                        </div> <!-- single input -->
                                    </div>
                                    <div class="col-md-6">
                                        <div class="single_input mt-30">
                                            <input type="text" name="subject" placeholder="Subject">
                                        </div> <!-- single input -->
                                    </div>
                                    <div class="col-md-12">
                                        <div class="single_input mt-30">
                                            <textarea name="message" placeholder="Message"></textarea>
                                        </div> <!-- single input -->
                                    </div>
                                    <p class="form-message"></p>
                                    <div class="col-md-12">
                                        <div class="single_input mt-30">
                                            <button class="main-btn">SUBMIT</button>
                                        </div> <!-- single input -->
                                    </div>
                                </div> <!-- row -->
                            </form>
                        </div> <!-- footer form -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- footer widget -->
        
        @include('partials.footer')
    </section>

    <!--====== FOOTER PART ENDS ======-->
    
    <!--====== BACK TOP TOP PART START ======-->

    <a href="#" class="back-to-top"><i class="lni lni-chevron-up"></i></a>

    <!--====== BACK TOP TOP PART ENDS ======-->

    <!--====== PART START ======-->

<!--
    <section class="">
        <div class="container">
            <div class="row">
                <div class="col-lg-">
                    
                </div>
            </div>
        </div>
    </section>
-->

    <!--====== PART ENDS ======-->

@endsection