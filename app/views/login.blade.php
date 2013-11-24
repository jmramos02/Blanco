@extends('layout')

@section('content')
  <div class = "row" id = "register-form">
    <div class = "col-md-6">
    <h2>Login</h2>
    {{ Form::open(array('url' => 'login/securelogin')) }}
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
  </div>
@stop