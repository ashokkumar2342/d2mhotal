@component('mail::message')
# D2M Hotel Website Contact Us

  

 <div class="container">
 <div class="row">
 	<div class="col-md-6">
 	Name:
 		{{ $contact->first_name }}
 			{{ $contact->last_name }}
 	</div>
 	<div class="col-md-6">
 	Email:
 		{{ $contact->email }}
 	</div>
 	<div class="col-md-6">
 	Mob:
 		{{ $contact->mobile }}
 	</div>
 	<div class="col-md-4">
 	Message:
 		{{ $contact->message }}
 	</div>
 	 

 </div>
 	
 </div>

Thanks,<br>
 D2M Hotel
@endcomponent
