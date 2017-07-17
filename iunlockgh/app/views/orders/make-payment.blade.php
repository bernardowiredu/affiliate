@extends('layout.product')


@section('header')

Pay for {{$order->product_name}} unlocking

@stop


@section('content')

<br>
<div class="nav">
  <a class="ff" href="{{URL::to('make-payment')}}"><div class="col-xs-5 col-md-4 line-solid "><span class="badge"> 1</span > FILL TO UNLOCK PHONE</div></a>
   <a class="ff" href="{{URL::to('confirm-order')}}"><div class="col-xs-5 col-md-4 line-solid "><span class="badge"> 2</span> CONFIRM ORDER</div></a>
   <a class="ff" href="{{URL::to('make-payment')}}"><div class="col-xs-5 col-md-4 line-solid activated"><span class="badge"> 3</span> PAY FOR ORDER</div></a>
</div>
<br>
 <div class="nav">
<h2><img src="../img/shopping_cart.png" class="responsive">Pay and Unlock your {{$order->product_name}} <!-- ({{$order->net_id}}) --></h2>
</div>

<p><i><font color="red"><b>NB: </font>note your unlocking ID for checking order status</b></i></p>


@include('common.notification')

<br>

<div class="well well-sm cbck">
  {{Form::open(array('url'=>'payment', 'method'=>'POST'))}}
<p>
      <label><b>Your order contact number</b><i class="text-danger"> **</i></label></label>
     <input type="text" class="form-control" value="{{$order->order_contact}}"  name="telephone" >
     <strong class="red">Enter a valid mobile number to recieve order notifications</strong>
   </p>
  <p>
      <label><b>Your order imei</b><i class="text-danger"> **</i></label></label>
     <input type="text" class="form-control" value="{{$order->imei}}" name="imei">
   </p>
    <input type="hidden" class="form-control" value="{{$order->price}}" name="price">
    <input type="hidden" class="form-control" value="{{$order->order_code}}" name="generated_code">
    <input type="hidden" class="form-control" value="{{$order->delivery}}" name="delivery_time">
    <input type="hidden" class="form-control" value="{{$order->id}}" name="id">
    <input type="hidden" class="form-control" value="{{$order->product_name}}" name="product_model">
    <input type="hidden" class="form-control" value="{{$order->network_name}}" name="network_name">
   <p><h3 class=""><b>Total: GH₵{{$order->price}}</b></h3></p>

  <p>
      <label><b>Pay code</b><i class="text-danger"> **</i></label></label>
     <input type="text" class="form-control" placeholder="Enter Pay Code to make purchase" name="verified_code" required>
   </p>


<button class="btn btn-success"><i class=" glyphicon glyphicon-credit-card"></i> Pay for Order</button> <span class="pull-right"><i class="glyphicon glyphicon-lock"></i><font color="#b7b7b7"></font> secured by SSL</span>
{{Form::close()}}

<br><br>
</div>
<div class="well well-sm mb ">
<h4 class="yellow"><i class=" glyphicon glyphicon-credit-card"></i> PAYMENT GUIDE</h4>
</div>
<div class="well well-sm cbck">
<p>Send mobile money to</p> 
<p><img src="../img/mtn.jpg" width="70" height="50"><span> =  <b>0240479419</b></span></p>
<p><img src="../img/Tigo-Cash-Logo.jpg" width="70" height="50"><span> = <b>0272439030</b></span></p>

<h4><b>STEPS TO MAKE PAYMENT</b></h4>
<ul class="nav">
<li>1. Send Mobile money to any of the numbers above either <b>Tigo Cash or MTN Moblie Money</b>.</li>
<li>2. Once we recieve the money you sent us, a <b>PAY CODE eg.326578890</b> will sent to your Phone.</li>
<li>3. Enter this code in the pay code form and click <b>PAY FOR ORDER</b> to make make payment and unlock your phone.</li>
<li>4. Once payment is completed your phone unlocking process begins.</li>
</ul>
<br>
<p>For any difficulties call <i class="glyphicon glyphicon-earphone"></i> <b>0503214360</b> for assistance</p>
</div>

@stop