@extends('account')
@section('content')
  <?php $user = Session::get('user_info');?>
  <div id = "row">
    <h6> Top up </h6>
    {{Form::open(array('url' => 'topup/user'))}}
      <div class = "row">
          <div class = "col-md-2">
            Amount
          </div>
          <div class = "col-md-4">
            <select name = "amount">
                <option value = "0">0</option>
                <option value = "10"> 10 </option>
            </select>
          </div>
      </div>
      <div class = "row">
        <div class = "col-md-4">
            {{Form::submit('Top my Account',array('class' => 'submit-button'))}}
          </div>
      </div>
      <div class = "row">
          <div class = "col-md-4">
            Upon submission, a text message will be sent to your phone
          </div>
      </div>
    {{Form::close()}}
  </div>
@stop 