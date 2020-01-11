@extends('front.layout.main')
@section('body')
    <!-- start breadcrumb -->
        <section class="breadcrumb_main_area margin-bottom-80" style="background-image:url('{{ asset('img/about-us-breadcrumb.jpg') }}'); background-repeat: no-repeat;">
            <div class="container-fluid">
                <div class="row">
                    <div class="breadcrumb_main nice_title">
                        <h2>About US</h2>
                        <!-- special offer start -->
                        <div class="special_offer_main">
                            <div class="container">
                                <div class="special_offer_sub">
                                    <img src="{{ asset('img/special-offer-yellow-main.png')}}" alt="img">
                                </div>
                            </div>
                        </div>         
                        <!-- end offer start -->
                    </div>
                </div>
            </div>            
        </section>
        <!-- end breadcrunb -->
        
        <!-- start our room facilities -->
        <section class="our_room_facilities_area">
            <div class="container">
                <div class="our_room_facilities margin-bottom-70">
                    <div class="facilities_top_para">
                    <h4>About <span><img src="img/textabout.png"></span> </h4>
                        <p align="justify">
                            <img src="{{ asset('img/building.jpg')}}" align="right" class="thumbnail" style="height: 270px; margin-left: 10px;">
                            Friendliness, immaculate administrations are offered at D2M in Rohtak. Entertain yourself with the extravagance and comfort offered at The D2M, Rohtak. 
                         
                            Stylish and Modern, the aerated and cooled rooms are gorgeously finished with textures and unique fine art. 
                        
                            Each room accompanies a LED TV, an all around supplied  free  high-speed WiFi is available throughout the hotel,  parking. Visitors in the D2M get 24-hour warden benefit. 
                       
                            You can Indulge yourself with a liberal treatment at the D2M take a plunge in the arranged collection or treat yourself to some extravagance shopping at Rohtak.  
                        </p>
                        <p align="justify">
                            Extending from supper reservations to individual help for touring, The D2M likewise offers an illustrious recorded lodging visit for visitors remaining in the D2M. 
                        
                            This property likewise has one of the best-evaluated areas in Rohtak. Visitors are more joyful about it contrasted with different properties in the territory.
                           
                            D2M offers you 11 Luxury(Super Deluxe Room) and 2 Executive suits room property has 3 star standards and facilities , 2 Banquets(The Milan & The Palki), 1 Conference Hall, 1 Restaurant (The Maharaja) & Lush Green Lawn & 5500sq. ft.of indoor and outdoor meeting area and exquisite banquet space.
                        </p>
                        </p>
                    </div>
                    <div class="facilities_main_part">
                        <div class="section_title margin-top-80 margin-bottom-35">
                            <h5>Our Room Facilities</h5>
                        </div>
                        <div class="row">
                            <div class="facilities_name clearfix margin-bottom-45">
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                    <ul class="single_facilities_name clearul">
                                        <li>
                                            <img src="{{ asset('img/home-facilities-icon-one.png')}}" alt="">
                                            <p>Breakfast</p>
                                        </li>
                                        <li>
                                            <img src="{{ asset('img/home-facilities-icon-four.png')}}" alt="">
                                            <p>24/7 Hours service</p>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                    <ul class="single_facilities_name clearul">
                                        <li>
                                            <img src="{{ asset('img/home-facilities-icon-two.png')}}" alt="">
                                            <p>Air conditioning</p>
                                        </li>
                                        <li>
                                            <img src="{{ asset('img/gmy.png')}}" alt="">
                                            <p>All Measure Credit Card</p>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                    <ul class="single_facilities_name clearul">
                                        <li>
                                            <img src="{{ asset('img/home-facilities-icon-eight.png')}}" alt="">
                                            <p>Free Parking</p>
                                        </li>
                                        <li>
                                            <img src="{{ asset('img/home-facilities-icon-five.png')}}" alt="">
                                            <p>TV LCD</p>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                    <ul class="single_facilities_name clearul ">
                                        <li>
                                            <img src="{{ asset('img/dry.png')}}" alt="">
                                            <p>Dry-cleaning</p>
                                        </li>
                                        <li>
                                            <img src="{{ asset('img/home-facilities-icon-twelve.png')}}" alt="">
                                            <p>Wi-fi service</p>
                                        </li>
                                    </ul>
                                </div>
                                 
                            </div>
                        </div>
                         
                         
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end our room facilities -->


        <!-- start contact us area -->
        <section class="contact_us_area content-left">
            <div class="container">
                <div class="contact_us clearfix">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="call clearfix">
                            <h6>Call Us</h6>
                            <p>8059 255 777</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="email_us clearfix">
                            <h6>Email us</h6>
                            <p>d2mhotel@gmail.com</p>
                        </div>
                    </div>
                    
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="social_icons clearfix">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end contact us area -->

@endsection