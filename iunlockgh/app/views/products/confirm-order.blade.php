@extends('layout.products')


@section('header')

SONY XPERIA Z2

@stop

@section('content')

<br>
<div class="nav">
  <a class="ff" href="{{URL::to('confirm-order')}}"><div class="col-xs-5 col-md-4 line-solid "><span class="badge"> 1</span > FILL TO UNLOCK PHONE</div></a>
   <a class="ff" href="{{URL::to('confirm-order')}}"><div class="col-xs-5 col-md-4 line-solid activated"><span class="badge"> 2</span> CONFIRM ORDER</div></a>
   <a class="ff" href="{{URL::to('make-payment')}}"><div class="col-xs-5 col-md-4 line-solid"><span class="badge"> 3</span> PAY FOR ORDER</div></a>
</div>

<br>
<div class="nav">
<div class="col-xs-4 col-md-3 ">
<img src="img/iphone6-plus.jpg" alt="" class="img-responsive hidden-xs curvy"  width="140" height="110">

</div>
<div class="col-xs-10 col-md-9">

<h4 class="yellow cover cnta"><img src="../public/img/folder_modified.png"><b><i>CONFIRM YOUR ORDER DETAILS</i></b></h4>



<div class="cover cnta">
@include('common.notification')

@foreach($orders as $order)
<h4>
<p>Network Locked To: <b>{{$order->network_name}}</b></p><br>
<p>Price: <b>GH₵ {{$order->price}}</b></p><br>
<p>Unlocking Time: <b class="blue">{{$order->delivery}}</b></p><br>
<p>Phone Model: <span class="red"><b>{{$order->product_name}}</b></span></p><br>
<!-- <p>Network Locked: {{$order->network_name}}</p> -->
<p>IMEI Number: <b>{{$order->imei}}</b></p><br>
<!-- p>Price:<span class="yellow"><b> GH₵ {{$order->price}}</b></span> </p> -->
<p>Delivery Method: <span class="blue"><i class="glyphicon glyphicon-phone"></i><b> {{$order->order_contact}}</b></span></p><br>

</h4>

<p></p>
<div class="inline">
<a href="{{URL::to('delete/' .$order->id)}}"><button class="btn btn-danger"> &laquo; Cancel Order </button></a>
<a href="{{URL::to('make-payment/' .$order->id)}}"><button class="btn btn-success"> Confirm and Pay &raquo;</button>
</a>
<br><br>
</div>
@endforeach
</div>
</div>
</div>

@stop