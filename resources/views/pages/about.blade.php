@extends('layout')

@section('title')
SMEsabi - About
@endsection

@section('content')
<section id="about" class="about_area pt-80 pb-130">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="about_video mt-50 wow fadeInRightBig" data-wow-duration="1.3s" data-wow-delay="0.5s" style="border: 1px solid #02986A;">
                    <img src="https://www.smesabi.com/assets/videos/eng_intro.png" alt="about">
                    <a href="https://www.smesabi.com/assets/videos/eng_Intro.mp4" class="play video-popup" style=""><i class="lni lni-play"></i></a>
                    <hr>

                </div> <!-- about image -->
                <br>

                <div class="row">
                    <div class="col-sm-12 col-xs-12 col-md-6 pb-2 text-center">
                        <a href="https://drive.google.com/file/d/104aQqWZrE85ntd1Y7kUBA2tqsVSAS9bv/view?usp=sharing" class="btn btn-xs bg-success text-white" target="_blank">
                            Click to watch in Pidgin
                        </a>
                    </div>  

                    <div class="col-sm-12 col-xs-12 col-md-6 pb-2 text-center">

                        <a href="https://drive.google.com/file/d/1J6EvHIkT7_Gf_6qaugiK0EiZozvLH8jj/view?usp=sharing" class="btn btn-xs bg-success text-white" target="_blank">
                            Click to watch in Hausa
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about_content mt-50 wow fadeInLeftBig" data-wow-duration="1.3s" data-wow-delay="0.5s">
                    <div class="section_title">
                        <h4 class="title">About</h4>
                        <h2 class="main_title"> What is<span> SMEsabi?</span></h2>
                    </div> <!-- section title -->

                    <p class="text-justify">SMEsabi is a free e-Learning platform developed by Nigerians for Nigerians that brings entrepreneurship and financial knowledge directly to you. 
                    SMEs (Small, and Medium-sized Enterprises) are the key drivers to job creation and growth in any economy. To equip SMEs in Nigeria with the knowledge to thrive and prosper, the Federal University of Technology, Minna (FUT Minna) in collaboration with the German Development Cooperation (GIZ) initiated SMEsabi.</p>
                </div>

                <div class="about_content mt-50 wow fadeInLeftBig" data-wow-duration="1.3s" data-wow-delay="0.5s">
                    <div class="section_title">
                        <!-- <h4 class="title">About</h4> -->
                        <h2 class="main_title">Why<span> SMEsabi?</span></h2>
                    </div> <!-- section title -->

                    <p class="text-justify">With SMEsabi, your business will stand out from your competitors, and you will be able to make smarter money decisions! Through a series of short but educative online courses, you can build your capacity to improve your business and financial skills.
                    Our courses are for free, and you can study them on your own time and pace. After having completed all assessments successfully, a personalized certificate endorsed by FUT Minna and GIZ will be issued to you.</p>
                </div>

            </div>  
                            
        </div> <!-- row -->
    </div> <!-- container -->
</section>

<!--====== ABOUT PART ENDS ======-->



@endsection