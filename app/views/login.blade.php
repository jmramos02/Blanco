@extends('layout')

@section('content')
  <div class = "row" id = "register-form">
    <div class = "col-md-6">
    <h2>Login</h2>
    {{ Form::open(array('url' => 'foo/bar')) }}
      <div class = "row">
        <div class = "col-md-2">
          Username
        </div>
        <div class = "col-md-6">
          {{Form::text('username','',array('class' => 'form-control'))}}
        </div>
      </div>
      <div class = "row">
        <div class = "col-md-2">
          Password
        </div>
        <div class = "col-md-6">
          {{Form::password('password',array('class' => 'form-control'))}}
        </div>
        <div class = "row">
          <div class = "col-md-8">
            {{Form::submit('Login',array('class' => 'form-control'))}}
          </div>
        </div>
      </div>
    {{ Form::close() }}
    </div>
    <div class = "col-md-6 register-link">
      <h5>You are steps away from making your life less miserable</h5>
      <h5>New to Blanco? Click <a href = "http://developer.globelabs.com.ph/dialog/oauth?app_id=4xEbGfk9a8RfA7czo6ia6EfaEEEkf8aa">Here</a> to Register</h5>
    </div>
  </div>
@stop