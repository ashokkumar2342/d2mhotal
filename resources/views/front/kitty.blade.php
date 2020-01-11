@extends('front.layout.main')
@section('body')
 <!-- start breadcrumb -->

        <section class="breadcrumb_main_area margin-bottom-80" style="background-image:url('{{ asset('img/meet-banner.jpg')}}'); background-repeat: no-repeat;">
            <div class="container-fluid">
                <div class="row">
                    <div class="breadcrumb_main nice_title">
                        <h2>Kitty Party</h2>
                        <!-- special offer start -->
                        
                    </div>
                </div>
            </div>            
        </section>
        <!-- end breadcrunb -->
        
        <!-- start our room facilities -->
        <section class="our_room_facilities_area">
            <div class="container">
                <div class="row">
                    <div class="col-md-9">
                                            
                             
                    <img src="{{ asset('img/kk.jpg')}}"  class="thumbnail" style="height: 270px; margin-left: 10px;">
                    <h4>Kitty Party</h4>
                     <p align="justify">  
                    The respect of your nearness is incredibly asked for over the kitty party festivities. Come and appreciate the re union with your  friends. We anticipate have you so we can appreciate all through. 
                   </p>
                   <p>It is an ideal opportunity to shake it up with supper, move and fun. Give us a chance to restore the lost time. We anticipate have incredible time with you. Generously make nearness, till the night with your benevolent nearness.</p>
                                 
                                
                            
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