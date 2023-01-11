<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title> @yield('title', 'SMESabi Welcome') </title>

        @include('roots._css')

    </head>
    <body>

            <!--====== PRELOADER PART START ======-->

    <div class="preloader">
        <div class="loader">
            <div class="ytp-spinner">
                <div class="ytp-spinner-container">
                    <div class="ytp-spinner-rotator">
                        <div class="ytp-spinner-left">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                        <div class="ytp-spinner-right">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--====== PRELOADER PART ENDS ======-->

    @include('partials.header')

    
    @yield('content')

    <!--====== FOOTER PART START ======-->

    <section id="footer" class="footer_area">
        <div class="footer_widget bg_cover pt-80 pb-130" style="background-image: url(assets/images/contact.jpeg)">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="footer_info mt-45">
                            <div class="section_title section_title_2">
                                <h4 class="title">Contact </h4>
                                <h2 class="main_title"></h2>
                            </div> <!-- section title -->

                            <p>Do you want to get in touch with us or have a question? Fill out this form or contact support</p>

                            <div class="single_info d-flex align-items-center mt-30">
                                <div class="info_icon">
                                    <i class="lni lni-whatsapp"></i>
                                </div>
                                <div class="info_content media-body">
                                    <p>08113535292 (Call or WhatsApp)</p>
                                    
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
                                    <p>SMEsabi Secretriat, Entreprenuership Centre<br> Federal University of Technology, Minna<br> Niger State, Nigeria</p>
                                </div>
                            </div> <!-- single info -->

                            <div class="single_info d-flex align-items-center mt-30">
                                <div class="info_icon">
                                    <I class="lni lni-calendar"></I>
                                </div>
                                <div class="info_content media-body">
                                    <p>Work hours: 9AM - 4PM</p>
                                </div>
                            </div> <!-- single info -->
                        </div> <!-- footer info -->
                    </div>
                    <div class="col-lg-7">
                        <div class="footer_form pt-40">
                            <form id="contact-fm" action="{{ route('contact.form') }}" method="POST">
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

    @include('roots._javascript')

    </body>
</html>
