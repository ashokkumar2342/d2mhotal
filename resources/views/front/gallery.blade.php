@extends('front.layout.main')
@section('body')
    <!-- start breadcrumb -->
        <section class="breadcrumb_main_area margin-bottom-80" style="background-image:url('{{ asset('img/about-us-breadcrumb.jpg') }}'); background-repeat: no-repeat;">
            <div class="container-fluid">
                <div class="row">
                    <div class="breadcrumb_main nice_title">
                        <h2>Gallery</h2>
                        <!-- special offer start -->
                         
                        <!-- end offer start -->
                    </div>
                </div>
            </div>            
        </section>
        <!-- end breadcrunb -->
        
        <!-- start other detect room section -->
        <div class="other_room_area">
            <div class="container">
                <div class="row">
                    <div class="other_room">
                        <div role="tabpanel">
                            <!-- <div class="section_title content-center"> -->

                            
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <!-- <div class="section_content"> -->
                                <div role="tabpanel" class="tab-pane active" id="all">
                                    <!-- start single room details -->
                                    <div class="accomodation_single_room">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12">
                                                    <div class="row">
                                                        <div class="col-lg-8 col-md-8 col-sm-12 margin-bottom-30">
                                                            <div class="clearfix demo" style="">
                                                                <div class="slider">
                                                                    <div id="gallery_main_slider" class="carousel slide" data-ride="carousel">

                                                                      <!-- Wrapper for slides -->
                                                                      <div class="carousel-inner" role="listbox">
                                                                        <div class="item active">
                                                                          <div class="single_item" style="">
                                                                            <img src="{{ asset('img/lightslider-img/cS-16.jpg') }}" alt="">
                                                                          </div>
                                                                        </div>
                                                                        <div class="item">
                                                                          <div class="single_item" style="">
                                                                            <img src="{{ asset('img/lightslider-img/cS-17.jpg')}}" alt="">
                                                                          </div>
                                                                        </div>
                                                                        <div class="item">
                                                                          <div class="single_item" style="">
                                                                            <img src="{{ asset('img/lightslider-img/cS-18.jpg')}}" alt="">
                                                                          </div>
                                                                        </div>
                                                                        <div class="item">
                                                                          <div class="single_item" style="">
                                                                            <img src="{{ asset('img/lightslider-img/cS-19.jpg')}}" alt="">
                                                                          </div>
                                                                        </div>
                                                                      </div>
                                                                      <!-- Controls -->
                                                                      <a class="slider_ctrl left" href="#gallery_main_slider" role="button" data-slide="prev">
                                                                          <i class="fa fa-angle-left"></i>
                                                                          <span class="sr-only">Previous</span>
                                                                      </a>
                                                                      <a class="slider_ctrl right" href="#gallery_main_slider" role="button" data-slide="next">
                                                                          <i class="fa fa-angle-right"></i>
                                                                          <span class="sr-only">Next</span>
                                                                      </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-4 col-md-4 col-sm-12 margin-bottom-30">
                                                            <div class="row">
                                                                <div class="col-lg-12 col-md-12 col-sm-6 margin-bottom-30">
                                                                    <div class="single_room_wrapper clearfix">
                                                                        <div class="room_wrapper">
                                                                            <div class="dif_room_media">
                                                                                    <a href='{{ asset('img/gallery-four-b.jpg')}}'
                                                                                 class='fresco'
                                                                                 data-fresco-group=' '
                                                                                 data-fresco-caption=" ">
                                                                                <img src='{{ asset('img/gallery-four.jpg')}}' alt=''/>
                                                                              </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-12 col-md-12 col-sm-6">
                                                                    <div class="single_room_wrapper clearfix">
                                                                        <div class="room_wrapper">
                                                                            <div class="dif_room_media">
                                                                                <a href='{{ asset('img/gallery-five-b.jpg')}}'
                                                                                 class='fresco'
                                                                                 data-fresco-group=' '
                                                                                 data-fresco-caption=" ">
                                                                                <img src='{{ asset('img/gallery-five.jpg')}}' alt=''/>
                                                                              </a>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                @foreach($galleries as $gallery)
                                                 <div class="col-lg-3 col-md-3 col-sm-3">
                                                    <div class="single_room_wrapper clearfix">
                                                        <div class="room_wrapper">
                                                            <div class="room_media">
                                                                <a href='{!! url('gallery_image/'.$gallery->image) !!}'
                                                                   class='fresco'
                                                                   data-fresco-group=' '
                                                                   data-fresco-caption=" ">
                                                                   <figure class="uk-overlay uk-overlay-hover">
                                                                  <img src='{!! url('gallery_image/'.$gallery->image) !!}' alt=' {!! url('gallery_image/'.$gallery->title) !!}' style="height: 200px; width: 270px;">
                                                                  <div class="uk-overlay-panel uk-overlay-background uk-overlay-icon"></div>
                                                                  </figure>
                                                                </a>
                                                              
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>    
                                                @endforeach                                              
                                                <!-- start pagination -->
                                                <div class="row">
                                                  <div class="col-sm-12">
                                                     {{ $galleries->links() }}
                                                  </div>
                                                </div>
                                                 
                                                   
                                                  <!-- start pagination -->
                                                 
                                            </div>

                                        </div>
                                    </div>
                                    <!-- end single room details -->
                                </div>
                                
                                                 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end other detect room section -->

@endsection