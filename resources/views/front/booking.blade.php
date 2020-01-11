@extends('front.layout.main')
@section('body')
        
        <!-- start breadcrumb -->
        <section class="breadcrumb_main_area margin-bottom-80" style="background-image:url('{{ asset('img/about-us-breadcrumb.jpg')}}'); background-repeat: no-repeat;">
            <div class="container-fluid">
                <div class="row">
                    <div class="breadcrumb_main nice_title">
                        <h2>Booking</h2>
                       
                    </div>
                </div>
            </div>            
        </section>
        <!-- end breadcrunb -->
        <!-- end breadcrunb -->

        <!-- start other detect room section -->
     <section class="kf-aboutus-wrap margin-bottom-100">
                <div class="container">
                    <div class="row">
                                                <div class="col-md-8">
                        <h3>Personal Info</h3><hr>
                     
                             <form action="{{ route('front.booking.request.post') }}" method="post" accept-charset="utf-8">
                             {{ csrf_field() }}
                             <div class="col-md-4 col-sm-6">
                                <span class="text-danger"></span>
                                <div class="date-picker" data-provide="datepicker">
                                    <input type="text" value="{{ $data['arrival'] or '' }}" id="my-datepicker" class="date-picker" placeholder="Arrival Date" style="padding: 8px;" name="checkin" required>  
                                     
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <span class="text-danger"></span>
                                <div class="date-picker-des" data-provide="datepicker1">
                                    <input type="text" value="{{ $data['departure'] or '' }}" id="my-datepicker2" class="date-picker" placeholder="Departure Date" style="padding: 8px;" name="checkout" required>  
                                     
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-6">
                                <span class="text-danger"></span>

                                <select class="basic" name="room" style="padding: 8px;">
                                   
                                    <option value="3" {{ @($data['room'] == 1)?'selected':'' }}>1 room</option>
                                    <option value="5" {{ @($data['room'] == 2)?'selected':'' }}>2 room</option>
                                    <option value="10" {{ @($data['room'] == 3)?'selected':'' }}>3 room</option>
                                </select>
                            </div>
                            <div class="col-md-2 col-sm-6">
                                <span class="text-danger"></span>
                                <select class="basic" name="adult" style="padding: 8px;">
                                   
                                    <option value="1" {{ @($data['adult'] == 1)?'selected':'' }}>1 adult</option>
                                    <option value="2" {{ @($data['adult'] == 2)?'selected':'' }}>2 adult</option>
                                    <option value="3" {{ @($data['adult'] == 3)?'selected':'' }}>3 adult</option>
                                </select>
                            </div>
                            {{--  @if($data->adult)
                                    @elseif()
                                    @elseif()
                                    @endif --}}
                            <div class="clearfix"></div><hr>

                             <div class="row">
                                <div class="col-sm-6">
                                <div class="form-group">
                                <label for="name">First Name:</label>
                                <span class="text-danger"></span>
                                 <input type="text" class="form-control" name="first_name" id="name" required>
                                </div>
                                </div>
                                <div class="col-sm-6">
                                <div class="form-group">
                                <label for="name">Last Name:</label>
                                <span class="text-danger"></span>
                                 <input type="text" class="form-control" name="last_name" id="last"  >
                                </div>
                                </div>
                                <div class="col-sm-6">
                                <div class="form-group">
                                <label for="name">Mobile:</label>
                                <span class="text-danger"></span>
                                 <input type="text" class="form-control" name="mobile" id="number" required>
                                </div>
                                </div>
                                <div class="col-sm-6">
                                <div class="form-group">
                                <label for="email">Email address:</label>
                                <span class="text-danger"></span>
                                 <input type="email" class="form-control" name="email" id="email" >
                                </div>
                                </div>
                                <div class="col-sm-6">
                                <div class="form-group">
                                <label for="name">Address 1:</label>
                                <span class="text-danger"></span>
                                 <input type="text" class="form-control" name="address1" required>
                                </div>
                                </div>
                                <div class="col-sm-6">
                                <div class="form-group">
                                <label for="name">Address 2:</label>
                                <span class="text-danger"></span>
                                 <input type="text" class="form-control" name="address2" >
                                </div>
                                </div>
                                 <div class="col-sm-6">
                                <div class="form-group">
                                <label for="name">City/Town:</label>
                                <span class="text-danger"></span>
                                 <input type="text" class="form-control" name="city" >
                                </div>
                                </div>
                                <div class="col-sm-6">
                                 <div class="form-group">
                                 <label for="name">Country:</label>
                                 <span class="text-danger"></span>
                                 <input type="text-areal" class="form-control" name="country" id="Company">
                                 <input type="hidden" name="rid" value="">
                                </div></div></div>
                                 
                                <button type="submit" class="btn btn-default">Submit</button>
                            </form>                         

                             
                        </div>
                       {{--  <div class="col-md-4">
                                <br><br>
                                <hr>
                                <img src="{{ asset('img/room-image-five.png')}}" alt="">
                                <br><br>
                                <h5>Executive Room</h5>
                                <p>Rs: 2799/ <span>night</span></p>
                            </div>
                        </div> --}}
                </div>
            </section>
@endsection