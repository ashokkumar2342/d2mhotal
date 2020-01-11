@component('mail::message')
# D2M Hotel Website Booking Details 

  

 <div class="container">
 <div class="row">

 	<div class="col-md-4">
 	Check In:
 		{{ $booking->check_in }}
 	</div>
 	<div class="col-md-4">
 	Check Out:
 		{{ $booking->check_out }}
 	</div>
 	<div class="col-md-4">
 	Room:
 		{{ $booking->room }}
 	</div>
 	<div class="col-md-4">
 	Adult:
 		{{ $booking->adult }}
 	</div>
 
 	<div class="col-md-6">
 	Name:
 		{{ $booking->first_name }}
 			{{ $booking->last_name }}
 	</div>
 	<div class="col-md-6">
 	Email:
 		{{ $booking->email }}
 	</div>
 	<div class="col-md-6">
 	Mob:
 		{{ $booking->mobile }}
 	</div>
 	<div class="col-md-4">
 	Address:
 		{{ $booking->address1 }}
 		{{ $booking->address2 }}

 	</div>
 	
 	 

 </div>
 	
 </div>





 

Thanks,<br>
 D2M Hotel
@endcomponent
