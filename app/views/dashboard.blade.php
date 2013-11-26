@extends('account')
@section('content')
  <?php $user = Session::get('user_info');
    
  ?>
  <h6>User Details</h6>
  <div class = "row">
    <div class = "col-md-6">
      <div class=  "row">
          <div class = "col-md-3">
            First Name:
          </div>
          <div class = "col-md-3">
            {{$user->first_name}}
          </div>
      </div>
      <div class = "row">
          <div class = "col-md-3">
            Last Name:
          </div>
          <div class = "col-md-3">
            {{$user->last_name}}
          </div>
        </div>
        <div class = "row">
          <div class = "col-md-3">
            Load Balance
          </div>
          <div class = "col-md-3">
            {{$user->remaining_balance}}
          </div>
        </div>
        <div class = "row">
          <div class = "col-md-3">
            Email
          </div>
          <div class = "col-md-3">
            {{$user->email}}
          </div>
        </div>
      </div>
      <div class = "col-md-6">
        <div class = "row">
          <div class = "col-md-6">
            <div class = 'notifs'>
            Notifications: <?php  if($user->access_token == ''){echo "<p class = 'error'>You are not subscribed to our Sevice. You can 
            register <a href = 'http://developer.globelabs.com.ph/dialog/oauth?app_id=4xEbGfk9a8RfA7czo6ia6EfaEEEkf8aa' class = 'link-content'>Here</a> </p>";}
            else{
              echo "<p>You have no notifications</p>";            
            }?>
            </div>
          </div>
        </div>
        <div class = "row">
          <div class = "col-md-6">
            <a href = "topup" class = "link-content">Top up </a> Your account
          </div>
        </div>
      </div>
    </div>
@stop 