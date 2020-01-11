@extends('admin.layout.base')
@section('body')
	<!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Booking Details</h1>
       
    </section>
 	<!-- Main content -->
    <section class="content">
      	<!-- Default box -->
      	<div class="box">
	        <div class="box-header with-border">
	          	<h3 class="box-title">Room Details</h3>	          	
	        </div>
	        <div class="box-body">
            <div class="container">
              <div class="row">
                
                <div class="col-md-3">
                <h3 class="box-title">
                Check In:
                  {{ $bookingRequest->check_in }}
                  </h3>
                  
                </div>
                <div class="col-md-3">
                <h3 class="box-title">
                  Check Out:
                {{ $bookingRequest->check_out }}
                </h3>
                </div>
                <div class="col-md-3">
                <h3 class="box-title">
                  Room:
                {{ $bookingRequest->room }}
                </h3>
                </div>
                <div class="col-md-3">
                <h3 class="box-title">
                  Adult:
                {{ $bookingRequest->adult }}
                </h3>
                </div>
              </div>
              <div class="row"> 
              <div class="box-header with-border">
                <h3 class="box-title">Personal Details</h3>              
               </div>
                <div class="col-md-4">
                 <h3 class="box-title"> Name:
                  {{ $bookingRequest->first_name }}
                  {{ $bookingRequest->last_name }}
                  </h3>
                </div>
                <div class="col-md-4 col-md-offset-2">
                <h3 class="box-title">
                  Mobile:
                {{ $bookingRequest->mobile }}
                </h3>
                </div>
                
                <div class="col-md-8">
                <h3 class="box-title">
                  Address:
                {{ $bookingRequest->address1 }}
                {{ $bookingRequest->address2 }}

                </h3>
                </div>
                <div class="col-md-4">
                <h3 class="box-title">
                  City:
                {{ $bookingRequest->city }}
                 

                </h3>
                </div>
                <div class="col-md-4">
                <h3 class="box-title">
                  Date:
                {{ $bookingRequest->created_at }}
                </h3>
                </div>
                
                 
                
              </div>
            </div>

	          	
              
              
	        </div>
      </div>
      <!-- /.box -->
    </section>
    <!-- /.content -->
@endsection