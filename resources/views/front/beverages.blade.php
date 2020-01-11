@extends('front.layout.main')
@section('body')
 
        <!-- start breadcrumb -->

        <section class="breadcrumb_main_area margin-bottom-80" style="background-image:url('{{ asset('img/beverages.jpg')}}'); background-repeat: no-repeat;">
            <div class="container-fluid">
                <div class="row">
                    <div class="breadcrumb_main nice_title">
                        <h2>Foods & Beverages</h2>
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
                                            
                             
                    <img src="{{ asset('img/foods.jpg')}}"  class="thumbnail" style="height: 270px; margin-left: 10px;">
                    <h4>Foods & Beverages</h4>
                     <p align="justify">  
                    We have highly skilled team in our kitchen. Maintaining high standard of quality and keeping it hygiene.</p>
                    <p>We are open 24hrs. This keeps our service round the clock. We have well trained staff to serve you with smile on their faces.</p>
                    <p>We serve INDIAN CRUSINE, AFGANI CRUSINE, CONTINENTIAL CRUSINE, AND CHINESE CRUSINE.</p>
                    <p>Our entire billing is computerised which keeps our accounting up to mark with prompt service. 
                   </p>
                  
                                 
                                
                            
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