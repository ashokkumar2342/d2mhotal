@extends('admin.layout.base')
@section('body')
	<!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Contact Details</h1>
       
    </section>
 	<!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="box">
          <div class="box-header with-border">
              <h3 class="box-title">Contact Details</h3>             
          </div>
          <div class="box-body">
            <div class="container">               
              <div class="row"> 
               
                <div class="col-md-4">
                 <h3 class="box-title"> Name:
                  {{ $contact->first_name }}
                  {{ $contact->first_last }}
                  </h3>
                </div>
                <div class="col-md-3">
                <h3 class="box-title">
               <i class="fa fa-mobile" aria-hidden="true"></i>
                  
                {{ $contact->mobile }}
                </h3>
                </div>
                <div class="col-md-5">
                <h3 class="box-title">
               <i class="fa fa-envelope" aria-hidden="true"></i>

                {{ $contact->email }}
                </h3>
                </div>
                
                <div class="col-md-8">
                <h3 class="box-title">
                  Message:
                
                {{ $contact->message }}

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