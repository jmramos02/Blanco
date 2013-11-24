@extends('layout')

@section('content')
  <div class = "error-box">
    <?php
         foreach ($errors->all() as $message){
          echo "<p class = 'error'>$message</a>";
      }
      $message = Session::get('message');
      if(isset($message)){
          echo '<p>' . $message . '</p>';
      }
    ?>
  </div>
  {{Form::open(array('url' => 'register/adduser','method','post'))}}
  <div class = "row" id = "register-form">
    <div class = "col-md-12 register-link">
      <h2>Register to Blanco </h2>
      <div class = "row">
        <div class = "col-md-2">
          First Name
        </div>
        <div class = "col-md-3">
          {{Form::text('first_name','',array('class' => 'form-control','placeholder' => "example: JM"))}}
        </div>
        <div class = "col-md-2">
          Last Name
        </div>
        <div class = "col-md-3">
          {{Form::text('last_name','',array('class' => 'form-control','placeholder' => "example: De Leon"))}}
        </div>
      </div>
      <div class = "row">
        <div class = "col-md-2">
          Username
        </div>
        <div class = "col-md-3">
          {{Form::text('username','',array('class' => 'form-control username', 'placeholder' => 'Must be unique'))}}
        </div>
        <div class = "col-md-12" id = "ajax-container">
          <button id = "check-username">Check</button>
        </div>
      </div>
      <div class = "row">
        <div class = "col-md-2">
          Password
        </div>
        <div class = "col-md-3">
          {{Form::password('password',array('class' => 'form-control', 'placeholder' => 'Remember This'))}}
        </div>
        <div class = "col-md-2">
          Email
        </div>
        <div class = "col-md-3">
          {{Form::text('email','',array('class' => 'form-control','placeholder' => 'This must be valid'))}}
        </div>
      </div>
      <div class = "row">
        <div class = "col-md-7">
          {{Form::submit('Register',array('class' => 'form-control submit-button'))}}
        </div>
      </div>
    </div>
  </div>
  {{Form::close()}}
@stop