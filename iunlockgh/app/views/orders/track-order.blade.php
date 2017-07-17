@extends('layout.dashboard')


@section('header')

<i class="glyphicon glyphicon-search yellow"></i> Track order

@stop



@section('content')

@include('common.notification')

<div class="col-sm-6 col-md-7 line3 well well-lg cbck">
<h4 class=""><b>To check your IMEI, fill the form below now:</b></h4>

<label>Enter a valid IMEI number<i class="text-danger"> **</i></label>
<input type="text" class="form-control" placeholder="Enter your IMEI" required>
<p></p>

<p><input type="checkbox" required> I have read and accepted terms and conditions</p>
<br>
<p><button class="btn btn-warning"><i class="glyphicon glyphicon-search"></i> Check your order</button></p>
<br>
</div>

<div class="col-sm-3 col-md-5">
<h4 class=" well cbck yellow"><b>Your order status</b></h4>
<p>Phone to Unlock: <b>iphone 6+ unlocking </b></p>
<p>IMEI: <b>2345569595345656767</b></p>
<p>Delivery Time: <b>4-5 days</b></p>
<p>Ordered at: <b>2015-08-04 10:26:22</b></p>
<p>Delivery Method: <i class="glyphicon glyphicon-info-sign red"></i> <b class="red">pending</b> </p>
<p>Delivery Method: <i class="glyphicon glyphicon-envelope blue"></i> <b>Email</b> </p><br>
</div>
<br>
@stop