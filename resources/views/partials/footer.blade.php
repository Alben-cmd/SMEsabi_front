<div class="footer_copyright">
    <div class="container">

        <div class="footer_copyright_wrapper  d-sm-flex justify-content-between">
            
            <div class="copyright mt-15">
                
                <div class="footer_info">
                    <div class="section_title section_title_2">
                        <a class="navbar-brand" href="{{ route('welcome') }} ">
                            <img src="assets/images/logo.svg" alt="logo">
                        </a>
                    </div> <!-- section title -->
                    
                </div> <!-- footer info -->   
            </div>
            <div class="copyright mt-15">
                <div class="footer_info">
                    <div class="section_title section_title_2">
                        <h4 class="title">Contact</h4>
                        <h2 class="main_title"></h2>
                    </div> <!-- section title -->
                    <div class="single_info d-flex align-items-left mt-30">
                        <div class="info_icon">
                            <i class="lni lni-whatsapp"></i>
                        </div>
                        <div class="info_content media-body">
                            <p>08113535292 (Call or WhatsApp)</p>
                            
                        </div>
                    </div> <!-- single info -->

                    <div class="single_info d-flex align-items-left mt-30">
                        <div class="info_icon">
                            <I class="lni lni-envelope"></I>
                        </div>
                        <div class="info_content media-body">
                            <p>support@smesabi.com</p>
                        </div>
                    </div> <!-- single info -->

                    <div class="single_info d-flex align-items-left mt-30">
                        <div class="info_icon">
                            <I class="lni lni-map-marker"></I>
                        </div>
                        <div class="info_content media-body">
                            <p>SMEsabi Secretriat, Entreprenuership Centre<br> Federal University of Technology, Minna<br> Niger State, Nigeria</p>
                        </div>
                    </div> <!-- single info -->

                    <div class="single_info d-flex align-items-left mt-30">
                        <div class="info_icon">
                            <I class="lni lni-calendar"></I>
                        </div>
                        <div class="info_content media-body">
                            <p>Work hours: 9AM - 4PM</p>
                        </div>
                    </div>
                    <div class="single_info d-flex align-items-left">
                        
                        <div class="footer_social">
                            <ul>
                                <li><a href="https://www.facebook.com/smesabi/"><i class="lni lni-facebook-filled"></i></a></li>
                                <li><a href="https://twitter.com/SMEsabiNG"><i class="lni lni-twitter-original"></i></a></li>
                                <li><a href="https://www.linkedin.com/company/smesabi/"><i class="lni lni-linkedin-original"></i></a></li>
                                <li><a href="https://www.instagram.com/smesabi/"><i class="lni lni-instagram-original"></i></a></li>
                            </ul>
                        </div>
                    </div>
                     <!-- single info -->
                </div> <!-- footer info -->   
            </div>            
            <div class="copyright mt-15">
                <div class=" section_title_2">
                    <h4 class="title text-white">Quick Links</h4>
                    
                </div> <!-- section title -->
                <div class="footer_info mt-10 text-center">
                    <a href="#home">Home</a>
            </div>
                <div class="footer_info mt-10 text-center">
                        <a href="https://drive.google.com/file/d/1yyAtD8KsFddmyzwotnnEF2qAdG2dZdBr/view">Testimonials</a>
                </div> <!-- single info -->

                <div class="footer_info text-center mt-10">
                    <div class="info_content media-body">
                        <a href="{{ route('resources') }} " class="text-white;">Resources</a>
                    </div>
                </div> <!-- single info -->

                <div class="footer_info text-center mt-10">
                    <div class="info_content media-body">
                        <a href="/#footer" class="text-white;">Help</a>
                    </div>
                </div> <!-- single info -->

                <div class="footer_info text-center mt-10">
                    <div class="info_content media-body">
                        <a href="{{ route('faqs') }} " class="text-white;">FAQs</a>
                    </div>
                </div> <!-- single info -->
                <div class="footer_info text-center mt-10">
                    <div class="info_content media-body">
                        <a href="/#mobile" class="text-white;">Mobile App</a>
                    </div>
                </div> <!-- single info -->
            </div>
            <div class="footer_social mt-15">
                <div class="section_title section_title_2">
                    <h4 class="title">Message Us </h4>
                    <h2 class="main_title"></h2>
                </div>
                <form id="contact-fm" action="{{ route('contact.form') }}" method="POST">
                    @csrf   
                    <div class="footer_form pt-15">
                            <div class="single_input mt-10">
                                <input type="text" name="name" placeholder="Name">
                            
                        
                            <div class="single_input mt-10">
                                <input type="text" name="email" placeholder="Email">
                            
                        
                            <div class="single_input mt-10">
                                <input type="text" name="phone" placeholder="Phone">
                            </div> <!-- single input -->
                        
                            <div class="single_input mt-10">
                                <input type="text" name="subject" placeholder="Subject">
                            </div> <!-- single input -->
                        </div>
                        
                            <div class="single_input mt-10">
                                <textarea name="message" placeholder="Message"></textarea>
                            </div> <!-- single input -->
                        
                        <p class="form-message"></p>
                        
                            <div class="mt-10 text-center">
                                <button class="btn btn-success">Submit</button>
                            </div> <!-- single input -->
                        </div>
                    </div> <!-- row -->
                </form>
            </div>
            
        </div> <!-- footer copyright wrapper -->
    </div> <!-- container -->
</div> <!-- footer widget -->

