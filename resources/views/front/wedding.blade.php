@extends('front.layout.main')
@section('body')
<!-- start breadcrumb -->

        <section class="breadcrumb_main_area margin-bottom-80" style="background-image:url('{{ asset('img/wending-banner.jpg')}}'); background-repeat: no-repeat;">
            <div class="container-fluid">
                <div class="row">
                    <div class="breadcrumb_main nice_title">
                        <h2></h2>
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
                                            
                             
                        <img src="{{ asset('img/wending.jpg')}}"  class="thumbnail" style="height: 270px; margin-left: 10px;">
                        <h4>Wedding functions</h4>
                             <p align="justify">  
                            Weddings at the Milan and the Palki  in Rohtak make an air like the most imperial of the weddings. Starting from flawlessly wedding custom to innovation and solace with style, our banquets are all around arranged to have your heavenly union. For a commonplace Hindu customary yet unpredictable wedding, Milan and Palki Banquets are one of the best wedding scenes in the Rohtak i.e. incomprehensibly prevalent for its effortlessness and polish. A perfectly enhanced and Lush Green Lawn invites you to have your adored one's weddings and gatherings. 
                          </p>
                        <div class="row">

                            <div class="col-md-4" style="margin-top: 20px">
                                <a href='{{ asset('img/gallery/wedding/2.jpg')}}'
                                   class='fresco'
                                   data-fresco-group=' '
                                   data-fresco-caption=" ">
                                   <figure class="uk-overlay uk-overlay-hover">
                                  <img src='{{ asset('img/gallery/wedding/2.jpg')}}' alt=''/>
                                  <div class="uk-overlay-panel uk-overlay-background uk-overlay-icon"></div>
                                  </figure>
                                </a>
                            </div>
                             <div class="col-md-4" style="margin-top: 20px">
                                <a href='{{ asset('img/gallery/wedding/3.jpg')}}'
                                   class='fresco'
                                   data-fresco-group=' '
                                   data-fresco-caption=" ">
                                   <figure class="uk-overlay uk-overlay-hover">
                                  <img src='{{ asset('img/gallery/wedding/3.jpg')}}' alt=''/>
                                  <div class="uk-overlay-panel uk-overlay-background uk-overlay-icon"></div>
                                  </figure>
                                </a>
                            </div>
                                
                            <div class="col-md-4" style="margin-top: 20px">
                                <a href='{{ asset('img/gallery/wedding/4.jpg')}}'
                                   class='fresco'
                                   data-fresco-group=' '
                                   data-fresco-caption=" ">
                                   <figure class="uk-overlay uk-overlay-hover">
                                  <img src='{{ asset('img/gallery/wedding/4.jpg')}}' alt=''/>
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