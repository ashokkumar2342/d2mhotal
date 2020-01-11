@extends('admin.layout.auth')
@section('body')
<div class="login-box">
  <div class="login-logo">
    <a href="#"><b>D2M Hotel</b></a>
  </div>
  <!-- /.login-logo -->
  <router-view></router-view>            

  <div class="login-box-body">
    <p class="login-box-msg">Forgot Password</p>
    {{-- {{ Auth::user()->name }} --}}
    {!! Form::open(['route'=>'admin.forgetPassword.post']) !!}
      <div class="form-group has-feedback">
      	{!! Form::email('email', '', ['class'=>'form-control', 'placeholder'=>'mail']) !!}
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        <p class="text-danger">{{ $errors->first('email') }}</p>
      </div>
      
      
       
        <!-- /.col -->
        <div class="clearfix">
        <div class="col-xs-4">

          <button type="submit" class="btn btn-primary btn-block btn-flat">Send</button>
        </div>
        </div>
        <!-- /.col -->
      </div>
    {!! Form::close() !!}

   
   
  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->
@endsection