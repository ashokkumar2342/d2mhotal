@extends('front.layout.main')
@push('styles')
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
@endpush
@section('body')
        <!-- start main slider -->
        <div class="main_slider_area">
            <div class="main_slider" id="slider_rev">
                
                <div class="fullwidthbanner-container" >
                    <div class="fullwidth_home_banner">
                        <ul>                           
                           
                            <li data-transition="random" data-slotamount="7" data-masterspeed="1000">
                                <img src="{{ asset('img/rev-slider/slider-one7.jpg')}}" alt="slide" > 
                            </li>
                            <li data-transition="random" data-slotamount="7" data-masterspeed="1000">
                                <img src="{{ asset('img/rev-slider/slider-one1.jpg')}}" alt="slide" > 
                             
                            </li><li data-transition="random" data-slotamount="7" data-masterspeed="1000">
                                <img src="{{ asset('img/rev-slider/slider-one3.jpg')}}" alt="slide" > 
                            </li><li data-transition="random" data-slotamount="7" data-masterspeed="1000">
                                <img src="{{ asset('img/rev-slider/slider-one4.jpg')}}" alt="slide" > 
                            </li>
                            </li><li data-transition="random" data-slotamount="7" data-masterspeed="1000">
                                <img src="{{ asset('img/rev-slider/slider-one2.jpg')}}" alt="slide" >
                            <li data-transition="random" data-slotamount="7" data-masterspeed="1000">
                                <img src="{{ asset('img/rev-slider/res.jpg')}}" alt="slide" > 
                            </li>
                             <li data-transition="random" data-slotamount="7" data-masterspeed="1000">
                                <img src="{{ asset('img/rev-slider/slider-one.jpg')}}" alt="slide" > 
                            </li>
                            <li data-transition="random" data-slotamount="7" data-masterspeed="1000">
                                <img src="{{ asset('img/rev-slider/wending.jpg')}}" alt="slide" > 
                            </li> 
                             <li data-transition="random" data-slotamount="7" data-masterspeed="1000">
                                <img src="{{ asset('img/rev-slider/slider-one8.jpg')}}" alt="slide" > 
                            </li> 
                             <li data-transition="random" data-slotamount="7" data-masterspeed="1000">
                                <img src="{{ asset('img/rev-slider/slider-one9.jpg')}}" alt="slide" > 
                            </li>
                            <li data-transition="random" data-slotamount="7" data-masterspeed="1000">
                                <img src="{{ asset('img/rev-slider/slider-one10.jpg')}}" alt="slide" > 
                            </li> 
                                <li data-transition="random" data-slotamount="7" data-masterspeed="1000">
                                <img src="img/rev-slider/slider-one6.jpg" alt="slide" > 
                            </li>
                            <li data-transition="random" data-slotamount="7" data-masterspeed="1000">
                                <img src="img/rev-slider/slider-one1.jpg" alt="slide" > 

                            </li><li data-transition="random" data-slotamount="7" data-masterspeed="1000">
                                <img src="img/rev-slider/slider-one3.jpg" alt="slide" > 
                            </li><li data-transition="random" data-slotamount="7" data-masterspeed="1000">
                                <img src="img/rev-slider/slider-one4.jpg" alt="slide" > 
                            </li><li data-transition="random" data-slotamount="7" data-masterspeed="1000">
                                <img src="img/rev-slider/slider-one2.jpg" alt="slide" > 
                            </li>
                            <li data-transition="random" data-slotamount="7" data-masterspeed="1000">
                                <img src="img/rev-slider/res.jpg" alt="slide" > 
                            </li>
                            
                            <li data-transition="random" data-slotamount="7" data-masterspeed="1000">
                                <img src="img/rev-slider/wending.jpg" alt="slide" > 
                            </li> 
                             <li data-transition="random" data-slotamount="7" data-masterspeed="1000">
                                <img src="img/rev-slider/slider-one.jpg" alt="slide" > 
                            </li>  
                             <li data-transition="random" data-slotamount="7" data-masterspeed="1000">
                                <img src="img/rev-slider/slider-one8.jpg" alt="slide" > 
                            </li> 
                            <li data-transition="random" data-slotamount="7" data-masterspeed="1000">
                                <img src="img/rev-slider/slider-one9.jpg" alt="slide" > 
                            </li>
                             <li data-transition="random" data-slotamount="7" data-masterspeed="1000">
                                <img src="img/rev-slider/slider-one10.jpg" alt="slide" > 
                            </li>                              
                        </ul>
                    </div>
                </div>
                <!-- start hotel booking -->
                        <div class="hotel_booking_area">
                            <div class="container">
                                <div class="hotel_booking">
                                    <form role="form" method="get" action="{{ route('front.booking') }}" class="">
                                        <div class="col-lg-2 col-md-2 col-sm-2">
                                            <div class="room_book border-right-dark-1">
                                                <h6>Book Your</h6>
                                                <p>Rooms</p>
                                            </div>
                                        </div>
                                        <div class="form-group col-lg-2 col-md-2 col-sm-2">
                                            <div class="input-group border-bottom-dark-2">
                                                <input name="arrival" class="date-picker" id="datepicker" placeholder="Arrival" type="text"/>
                                                <div class="input-group-addon"><i class="fa fa-calendar"></i></div>               
                                            </div>
                                        </div>
                                        <div class="form-group col-lg-2 col-md-2 col-sm-2">
                                            <div class="input-group border-bottom-dark-2">
                                                <input name="departure" class="date-picker" id="datepicker1" placeholder="Departure" type="text"/>
                                                <div class="input-group-addon"><i class="fa fa-calendar"></i></div>                
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6">
                                            <div class="row">
                                                <div class="form-group col-lg-3 col-md-3 col-sm-3 icon_arrow">
                                                    <div class="input-group border-bottom-dark-2">
                                                        <select class="form-control" name="room" >
                                                          <option value="1">1 Room</option>
                                                          <option value="2">2 Room</option>
                                                          <option value="3">3 Room</option>
                                                        </select>               
                                                    </div>
                                                </div>
                                                <div class="form-group col-lg-3 col-md-3 col-sm-3 icon_arrow">
                                                    <div class="input-group border-bottom-dark-2">
                                                        <select class="form-control" name="adult">     
                                                          <option value="1">1 Adult</option>
                                                          <option value="2">2 Adult</option>
                                                          <option value="3">3 Adult</option>
                                                        </select>               
                                                    </div>
                                                </div>
                                              
                                                <div class="col-lg-3 col-md-3 col-sm-3">
                                                    <button class="btn btn-warning btn-md floatright" type="submit">Book</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- end hotel booking -->

            </div>
        </div>
        <!-- end main slider -->

        
        <!-- start welcome section -->
        <section class="welcome_area">  
            <div class="container">
                    <div class="welcome">
                        <div class="section_title nice_title content-center">
                            <h3>Welcome To  <span> <img src="img/text.png"></h3>
                        </div>
                        <div class="section_description">
                            <p> Friendliness, immaculate administrations are offered at D2M in Rohtak. Entertain yourself with the extravagance and comfort offered at The D2M, Rohtak. </p>
                        </div>
                        <div class="row">
                            <div class="col-lg-3 col-md-3 col-sm-3">
                                <div class="single_room_wrapper clearfix">
                                    <figure class="uk-overlay uk-overlay-hover">
                                        <div class="room_media">
                                            <a href="#"><img src="{{ asset('img/room-2.jpg')}}" alt=""></a>
                                        </div>
                                        <div class="room_title border-bottom-whitesmoke clearfix">
                                                <div class="left_room_title floatleft">
                                                    <h6>Executive Suite Single Room</h6>
                                                    <p>Rs: 2799/ <span>night + taxes</span><span class="floatright"><a href="#" class="btn">Book</a></span></p>

                                                </div>
                                                {{-- <div class="left_room_title floatright">
                                                    <a href="#" class="btn">Book</a>
                                                </div> --}}
                                            </div>
                                        <div class="uk-overlay-panel uk-overlay-background single_wrapper_details clearfix animated bounceInDown">
                                            <div class="border-dark-1 clearfix single_wrapper_details_pad" style="padding: 15px;">
                                                <h5>Executive Suite Single Room</h5>
                                                <p>
                                                    The rambling D2M houses 11 luxury rooms and 2 Executive Suite Room property have 3 star hotel standards and facilities.
                                                </p>
                                                <div class="single_room_cost clearfix">
                                                    <div class="floatleft">
                                                        <p>Rs: 2799/ <span>night + taxes</span></p>
                                                    </div>
                                                    <div class="floatright">
                                                        <a href="#" class="btn">Book</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </figure>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3">
                                <div class="single_room_wrapper clearfix">
                                    <figure class="uk-overlay uk-overlay-hover">
                                        <div class="room_media">
                                            <a href="#"><img src="{{ asset('img/room-3.jpg')}}" alt=""></a>
                                        </div>
                                        <div class="room_title border-bottom-whitesmoke clearfix">
                                               
                                             <div class="left_room_title floatleft">
                                                 <h6>Executive Suite Double</h6>
                                                    <span>Room</span>
                                                </div>
                                               <div class="single_room_cost clearfix">
                                                    <div class="floatleft">
                                                        <p>Rs: 3099/ <span>night + taxes</span></p>
                                                    </div>
                                                    <div class="floatright">
                                                        <a href="#" class="btn">Book</a>
                                                    </div>
                                                </div>
                                            </div>
                                        <div class="uk-overlay-panel uk-overlay-background single_wrapper_details clearfix animated bounceInUp">
                                            <div class="border-dark-1   clearfix single_wrapper_details_pad" style="padding: 10px;">
                                                <h5>Executive Suite Double Room</h5>
                                                <p>
                                                   The rambling D2M houses 11 luxury rooms and 2 Executive Suite Room property have 3 star hotel standards and ties.                                                </p>
                                                <div class="single_room_cost clearfix">
                                                    <div class="floatleft">

                                                        <p>Rs: 3099/ <span>night + taxes</span></p>
                                                    </div>
                                                    <div class="floatright">
                                                        <a href="#" class="btn">Book</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </figure>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3">
                                <div class="single_room_wrapper clearfix">
                                    <figure class="uk-overlay uk-overlay-hover">
                                        <div class="room_media">
                                            <a href="#"><img src="{{ asset('img/room-image-five.png')}}" alt=""></a>
                                        </div>
                                        <div class="room_title border-bottom-whitesmoke clearfix">
                                                <div class="left_room_title floatleft">
                                                      <h6>Super  Deluxe Single Room</h6>
                                                     
                                                    <p>Rs: 1999/ <span>night + taxes</span></span><span class="floatright"><a href="#" class="btn">Book</a></span></p>
                                                </div>
                                                {{-- <div class="left_room_title floatright">
                                                    <a href="#" class="btn">Book</a>
                                                </div> --}}
                                            </div>
                                        <div class="uk-overlay-panel uk-overlay-background single_wrapper_details clearfix animated bounceInDown">
                                            <div class="border-dark-1   clearfix single_wrapper_details_pad" style="padding: 10px;">
                                                <h5>Super  Deluxe Single Room</h5>
                                                <p>
                                                 D2M offers you 11 Luxury(Super  Deluxe Room) property has 3 star standards and facilities , 2 Banquets(The Milan & The Palki).
                                                </p>
                                                <div class="single_room_cost clearfix">
                                                    <div class="floatleft">
                                                        <p>Rs: 1999/ <span>night + taxes</span></p>
                                                    </div>
                                                    <div class="floatright">
                                                        <a href="#" class="btn">Book</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </figure>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3">
                                <div class="single_room_wrapper clearfix">
                                    <figure class="uk-overlay uk-overlay-hover">
                                        <div class="room_media">
                                            <a href="#"><img src="{{ asset('img/room-4.jpg')}}" alt=""></a>
                                        </div>
                                        <div class="room_title border-bottom-whitesmoke clearfix">
                                            <div class="left_room_title floatleft">
                                                 <h6>Super  Deluxe Double</h6>
                                                    <span>Room</span>
                                                </div>
                                               <div class="single_room_cost clearfix">
                                                    <div class="floatleft">
                                                        <p>Rs: 2299/ <span>night + taxes</span></p>
                                                    </div>
                                                    <div class="floatright">
                                                        <a href="#" class="btn">Book</a>
                                                    </div>
                                                </div>
                                            </div>
                                        <div class="uk-overlay-panel uk-overlay-background single_wrapper_details clearfix animated bounceInUp">
                                            <div class="border-dark-1  clearfix single_wrapper_details_pad" style="padding: 10px;">
                                               <h5>Super  Deluxe Double Room</h5>
                                                <p>
                                                 D2M offers you 11 Luxury(Super  Deluxe Double Room) property has 3 star standards and facilities , 2 Banquets(The Milan & The Palki).
                                                </p>
                                                <div class="single_room_cost clearfix">
                                                    <div class="floatleft">
                                                        <p>Rs: 2299/ <span>night + taxes</span></p>
                                                    </div>
                                                    <div class="floatright">
                                                        <a href="#" class="btn">Book</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </section>
        <!-- end welcome section -->
        
        <!-- start Hotel Facilities section -->
        <section class="hotel_facilities_area margin-top-115 " style="background: url({{asset ('img/hotel-facilities-bg.jpg') }}) no-repeat fixed 0 0;
            background-size: cover;
            background-position: fixed;">
            <div class="container">
                <div class="hotel_facilities">
                    <div class="section_title nice_title content-center">
                        <h3>Hotel facilties</h3>
                    </div>
                    <div class="hotel_facilities_content">
                        <div role="tabpanel">

                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="active">
                                    <a href="#restaurant" aria-controls="restaurant" role="tab" data-toggle="tab"><img src="{{ asset('img/home-facilities-icon-eleven.png')}}" alt="restaurant"><span>restaurant</span></a>
                                </li>
                               
                                
                                <li role="presentation">
                                    <a href="#bar" aria-controls="bar" role="tab" data-toggle="tab"><img src="{{ asset('img/banquet.png')}}" alt="bar"><span>Banquets</span></a>
                                </li>
                                <li role="presentation">
                                    <a href="#gym" aria-controls="gym" role="tab" data-toggle="tab"><img src="{{ asset('img/confrence.png')}}" alt="confrence"><span>Conference</span></a>
                                </li>
                                <li role="presentation">
                                    <a href="#pick-up" aria-controls="pick-up" role="tab" data-toggle="tab"><img src="{{ asset('img/home-facilities-icon-eight.png')}}" alt="sports-club"><span>Parking</span></a>
                                </li>
                                 <li role="presentation">
                                    <a href="#sports-club" aria-controls="sports-club" role="tab" data-toggle="tab"><img src="{{ asset('img/home-facilities-icon-seven.png')}}" alt="sports-club"><span>wifi</span></a>
                                </li>
                            </ul>                           

                          
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active" id="restaurant">
                                    <div class="single-tab-content">
                                        <div class="row">
                                            <div class="co-lg-5 col-md-5 col-sm-6">
                                                <div class="single-tab-image">
                                                    <a href="#"><img src="{{ asset('img/hotel-facility-one.jpg')}}" alt=""></a>
                                                </div>
                                            </div>
                                            <div class="co-lg-7 col-md-7 col-sm-6">
                                                <div class="single-tab-details">
                                                    <h3>Restaurant </h3>
                                                    <p>
                                                        Visitors searching for an extravagance restaurant in Rohtak can pick the Maharaja throughout the day global fine feasting space. The Restaurant is the richly outfitted. 
                                                        </p><p>The buffet, Maharaja is in position to allure your savor blossom through its delightful Continental, Chinese and Indian cooking.
                                                    </p>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                               
                                <div role="tabpanel" class="tab-pane" id="pick-up">
                                    <div class="single-tab-content">
                                        <div class="row">
                                            <div class="co-lg-5 col-md-5">
                                                <div class="single-tab-image">
                                                    <a href="#"><img src="{{ asset('img/parking.jpg')}}" alt=""></a>
                                                </div>
                                            </div>
                                            <div class="co-lg-7 col-md-7">
                                                <div class="single-tab-details">
                                                    
                                                     <h3>Parking</h3>
                                                    <p>Parking control is primarily an issue in densely populated cities . where the great demand for parking spaces makes them expensive and difficult. D2m is developing a system called Parking Spotter which allows vehicles to upload parking spot information into the cloud for other drivers to access.</p>
                                                    <p>We provide secure parking space for 30-40 cars at our hotel and it is free for our guests. There is saved parking spot for visitors accommodation, particularly  intended for persons approaching for weekend stay. There is a well  queue system at the parking place.</p>
                                                    
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="bar">
                                    <div class="single-tab-content">
                                        <div class="row">
                                            <div class="co-lg-5 col-md-5">
                                                <div class="single-tab-image">
                                                    <a href="#"><img src="{{ asset('img/hotel-facility-three.jpg')}}" alt=""></a>
                                                </div>
                                            </div>
                                            <div class="co-lg-7 col-md-7">
                                                <div class="single-tab-details">                                                     
                                                    <h3>Banquet</h3>
                                                    <p>The Milan and The Palki intended to make your most unique day into an euphoric event. From customized welcomes that will enchant your visitors to excitement options.Hosting an occasion with visitors originating from everywhere throughout the city, welcome them to one of finest dinner lobbies in D2M , Rohtak. These Banquet is a breathtaking setting, which is famous.
                                                    </p>
                                                     
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                 <div role="tabpanel" class="tab-pane" id="sports-club">
                                    <div class="single-tab-content">
                                        <div class="row">
                                            <div class="co-lg-5 col-md-5">
                                                <div class="single-tab-image">
                                                    <a href="#"><img src="{{ asset('img/wifi.jpg')}}" alt=""></a>
                                                </div>
                                            </div>
                                            <div class="co-lg-7 col-md-7">
                                                <div class="single-tab-details">
                                                   
                                                    <h3>Wi-Fi</h3>
                                                    <p>
                                                       D2M is equipped with the latest equipment encompassing the best of technology to assist you in all your commercial endeavorswe have Wi-Fi for reliable connectivity wherever you go.D2M lobbies are equipped with a multitude of outlets, connectivity ports, and free Wi-Fi so that you can plug in and log on whenever you need to.Big-screens where you want video conference facilities.


                                                    </p>
                                                    <p>
                                                       Technology to make your meetings seamless. The exceptional execution you demand.
                                                    </p>
                                                     
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="gym">
                                    <div class="single-tab-content">
                                        <div class="row">
                                            <div class="co-lg-5 col-md-5">
                                                <div class="single-tab-image">
                                                    <a href="#"><img src="{{ asset('img/meeting.jpg')}}" alt=""></a>
                                                </div>
                                            </div>
                                            <div class="co-lg-7 col-md-7">
                                                <div class="single-tab-details">
                                                     
                                                    <h3>Conference Hall</h3>
                                                    <p>
                                                         A  Conference Hall or Conference room is Specially accommodated rooms for  particular occasions. For example, business gatherings and gatherings. Ordinarily, the lobby gives furniture, overhead projectors arrange lighting, and a sound framework. Smoking is ordinarily restricted in meeting lobbies. 
                                                    </p>
                                                    <p>
                                                       The Conference Hall accompanies an individual verandah too a garden for your meeting. The Conference Hall is an extensive room that can without much of a stretch oblige visitors. Outfitted with the most recent advances and a productive staff, Conference Hall makes for a perfect gathering setting in this lodging.
                                                    </p>
                                                     
                                                </div>
                                            </div>
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
        <section class="about_us_area margin-bottom-100 padding-top-50" style="background-color: #eee;">

            <div class="container">
                <div style="padding-bottom: 50px;">
                 <h3 align="center">Video </h3> 
                 <hr>
                    
                </div>
                <div class="row">
                    <div class="col-md-4">
                       <iframe src="https://www.facebook.com/plugins/video.php?href=https%3A%2F%2Fwww.facebook.com%2FD2mHotelRestaurant%2Fvideos%2F1196946740404982%2F&show_text=0&width=560" width="100%" height="250" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allowFullScreen="true"></iframe> 
                    </div>
                    <div class="col-md-4">
                      <iframe src="https://www.facebook.com/plugins/video.php?href=https%3A%2F%2Fwww.facebook.com%2FD2mHotelRestaurant%2Fvideos%2F804336606332666%2F&show_text=0&width=560" width="100%" height="250" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allowFullScreen="true"></iframe>
                    </div>
                    <div class="col-md-4">
                      <iframe src="https://www.facebook.com/plugins/video.php?href=https%3A%2F%2Fwww.facebook.com%2FD2mHotelRestaurant%2Fvideos%2F877241885708804%2F&show_text=0&width=560" width="100%" height="250" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allowFullScreen="true"></iframe>
                    </div>
                </div>
            </div>
         </section>
         <section class="about_us_area margin-bottom-100">

            <div class="container">
                <div style="padding-bottom: 50px;">
                 <h3 align="center">View 360<sup>0</sup> </h3> 
                 <hr>
                    
                </div>
                <div class="row">
                    <div class="col-md-4">
                       <iframe src="https://www.google.com/maps/embed?pb=!1m0!3m2!1sen!2sin!4v1496316664211!6m8!1m7!1seA4od4OBDxkAAAQvOhJy2g!2m2!1d28.90083719568211!2d76.60450881137842!3f18!4f0!5f0.7820865974627469" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe> 
                    </div>
                    <div class="col-md-4">
                      <iframe src="https://www.google.com/maps/embed?pb=!1m0!3m2!1sen!2sin!4v1496317360755!6m8!1m7!1sXTHcbqoWWLAAAAQvOhVrXA!2m2!1d28.90083676266651!2d76.60450881744111!3f3.4001990767517327!4f-11.105881969055872!5f0.7820865974627469" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe> 
                    </div>
                    <div class="col-md-4">
                      <iframe src="https://www.google.com/maps/embed?pb=!1m0!3m2!1sen!2sin!4v1496317463434!6m8!1m7!1sIiglUln6B2UAAAQvOhawgg!2m2!1d28.90083731280583!2d76.604508949295!3f9.82734992114036!4f-19.370090230272453!5f0.7820865974627469" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe> 
                    </div>
                </div>
            </div>
         </section>

        <!-- start About Us section -->
        <section class="about_us_area margin-bottom-128">
            <div class="container">
                <div class="about_us clearfix">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 padding-left-0">
                        <div class="news">
                            <div class="section_title margin-bottom-50">
                                <h5>News</h5>
                            </div>
                            <div class="section_description">
                                <div class="row">
                                    <div class="col-md-12 thumbnail padding-left-10">
                                        <marquee direction="up" scrollamount="3" onmouseover="this.stop();" onmouseout="this.start();" style="height: 300px;">
                                            @foreach(App\News::all() as $new)
                                                <p align="justify"><i class="fa fa-arrow-circle-right" aria-hidden="true"></i> {!! $new->news !!} </p>
                                            @endforeach 
                                        </marquee>     
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="showcase">
                            <div class="section_title margin-bottom-50">
                                <h5>Hotel Showcase</h5>
                            </div>
                            <div class="section_description">
                                <div class="clearfix demo" style="">
                                    <ul id="vertical" class="gallery list-unstyled">
                                        <li data-thumb="img/lightslider-img/cS-18.jpg">
                                            <img alt="slider" src="{{ asset('img/lightslider-img/cS-18.jpg')}}" />
                                        </li>
                                        <li data-thumb="img/lightslider-img/cS-21.jpg"> 
                                            <img alt="slider" src="{{ asset('img/lightslider-img/cS-21.jpg')}}" />
                                        </li>
                                        <li data-thumb="img/lightslider-img/cS-22.jpg"> 
                                            <img alt="slider" src="{{ asset('img/lightslider-img/cS-22.jpg')}}" />
                                        </li>
                                        <li data-thumb="img/lightslider-img/cS-23.jpg"> 
                                            <img alt="slider" src="{{ asset('img/lightslider-img/cS-23.jpg')}}" />
                                        </li>
                                        <li data-thumb="img/lightslider-img/cS-24.jpg"> 
                                            <img alt="slider" src="{{ asset('img/lightslider-img/cS-24.jpg')}}" />
                                        </li>
                                        <li data-thumb="img/lightslider-img/cS-25.jpg"> 
                                            <img alt="slider" src="{{ asset('img/lightslider-img/cS-25.jpg')}}" />
                                        </li>
                                        <li data-thumb="img/lightslider-img/cS-26.jpg"> 
                                            <img alt="slider" src="{{ asset('img/lightslider-img/cS-26.jpg')}}" />
                                        </li>
                                        
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <div class="customer_says">
                            <div class="section_title margin-bottom-50">
                                <h5>Customer Says</h5>
                            </div>
                            <div class="section_description">
                                <div id="customer_says_slider" class="carousel slide" data-ride="carousel" data-pause="none">
                                    <!-- Wrapper for slides -->
                                    <div class="carousel-inner" role="listbox">
                                        <div class="item active">
                                            <div class="single_says">
                                                <div class="customer_comment">
                                                    <p>
                                                        Great ambience and amazing service.You will feel like royalty here.Superb, obliging staff,         excellent food and gorgeous interiors.
                                                    </p>
                                                </div>
                                                <div class="customer_detail clearfix">
                                                    <div class="customer_pic alignleft-20">
                                                        <a href="#"><img src="{{ asset('img/irfan.png')}}" alt=""></a>
                                                    </div>
                                                    <div class="customer_identity floatleft">
                                                        <h6>IRFAN PATHAN</h6>
                                                         
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="single_says">
                                                <div class="customer_comment">
                                                    <p >
                                                        Staff go out of their way to help with everything and 'no' is  never an answer to a request. Hospitality and luxury at it's best.
                                                    </p>
                                                </div>
                                                <div class="customer_detail clearfix">
                                                    <div class="customer_pic alignleft-20">
                                                        <a href="#"><img src="{{ asset('img/dinesh.png')}}" alt=""></a>
                                                    </div>
                                                    <div class="customer_identity floatleft">
                                                        <h6>DINESH KARTIK</h6>
                                                         
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="single_says">
                                                <div class="customer_comment">
                                                    <p  >Wonderful stay,  Comfortable and warm, Excellent service ,Polite and friendly staff, Great Place to be in , Courteous Staff , Friendly atmosphere.
                                                    </p>
                                                </div>
                                                <div class="customer_detail clearfix">
                                                    <div class="customer_pic alignleft-20">
                                                        <a href="#"><img src="{{ asset('img/balaji.png')}}" alt=""></a>
                                                    </div>
                                                    <div class="customer_identity floatleft">
                                                        <h6>BALA JI</h6>
                                                         
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                         
                                        <div class="item">
                                            <div class="single_says">
                                                <div class="customer_comment">
                                                    <p  >
                                                        Lovely architecture. Brilliant food. Once in a lifetime visit. Don't miss it.Words are insufficient to praise this hotel .It is a wowww hotel....just loved the soft spoken staff.
                                                    </p>
                                                </div>
                                                <div class="customer_detail clearfix">
                                                    <div class="customer_pic alignleft-20">
                                                        <a href="#"><img src="{{ asset('img/gurkit.png')}}" alt=""></a>
                                                    </div>
                                                    <div class="customer_identity floatleft">
                                                        <h6>GURKIRAT SINGH</h6>
                                                         
                                                    </div>
                                                </div>
                                            </div>
                                         

                                    </div>
                                    <!-- Controls -->
                                    <a class="slider_says left" href="#customer_says_slider" role="button" data-slide="prev">
                                        <i class="fa fa-angle-left"></i>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="slider_says right" href="#customer_says_slider" role="button" data-slide="next">
                                        <i class="fa fa-angle-right"></i>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end About Us section -->
        
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
                            <p> d2mhotel@gmail.com</p>
                        </div>
                    </div>
                    
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="social_icons clearfix">
                            <ul>
                                <li><a href="https://www.facebook.com/D2mHotelRestaurant/"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end contact us area -->
        
@endsection
@push('scripts')


<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
@if(Session::has('message'))
<script type="text/javascript">
    Command: toastr["{{ Session::get('class') }}"]("{{ Session::get('message') }}");
</script>
@endif
@endpush

