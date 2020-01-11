@extends('front.layout.main')
@section('body')
<!-- start breadcrumb -->
        <section class="breadcrumb_main_area margin-bottom-80" style="background-image:url('{{ asset('img/about-us-breadcrumb.jpg') }}'); background-repeat: no-repeat;">
            <div class="container-fluid">
                <div class="row">
                    <div class="breadcrumb_main nice_title">
                        <h2>Menu</h2>
                        <!-- special offer start -->
                        
                    </div>
                </div>
            </div>            
        </section>
        <!-- end breadcrunb -->

<!-- end breadcrunb -->        
        <!-- start our room facilities -->
        <section class="our_room_facilities_area margin-bottom-80" >
            <div class="container">
                <div class="row">
                <h4 align="center">menu</h4>
                <hr>                    
                    <div class="col-md-4">
                     <img src="{{ asset('img/menu/1.jpg') }}">                    
                    </div><div class="col-md-4">
                     <img src="{{ asset('img/menu/2.jpg') }}">                    
                    </div><div class="col-md-4">
                     <img src="{{asset ('img/menu/3.jpg') }}">                    
                    </div><div class="col-md-4">
                     <img src="{{asset ('img/menu/4.jpg') }}">                    
                    </div><div class="col-md-4">
                     <img src="{{asset ('img/menu/6.jpg') }}">                    
                    </div><div class="col-md-4">
                     <img src="{{ asset('img/menu/7.jpg') }}">                    
                    </div><div class="col-md-4">
                     <img src="{{asset ('img/menu/8.jpg') }}">                    
                    </div><div class="col-md-4">
                     <img src="{{asset ('img/menu/9.jpg') }}">
                     </div><div class="col-md-4">
                     <img src="{{asset ('img/menu/10.jpg') }}">
                      </div><div class="col-md-4">
                     <img src="{{asset ('img/menu/11.jpg') }}"> 
                     </div><div class="col-md-4">
                     <img src="{{asset ('img/menu/12.jpg') }}">
                      </div><div class="col-md-4">
                     <img src="{{asset ('img/menu/13.jpg') }}">
                      </div><div class="col-md-4">
                     <img src="{{asset ('img/menu/14.jpg') }}">
                      </div><div class="col-md-4">
                     <img src="{{asset ('img/menu/15.jpg') }}">
                      </div><div class="col-md-4">
                     <img src="{{asset ('img/menu/16.jpg') }}">
                      </div><div class="col-md-4">
                     <img src="{{asset ('img/menu/17.jpg') }}">
                     </div><div class="col-md-4">
                     <img src="{{asset ('img/menu/18.jpg') }}"></div>
                     <div class="col-md-4">
                     <img src="{{asset ('img/menu/19.jpg') }}">
                    </div>
                 </div>
                </div>
            </div>
        </section>
        <!-- end our room facilities -->
        @endsection