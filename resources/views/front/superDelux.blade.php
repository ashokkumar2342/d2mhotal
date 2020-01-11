@extends('front.layout.main')
@section('body_id')
accomodation_page
@endsection
@section('body')
 <!-- start breadcrumb -->
        <section class="breadcrumb_main_area margin-bottom-80" style="background-image:url('{{ asset('img/about-us-breadcrumb.jpg')}}'); background-repeat: no-repeat;">
            <div class="container-fluid">
                <div class="row">
                    <div class="breadcrumb_main nice_title">
                        <h2>Super Deluxe Room</h2>
                        <!-- special offer start -->
                         
                    </div>
                </div>
            </div>            
        </section>
        <!-- end breadcrunb -->
        
        
        <!-- start Hotel Facilities section -->
        <section class="select_room_area padding-top-5 margin-bottom-90">
            <div class="container">
                <div class="row">
                    <div class="select_room clearfix">
                        <div class="section_title nice_title text-center">
                            <h3>Super Deluxe Room </h3>
                        </div>
                        <div class="select_room_content clearfix">
                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                <div class="room_thumb">
                                    <a href="#"><img src="{{ asset('img/room-thumb-one.jpg')}}" alt=""></a>
                                    <div class="room_details" style="background: rgb(255, 214, 88) none repeat scroll 0 0;
                                             
                                             
                                            padding: 50px;
                                            margin-top:  20px;

                                            ">
                                        <div class="about_room floatleft" >
                                            <div class="room_quality floatleft"> 
                                                <h5 >Super Deluxe Room (Twine Bad )</h5>
                                            </div>
                                            <div class="room_rent floatleft">
                                                <p>Rs: 2299<span> / night + taxes</span></p>
                                            </div>
                                        </div>
                                        <div class="room_block floatright">
                                            <a href="#" class="btn btn-black">Book</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-sx-12">
                                <div class="room_thumb small_room_thumb margin-bottom-35">
                                    <a href="#"><img src="{{ asset('img/room-thumb-two.jpg')}}" alt=""></a>
                                    
                                </div>
                                <div class="room_thumb small_room_thumb">
                                    <a href="#"><img src="{{ asset('img/sup-s.jpg')}}" alt=""></a>
                                    <div class="room_details"  style="background: rgb(255, 214, 88) none repeat scroll 0 0;
                                            padding: 50px;
                                            margin-top:  20px;

                                            
                                            ">
                                        <div class="about_room floatleft">
                                            
                                                <h6><b>Super Deluxe Room</b></h6>
                                             
                                            <div class="room_rent floatleft">
                                                <p>Rs: 1999<span> / night + taxes</span></p>
                                                 
                                            </div>
                                        </div>
                                        <div class="room_block floatright">
                                            <a href="#" class="btn btn-black">Book</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end Hotel Facilities section -->

        <!-- start our room facilities -->
        <section class="our_room_facilities_area">
            <div class="container">
                <div class="our_room_facilities margin-bottom-70">
                    <div class="facilities_top_para">
                    <h4>Super Deluxe Room </h4>
                        <p align="justify">
                             
                              
                        </p>
                        <p align="justify">
                            Extending from supper reservations to individual help for touring, The D2M likewise offers an illustrious recorded lodging visit for visitors remaining in the D2M. 
                        
                            This property likewise has one of the best-evaluated areas in Rohtak. Visitors are more joyful about it contrasted with different properties in the territory.
                           
                            D2M offers you 11 Luxury(Super Dulex Room) and 2 Executive suits room property has 3 star standards and facilities , 2 Banquets(The Milan & The Palki), 1 Conference Hall, 1 Restaurant (The Maharaja) & Lush Green Lawn & 5500sq. ft.of indoor and outdoor meeting area and exquisite banquet space.
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