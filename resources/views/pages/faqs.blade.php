@extends('layout')

@section('title')
    SMEsabi - FAQs
@endsection

@section('content')


<!--====== ABOUT PART START ======-->

    <section id="about" class="about_area pt-80 pb-130">
        <div class="container">
            <div class="row align-items-center">
                <!--<a href="https://www.smesabi.com/lms/my/" class="btn btn-light btn-rounded btn-circle btn-sm" >Dashboard</a> -->
                <div class="col-lg-12">
                    <div class="about_content mt-50 wow fadeInLeftBig" data-wow-duration="1.3s" data-wow-delay="0.5s">
                        <div class="section_title">
                            <h4 class="title"></h4>
                            <h2 class="main_title"> FAQs</h2>
                        </div> <!-- section title -->

                        <div class="accordion pt-10" id="accordionExample">
                            <div class="card mt-25">
                                <div class="card-header" id="headingOne">
                                    <a href="#" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">How can I access the link to register for the SMEsabi course.</a>
                                </div>

                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <p class="text-justify">Simply click on <a href="http://www.smesabi.com/lms/login/index.php"> register </a> on the SMEsabi website or visit http://www.smesabi.com/lms/login/index.php to register and start learning. </p>
                                    </div>
                                </div>
                            </div>

                            <div class="card mt-25">
                                <div class="card-header" id="headingTwo22">
                                    <a href="#" class="collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo22" aria-expanded="false" aria-controls="collapseTwo22">How to register</a>
                                </div>
                                <div id="collapseTwo22" class="collapse" aria-labelledby="headingTwo22" data-parent="#accordionExample">
                                    <div class="card-body">
                                        
                                        <iframe src="https://drive.google.com/file/d/1r98p7rq12W7U2ZQgDaTJmjZJC16N_Fqt/preview" width="480" height="320" allow="autoplay" __idm_id__="8609793">
                                        </iframe>
                                        <p>To watch the Pidgin version <a href="https://drive.google.com/file/d/11KlFfivDUNS80slwrS55T5fgMJcU8Vuc/view" target="_blank">click here.</a></p>
                                        <p>To watch the Hausa version <a href="https://drive.google.com/file/d/15StluVsisoHMEv6ZUzuBL3SW9qXUlFaH/view" target="_blank">click here.</a></p>
                                    </div>
                                </div>
                            </div>

                            <div class="card mt-25">
                                <div class="card-header" id="headingTwo">
                                    <a href="#" class="collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Should I use a phone or laptop?</a>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <p class="text-justify">Any smartphone or laptop.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card mt-25">
                                <div class="card-header" id="headingTwo2">
                                    <a href="#" class="collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo2" aria-expanded="false" aria-controls="collapseTwo2">I can't find the confirmation email in my inbox.</a>
                                </div>
                                <div id="collapseTwo2" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <p class="text-justify">Check also in your spam folders.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion pt-10" id="accordionExample">
                            <div class="card mt-25">
                                <div class="card-header" id="heading3">
                                    <a href="#" class="collapsed" data-toggle="collapse" data-target="#collapse3" aria-expanded="false" aria-controls="collapse3">I Forgot my password.</a>
                                </div>
                                <div id="collapse3" class="collapse" aria-labelledby="heading3" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <p class="text-justify">
                                            Click on <a href="https://www.smesabi.com/lms/login/forgot_password.php"> “Forgot Password?”</a> on the login page or visit https://www.smesabi.com/lms/login/forgot_password.php to reset your password.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card mt-25">
                                <div class="card-header" id="heading4">
                                    <a href="#" class="collapsed" data-toggle="collapse" data-target="#collapse4" aria-expanded="false" aria-controls="collapse4">Does SMEsabi have a mobile app?</a>
                                </div>
                                <div id="collapse4" class="collapse" aria-labelledby="heading4" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <p class="text-justify">
                                            No, but you can download the official moodle app which works with SMEsabi. For <a href="https://play.google.com/store/apps/details?id=com.moodle.moodlemobile&hl=en&gl=US" target="_blank">android users</a> and <a href="https://apps.apple.com/us/app/moodle/id633359593" target="_blank">iOS users</a>.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="card mt-25">
                                <div class="card-header" id="heading5">
                                    <a href="#" class="collapsed" data-toggle="collapse" data-target="#collapse5" aria-expanded="false" aria-controls="collapse5">How can I use the mobile app after download?</a>
                                </div>
                                <div id="collapse5" class="collapse" aria-labelledby="heading5" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <div class="row">

                                            <div class="col-sm-4">
                                                <p><b>Step 1:</b> Input the website address under your site (smesabi.com/lms) after you open the app.</p>
                                                <img src="{{ asset('assets/images/step1.png') }}">
                                            </div>

                                            <div class="col-sm-4">
                                                <p><b>Step 2:</b> Input your username and password in the field provided.</p><br>
                                                <img src="{{ asset('assets/images/step2.png') }}">
                                            </div>

                                            <div class="col-sm-4">
                                                <p><b>Step 3:</b> On successful login, you will see your course overview.</p><br>
                                                <img src="{{ asset('assets/images/step3.png') }}">
                                            </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card mt-25">
                                <div class="card-header" id="heading55">
                                    <a href="#" class="collapsed" data-toggle="collapse" data-target="#collapse55" aria-expanded="false" aria-controls="collapse55">Can I browse the content of my courses even when offline?</a>
                                </div>
                                <div id="collapse55" class="collapse" aria-labelledby="heading5" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <p class="text-justify">
                                            Yes, you can download and browse the downloaded course contents/resources offline.<br>

                                            Under the course overview, on a course card click the 3 icons as indicated on the image below, then click download.<br>

                                            You can now access any downloaded course even when offline.

                                        </p>
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <img src="{{ asset('assets/images/step4.png') }}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card mt-25">
                                <div class="card-header" id="heading7">
                                    <a href="#" class="collapsed" data-toggle="collapse" data-target="#collapse7" aria-expanded="false" aria-controls="collapse7">Can I take an assessment offline?</a>
                                </div>
                                <div id="collapse7" class="collapse" aria-labelledby="heading7" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <p class="text-justify">
                                            No, you cannot take an assessment offline.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="card mt-25">
                                <div class="card-header" id="heading8">
                                    <a href="#" class="collapsed" data-toggle="collapse" data-target="#collapse8" aria-expanded="false" aria-controls="collapse8">I can't find where there is affiliation/course or partner organization to choose 50 Million African Women Speak Platform (50MAWSP).</a>
                                </div>
                                <div id="collapse8" class="collapse" aria-labelledby="heading8" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <p class="text-justify">
                                            Affiliation/course has been removed from SMEsabi. Simply Send a message via email or WhatsApp to the support services so you can be enrolled in the 50MAWSP Course. 
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card mt-25">
                                <div class="card-header" id="heading9">
                                    <a href="#" class="collapsed" data-toggle="collapse" data-target="#collapse9" aria-expanded="false" aria-controls="collapse9">I am logged in, but can't see my course.</a>
                                </div>
                                <div id="collapse9" class="collapse" aria-labelledby="heading9" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <p class="text-justify">
                                            At the dashboard on your left, click on the course overview, select your course, and enrol yourself. 
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="card mt-25">
                                <div class="card-header" id="heading10">
                                    <a href="#" class="collapsed" data-toggle="collapse" data-target="#collapse10" aria-expanded="false" aria-controls="collapse8">Can I skip the lessons and take the module assessments?</a>
                                </div>
                                <div id="collapse10" class="collapse" aria-labelledby="heading10" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <p class="text-justify">
                                            No, you have to do the lessons before you can attempt the module assessment.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="card mt-25">
                                <div class="card-header" id="heading11">
                                    <a href="#" class="collapsed" data-toggle="collapse" data-target="#collapse11" aria-expanded="false" aria-controls="collapse11">Is a copy of the certificate sent to my email address?</a>
                                </div>
                                <div id="collapse11" class="collapse" aria-labelledby="heading9" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <p class="text-justify">
                                            Yes, you get a copy in your email.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="card mt-25">
                                <div class="card-header" id="heading12">
                                    <a href="#" class="collapsed" data-toggle="collapse" data-target="#collapse12" aria-expanded="false" aria-controls="collapse12">I can't view my certificate.</a>
                                </div>
                                <div id="collapse12" class="collapse" aria-labelledby="heading12" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <p class="text-justify">
                                            Simply click on the 'certificate of achievement', view it and download your certificate.  
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="card mt-25">
                                <div class="card-header" id="heading13">
                                    <a href="#" class="collapsed" data-toggle="collapse" data-target="#collapse13" aria-expanded="false" aria-controls="collapse13">Done with a course and want to enrol for another course?</a>
                                </div>
                                <div id="collapse13" class="collapse" aria-labelledby="heading13" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <p class="text-justify">
                                            At the dashboard on your left, click on the course overview, select the new course, and enrol yourself. 
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


@endsection	