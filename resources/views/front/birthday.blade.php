@extends('front.layout.main')
@section('body')
   
        <!-- start breadcrumb -->

        <section class="breadcrumb_main_area margin-bottom-80" style="background-image:url('{{ asset('img/birthday-banner.jpg')}}'); background-repeat: no-repeat;">
            <div class="container-fluid">
                <div class="row">
                    <div class="breadcrumb_main nice_title">
                        <h2>Birthday Celebration</h2>
                        <!-- special offer start -->
                         
                    </div>
                </div>
            </div>            
        </section>
        <!-- end breadcrunb -->
        
        <!-- start our room facilities -->
        <section class="our_room_facilities_area margin-bottom-80">
            <div class="container">
                <div class="row">
                    <div class="col-md-9">
                                            
                             
                    <img src="{{ asset('img/kitty.jpg')}}"  class="thumbnail" style="height: 270px; margin-left: 10px;">
                    <h4>Birthday Celebration</h4>
                    <p align="justify">  
                    Light four candles on your unique day: one for bliss, one for peace, one for success and one for good fortunes. May you generally be upbeat and sound. Happy birthday I trust you have an amazing and a grand day. 
                    </p>
                    <p>We wish you one more year of awesome open doors, accomplishments and self-improvement. Value your vision and your fantasies as they are the offspring of your spirit, the outlines of your definitive achievements. Be Calm and make your birthday party at D2M Hotel.</p>
                            <div class="row">
                                <div class="col-md-4" style="margin-top: 20px">
                                    <a href='{{ asset('img/gallery/birthday/1.jpg')}}'
                                       class='fresco'
                                       data-fresco-group=' '
                                       data-fresco-caption=" ">
                                       <figure class="uk-overlay uk-overlay-hover">
                                      <img src='{{ asset('img/gallery/birthday/1.jpg')}}' alt=''/>
                                      <div class="uk-overlay-panel uk-overlay-background uk-overlay-icon"></div>
                                      </figure>
                                    </a>
                                </div>
                                <div class="col-md-4" style="margin-top: 20px">
                                    <a href='{{ asset('img/gallery/birthday/1.jpg')}}'
                                       class='fresco'
                                       data-fresco-group=' '
                                       data-fresco-caption=" ">
                                       <figure class="uk-overlay uk-overlay-hover">
                                      <img src='{{ asset('img/gallery/birthday/1.jpg')}}' alt=''/>
                                      <div class="uk-overlay-panel uk-overlay-background uk-overlay-icon"></div>
                                      </figure>
                                    </a>
                                </div>
                                <div class="col-md-4" style="margin-top: 20px">
                                    <a href='{{ asset('img/gallery/birthday/2.jpg')}}'
                                       class='fresco'
                                       data-fresco-group=' '
                                       data-fresco-caption=" ">
                                       <figure class="uk-overlay uk-overlay-hover">
                                      <img src='{{ asset('img/gallery/birthday/2.jpg')}}' alt=''/>
                                      <div class="uk-overlay-panel uk-overlay-background uk-overlay-icon"></div>
                                      </figure>
                                    </a>
                                </div>
                                <div class="col-md-4" style="margin-top: 20px">
                                    <a href='{{ asset('img/gallery/birthday/3.jpg')}}'
                                       class='fresco'
                                       data-fresco-group=' '
                                       data-fresco-caption=" ">
                                       <figure class="uk-overlay uk-overlay-hover">
                                      <img src='{{ asset('img/gallery/birthday/3.jpg')}}' alt=''/>
                                      <div class="uk-overlay-panel uk-overlay-background uk-overlay-icon"></div>
                                      </figure>
                                    </a>
                                </div>
                                <div class="col-md-4" style="margin-top: 20px">
                                    <a href='{{ asset('img/gallery/birthday/4.jpg')}}'
                                       class='fresco'
                                       data-fresco-group=' '
                                       data-fresco-caption=" ">
                                       <figure class="uk-overlay uk-overlay-hover">
                                      <img src='{{ asset('img/gallery/birthday/4.jpg')}}' alt=''/>
                                      <div class="uk-overlay-panel uk-overlay-background uk-overlay-icon"></div>
                                      </figure>
                                    </a>
                                </div>
                                <div class="col-md-4" style="margin-top: 20px">
                                    <a href='{{ asset('img/gallery/birthday/5.jpg')}}'
                                       class='fresco'
                                       data-fresco-group=' '
                                       data-fresco-caption=" ">
                                       <figure class="uk-overlay uk-overlay-hover">
                                      <img src='{{ asset('img/gallery/birthday/5.jpg')}}' alt=''/>
                                      <div class="uk-overlay-panel uk-overlay-background uk-overlay-icon"></div>
                                      </figure>
                                    </a>
                                </div>
                                <div class="col-md-4" style="margin-top: 20px">
                                    <a href='{{ asset('img/gallery/birthday/6.jpg')}}'
                                       class='fresco'
                                       data-fresco-group=' '
                                       data-fresco-caption=" ">
                                       <figure class="uk-overlay uk-overlay-hover">
                                      <img src='{{ asset('img/gallery/birthday/6.jpg')}}' alt=''/>
                                      <div class="uk-overlay-panel uk-overlay-background uk-overlay-icon"></div>
                                      </figure>
                                    </a>
                                </div>
                                <div class="col-md-4" style="margin-top: 20px">
                                    <a href='{{ asset('img/gallery/birthday/7.jpg')}}'
                                       class='fresco'
                                       data-fresco-group=' '
                                       data-fresco-caption=" ">
                                       <figure class="uk-overlay uk-overlay-hover">
                                      <img src='{{ asset('img/gallery/birthday/9.jpg')}}' alt=''/>
                                      <div class="uk-overlay-panel uk-overlay-background uk-overlay-icon"></div>
                                      </figure>
                                    </a>
                                </div>
                                <div class="col-md-4" style="margin-top: 20px">
                                    <a href='{{ asset('img/gallery/birthday/8.jpg')}}'
                                       class='fresco'
                                       data-fresco-group=' '
                                       data-fresco-caption=" ">
                                       <figure class="uk-overlay uk-overlay-hover">
                                      <img src='{{ asset('img/gallery/birthday/10.jpg')}}' alt=''/>
                                      <div class="uk-overlay-panel uk-overlay-background uk-overlay-icon"></div>
                                      </figure>
                                    </a>
                                </div>


                          </div>
                     </div>
                    <div class="col-md-3">
                        @include('front.include.quicklinks')
                    </div>


                 </div>
                 
                
                    
                 
                </div>
            </div>
        </section>
        <!-- end our room facilities -->

@endsection