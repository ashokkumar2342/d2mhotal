@extends('admin.layout.base')
@section('body')
	<!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Dashboard
        </h1>
       
    </section>
 	<!-- Main content -->
    <section class="content">
      	<div class="row">
      		<div class="col-lg-3 col-xs-6">
		          <!-- small box -->
		          <div class="small-box bg-green">
		            <div class="inner">
		              <h3>{{ App\BookingRequest::all()->count() }}<sup style="font-size: 20px"></sup></h3>

		              <p>Booking</p>
		            </div>
		            <div class="icon">
		              <i class="ion ion-stats-bars"></i>
		            </div>
		            <a href="{{ route('admin.booking.list') }}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
		          </div>
		        </div>
		        <!-- ./col -->
		        <div class="col-lg-3 col-xs-6">
		          <!-- small box -->
		          <div class="small-box bg-yellow">
		            <div class="inner">
		              <h3>{{ App\Contact::all()->count() }}</h3>

		              <p>Contact Us</p>
		            </div>
		            <div class="icon">
		              <i class="ion ion-person-add"></i>
		            </div>
		            <a href="{{ route('admin.contact.list') }}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
		          </div>
		        </div>
		      	</div>

    </section>
    <!-- /.content -->
@endsection