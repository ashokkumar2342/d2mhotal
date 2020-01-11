@extends('front.layout.main')
@section('body')
 
        <!-- start breadcrumb -->

        <section class="breadcrumb_main_area margin-bottom-80" style="background-image:url('{{ asset('img/wending-banner.jpg') }}'); background-repeat: no-repeat;">
            <div class="container-fluid">
                <div class="row">
                    <div class="breadcrumb_main nice_title">
                        <h2>Anniversary Celebrations</h2>
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
                                            
                             
                   
                    <h4>Anniversary Celebration</h4>
                     <p align="justify">  
                     Review the yesterdays, reexamine the tomorrows and remember your today. Fill your today with upbeat recollections of the past and brilliant trusts in the future. Its time to praise your adoration and years of harmony. Remain favor and remain constantly glad.  
                    </p>
                    <p>A wedding commemoration is the festival of adoration, trust, association, resistance and tirelessness. The request shifts for any given year. There is not any more flawless, neighborly and beguiling relationship, fellowship or organization than a decent marriage. Come and enjoy your special day at D2M Hotel.</p>
                     <div class="row">
                                
                        <div class="col-md-4" style="margin-top: 20px">
                            <a href='{{ asset('img/gallery/Anniversary/1.jpg')}}'
                               class='fresco'
                               data-fresco-group=' '
                               data-fresco-caption=" ">
                               <figure class="uk-overlay uk-overlay-hover">
                              <img src='{{ asset('img/gallery/Anniversary/1.jpg')}}' alt=''/>
                              <div class="uk-overlay-panel uk-overlay-background uk-overlay-icon"></div>
                              </figure>
                            </a>
                        </div>
                        <div class="col-md-4" style="margin-top: 20px">
                            <a href='{{ asset('img/gallery/Anniversary/2.jpg')}}'
                               class='fresco'
                               data-fresco-group=' '
                               data-fresco-caption=" ">
                               <figure class="uk-overlay uk-overlay-hover">
                              <img src='{{ asset('img/gallery/Anniversary/2.jpg')}}' alt=''/>
                              <div class="uk-overlay-panel uk-overlay-background uk-overlay-icon"></div>
                              </figure>
                            </a>
                        </div>
                        <div class="col-md-4" style="margin-top: 20px">
                            <a href='{{ asset('img/gallery/Anniversary/3.jpg')}}'
                               class='fresco'
                               data-fresco-group=' '
                               data-fresco-caption=" ">
                               <figure class="uk-overlay uk-overlay-hover">
                              <img src='{{ asset('img/gallery/Anniversary/3.jpg')}}' alt=''/>
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