@extends('layout.main')


@section('header')

Check Your Order Status


@stop




@section('content')
<bR>
<img src="img/folder_modified.png" class="img-responsive">
<h4 class="yellow"><b><i>Search and retrieve your order status</i></b></h4>

You can track the status of your order on real-time filling the form on the left.

If your order has been pending for an unusually long period of time or if you have any questions please don't hesitate to contact us.

*If you have just placed your order, please do not call or email us but click HERE for turnaround times.

*If your order is not found in the system, PLEASE DO NOT WORRY, as your order may have not been added to our system yet. Just contact us at contact@unlockcode4u.com and we will take care of the issue ASAP for you.

<br><br>
<div class="well line3 me">
<h4 class="yellow"><b><i>To check your order status, fill the form below now:</i></b></h4>

<label>Enter a valid IMEI number<i class="text-danger"> **</i></label>
<input type="text" class="form-control" placeholder="Enter your IMEI" required>
<p></p>

<p><input type="checkbox" required> I have read and accepted terms and conditions</p>
<br>
<p><button class="btn btn-warning"><i class="glyphicon glyphicon-search"></i> Check your order status</button></p>
<br>
</div>

<div class="well line3 text-center">
<h3 class="yellow text-center"><b>Your order IMEI 2345569595 </b></h3>
<h3><b>Your Order status is </b></h3>
<p>Delivery Time: iphone 6+ unlocking  </p>
<p>Delivery Time: 2345569595  </p>
<p>Delivery Time: 1-20 minutes  </p>
<p>Delivery Time: 3015-09-45  </p>
<p>Delivery Status: <i class="fa fa-exclamation-triangle red"></i> unlock Code not ready, still in processing stage </p>
<p>Delivery Method: <i class="glyphicon glyphicon-envelope blue"></i> Email </p><br>
</div>
@stop