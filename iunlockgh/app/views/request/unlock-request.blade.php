@extends('layout.dashboard')


@section('header')

<i class="glyphicon glyphicon-phone"></i> Unlock request

@stop



@section('content')
<p></p>

@include('common.notification')

<h4 class="yellow">To request for phone unlock fill the forms below</h4>

<label>Select Manufacturer</label>
<select class="form-control">
   <option>Acatel</option>
   <option>Apple</option>
   <option>Azumi</option>
   <option>Blackberry</option>
   <option>Dell</option>
   <option>Doro</option>
   <option>Emporia</option>
   <option>Huawei</option>
   <option>HTC</option>
   <option>LG</option>
   <option>Microsoft</option>
   <option>Motorola</option>
   <option>Nokia</option>
   <option>Sony</option>
   <option>ZTE</option>
</select>
<p></p>

<label>Enter Phone model<i class="text-danger"> **</i></label>
<input type="text" class="form-control" placeholder="eg. iphone 5s, samsung galaxy S2 GT i9100, blackberry 8520 Curve" required>
<p></p>

<label>Enter carrier locked to<i class="text-danger"> **</i></label>
<input type="text" class="form-control" placeholder="eg. AT&T, Verison, Movistar" required>
<p></p>

<label>Enter your IMEI number<i class="text-danger"> ** 15 digits</i></label>
<input type="text" class="form-control" placeholder="dial *#06# to get Imei number." required>
<p></p>

<label>Enter your phone number or email<i class="text-danger"> **</i></label>
<input type="text" class="form-control" placeholder="eg.0545343660" required>
<p></p>

<p><button class="btn btn-warning"><i class="glyphicon glyphicon-phone"></i> Request unlock</button></p>

<br><br>



@stop