@extends('layout')

@section('title')
    SMEsabi - Welcome
@endsection

@section('content')


    <!--====== ABOUT PART START ======-->
    <section id="courses" class="project_area pt-50" style="">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section_title pb-60">
                        <h4 class="title"></h4>
                        <h2 class="main_title">Available <span>Courses</span> </h2>              
                            
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 shadow mb-2">
                    <div class="single_project">
                        <div class="project_image">
                            <img src="assets/images/basic.jpg" alt="project">
                        </div>
                        <div class="p-4">
                        	<h5 class="title"><a href="https://www.smesabi.com/lms/course/view.php?id=57" class="text-success">Basic Financial Literacy</a></h5>
                            <p class="text-justify">Register now and learn how to manage your money better. You can take an optional module to improve your chances of getting a loan. </p>
                            <div class="row">
                                <div class="col-6">
                                    <img src="assets/icon/money-bag.png"/>
                                    <span style="color:#014741;">&nbsp; Free</span>
                                </div>
                                <div class="col-6" style="text-align:right;">
                                    <em>24 hours</em>
                                </div>
                            </div>
                            
                        </div>
                    </div> <!-- single project -->
                </div>

                <div class="col-lg-4 col-md-6 shadow mb-2">
                    <div class="single_project">
                        <div class="project_image">
                            <img src="assets/images/advanced.jpg" alt="project">
                        </div>
                        <div class="p-4">
                            
                            <h5 class="title"><a href="https://www.smesabi.com/lms/course/view.php?id=56" class="text-success">Advanced Financial Literacy</a></h5>
                            <p class="">Take this course and bring your financial knowledge to the next level.</p>
                            <div class="row">
                                <div class="col-6">
                                    <img src="assets/icon/money-bag.png"/>
                                    <span style="color:#014741;">&nbsp; Free</span>
                                </div>
                                <div class="col-6" style="text-align:right;">
                                    <em>48 hours</em>
                                </div>
                            </div>
                        </div>
                    </div> <!-- single project -->
                </div>
                
                <div class="col-lg-4 col-md-6 shadow mb-2">
                    <div class="single_project">
                        <div class="project_image">
                            <img src="assets/images/ef.jpg" alt="project">
                        </div>
                        <div class="p-4">
                            
                            <h5 class="title"><a href="https://www.smesabi.com/lms/course/view.php?id=55" class="text-success">Entreprenuership Fundamentals</a></h5>
                            <p class="">Do you want to become a successful entrepreneur? Join this course!</p>
                            <div class="row">
                                <div class="col-6">
                                    <img src="assets/icon/money-bag.png"/>
                                    <span style="color:#014741;">&nbsp; Free</span>
                                </div>
                                <div class="col-6" style="text-align:right;" >
                                    <em>120 hours</em>
                                </div>
                            </div>
                            
                        </div>
                    </div> <!-- single project -->
                </div>
                
            </div> <!-- row -->
        </div> <!-- container fluid -->
        <div class="container">
            <div class="project_btn text-center pt-30">
                <!-- <a href="javascript:void(0)" class="main-btn">View All</a> -->
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <section id="about" class="about_area pt-5 pb-5" style="background-color: #ECF1F4;">
        <div class="container">
            <div class="col-lg-12">
                <div class="section_title">
                    <!-- <h4 class="title">About</h4> -->
                    <h4 class="title"></h4>
                    <h2 class="main_title pb-20">Why<span> SMEsabi?</span></h2>
                </div> <!-- section title -->
            </div>
            
            <div class="row  mx-md-5 px-md-5">
                <div class="col-md-8 col-12 p-10">
                    <div class="col-md-12 blog_content card bg-success pt-30 pb-70 wow fadeInLeftBig" data-wow-duration="1.3s" data-wow-delay="0.5s" style="border: 1px solid #02986A; border-radius:1rem;">
                        <p class="text-justify text-white" >With SMEsabi, your business will stand out from your competitors, and you will be able to make smarter money decisions! Through a series of short but educative online courses, you can build your capacity to improve your business and financial skills.</p>
                        <br>
                        <p class="text-justify text-white">Our courses are for free, and you can study them on your own time and pace. After having completed all assessments successfully, a personalized certificate endorsed by FUT Minna and GIZ will be issued to you.</p>
                     </div>
                </div>
               <div class="col-md p-10">
                    <!-- <div class="col-md-12"> -->
                        <div class="project_image wow fadeInRightBig" data-wow-duration="1.3s" data-wow-delay="0.5s">
                            <img id="why" src="assets/images/why_smesabi.jpg" alt="why smesabi" class="d-none d-md-block" style="border-radius:1rem;" height="320" width="300">
                        </div>
                    <!-- </div> -->
                    
                </div>
              </div>
            <div class="row align-item-center">
                <div class="col-md-6">

                </div>
            </div>
        </div>
    </section>

    <section id="why_smesabi" class="about_area pt-0 pb-50 pb-sm-10" style="background-color: #ECF1F4;">
        <div class="container">            
            <div class="row">
                <div class="col-md-6 p-10 pb-20">
                    <div class="col-md-12 blog_content pt-5 pb-20 wow fadeInLeftBig" data-wow-duration="1.3s" data-wow-delay="0.5s" style="border-radius:1rem; background:#014741">
                        <div class="section_title">
                            <!-- <h4 class="title">About</h4> -->
                            <h4 class="main_title pb-20 text-white">Schedule for an Entrepreneurship coaching session</h4>
                        </div>
                        <p class="text-justify text-white" >To enroll, you must first complet the Entreprenuership Fundamentals course</p>
                        <a href="#" class="pt-10">
                        <button type="button" class="btn btn-success">Book now</button></a>
                     </div>
               </div>
               <div class="col-md-6 p-10">
                <div class="col-md-12 blog_content pt-5 pb-20 wow fadeInRightBig" data-wow-duration="1.3s" data-wow-delay="0.5s" style="border-radius:1rem; background:#006634">
                    
                    <div class="section_title">                            
                        <h3 class="main_title pb-10 text-white">Enroll To be a Financial Literacy Trainer</h3>
                    </div>
                    <p class="text-justify text-white" >Are you interested in sharing your financial knowledge? </p>
                    <a href="https://www.smesabi.com/lms/course/view.php?id=58" class="pt-45 pb-25">
                            <button type="button" class="btn btn-success">Enroll now</button></a>
                 </div>
                 
               </div>
              </div>
            
            </div>
        </div>
    </section>

    <section id="testimonial" class="testimonial_area pt-35 pb-10 bg_cover mb-10 pb-sm-10" style="background-image: url(assets/images/testimonial.jpeg)">
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section_title section_title_2 text-center pb-50">
                        <h3 class="title" style="color:#38424D;">Testimonials</h3>
                        <h2 class="main_title" style="color:#38424D">What Our Learners Say</h2>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            
            <div class="row testimonial_active">
                <div class="col-md-4">
                    <div class="single_testimonial text-center pt-30 pb-40" style="border: 1px solid #02986A; border-radius:1rem;" >
                        <img src="assets/images/hamdala.png" alt="author" height="100" width="100">
                        <h5 class="name">SHITTA OYINKANSOLA HAMDALA</h5>
                        <span> CEO, Scent Bee Wax Candle</span>
                        <p class="p-2">SMEsabi has enabled me to maintain a good record keeping, which has led to progress in my business. I have performed research about my competitors resulting in the branding of my product in a unique way and doubling of sales. </p>
                    </div> <!-- single testimonial -->
                </div>
                
                <div class="col-md-4">
                    <div class="single_testimonial text-center pt-30 pb-40" style="border: 1px solid #02986A; border-radius:1rem;">
                        <img src="assets/images/author-2.jpg" alt="author" height="100" width="100">
                        <h5 class="name">MARY ADEGELU</h5>
                        <span>2808 Fingers & Events</span>
                        <p class="p-2">After passing through the SMEsabi training, coaching and mentorship programme, I have been able to build great networking and communication skill that has helped boost my business.</p>
                    </div> <!-- single testimonial -->
                </div>
                
                <div class="col-md-4">
                    <div class="single_testimonial text-center pt-30 pb-40" style="border: 1px solid #02986A; border-radius:1rem;">
                        <img src="assets/images/author-3.jpg" alt="author" height="100" width="100">
                        <h5 class="name">OLAKUNLE IYANDA</h5>
                        <span>Damark Farms</span>
                        <p class="p-2">SMEsabi has sharpened my personal development in business and entrepreneurship development and has equipped me with the in-depth skill and nitty-gritty of business development and planning. </p>
                    </div> <!-- single testimonial -->
                </div>
            </div> <!-- row -->
            
        </div> <!-- container -->
    </section>

    <!--====== TESTMONIAL PART ENDS ======-->

    


   <!--====== BLOG PART START ======-->

    <!-- <section id="blog" class="blog_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section_title pb-20">
                        <h4 class="title">Blog</h4>
                        <h2 class="main_title">Latest News</h2>
                    </div> 
                </div>
            </div> 
            
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="blog_image mt-30">
                        <img src="assets/images/blog-1.jpg" alt="blog">
                    </div> 
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
                    </div> 
                </div>
            </div> 
        </div> 
    </section> -->

    <!--====== BLOG PART ENDS ======--> 

    <section id="blog" class="blog_area pb-20">
        <div class="container">
            
            <div class="container">
                <div class="row" style="background-color: #014741; border-radius:15px;">
                    <div class="col-md-6 p-5">
                        <h2 class="text-white">Partners</h2>
                        <br>
                        <p class="text-white text-justify">Harde Business School is an approved Centre, licensed by OTHM Qualifications, an OFQUAL (Office of the Qualifications and Examinations Regulation) regulated awarding Body, domiciled in UK and a full Member of the Federation of Awarding Bodies (FAB).</p>
                    </div>

                    <div class="col-md-6 my-md-5">
                        <div class="row" style="background-color: white; padding:50px; margin:20px;border-radius:15px;">
                            <div class="col-sm-4">
                                <img src="{{ asset('assets/images/codel.jpeg') }}">
                            </div>
                            
                            <div class="col-sm-4">
                                <img src="{{ asset('assets/images/gizcoop.jpeg') }}">
                            </div>

                            <div class="col-sm-4">
                                <img src="{{ asset('assets/images/gizlogo.jpeg') }}">
                            </div>

                            <div class="col-sm-4">
                                <img src="{{ asset('assets/images/leadresources.jpeg') }}">
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>


    <!--====== PART ENDS ======-->

@endsection