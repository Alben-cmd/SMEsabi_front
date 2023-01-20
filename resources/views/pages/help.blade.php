@extends('layout')

@section('title')
    SMEsabi - Help
@endsection

@section('content')

<section id="footer" class="footer_area">
        <div class="footer_widget bg_cover pt-80 pb-130" style="background-image: url(assets/images/contact.jpeg)">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="footer_info mt-45">
                            <div class="section_title section_title_2">
                                <h4 class="title">Help Desk</h4>
                                <h2 class="main_title"></h2>
                            </div> <!-- section title -->

                            <p>We have curated a list of resources to aid your learning, <a href="/resources" target="_blank" class="text-success font-bold">click here</a> to access them.</p>
                            <p>If you want to get in touch with us or have a question? Fill out this form or contact support</p>

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
                            <form id="contact-fm" action="https://www.smesabi.com/submit-contact" method="POST">
                                <input type="hidden" name="_token" value="kWCjiZ4vF8kdt4YcPgDnneEPdW7YBxelxFw0Nz8s">   
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

</section>

@endsection