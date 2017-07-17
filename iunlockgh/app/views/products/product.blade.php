@extends('layout.product')


@section('header')

SONY XPERIA Z2

@stop

@section('content')
<br>
<div class="nav">
  <a class="ff" href="{{URL::to('product/' .$phones->id)}}"><div class="col-xs-5 col-md-4 line-solid activated"><span class="badge"> 1</span > FILL TO UNLOCK PHONE</div></a>
   <a class="ff" href="{{URL::to('confirm-order')}}"><div class="col-xs-5 col-md-4 line-solid "><span class="badge"> 2</span> CONFIRM ORDER</div></a>
   <a class="ff" href="{{URL::to('make-payment')}}"><div class="col-xs-5 col-md-4 line-solid"><span class="badge"> 3</span> PAY FOR ORDER</div></a>
</div>
<br>
<div class="nav">
<div class="col-xs-4 col-md-3">
<img src="../img/iphone6-plus.jpg" alt="" class="img-responsive curvy"  width="140" height="110">
<div class="caption me2">
    <p class="text-center"><a class="whyt" href=""><span>{{$phones->product_name}}</span></a></p>
</div>
<br>
<img src="../img/mobile_phone.png">
<p class="txt-shadow">You can call <span class="blue"><b>0504214360</b></span> for order support
before proceeding if not certain about order</p>
</div>
<div class="col-xs-9 col-md-8">
<h3 class="yellow txt-shadow"><b><i> How to unlock {{$phones->product_name}}</i></b></h3>
<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. 
Nullam id dolor id nibh ultricies vehicula ut id elit.Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. 
Nullam id dolor id nibh ultricies vehicula ut id elit.Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. 
Nullam id dolor id nibh ultricies vehicula ut id elit.Cras justo odio.Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. 
Nullam id dolor id nibh ultricies vehicula ut id elit.Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. 
Nullam id dolor id nibh ultricies vehicula ut id elit.Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. 
Nullam id dolor id nibh ultricies vehicula ut id elit.Cras justo odio,</p>
<h4 class="red txt-shadow"><b><i>Terms and conditions for unlocking {{$phones->product_name}}</i></b></h4>

<p><span>1. </span> I understand orders which have already been sent in for processing cannot be cancelled while in transit. Your order may only be cancelled upon OUR approval.</p>
<p><span>2. </span> I understand that video proof may be required if there is a claim the unlock solution provided does not unlock the device. Although this may rarely occur, it may be a requirement from the manufacturer to retrieve a new code or a refund as a last resort</p>
<p><span>3. </span> I understand that UnlockCode4U.com Guarantees 100% to fully and permanently unlock my phone's network. It will be my responsibility to verify the phone which I am unlocking will be compatible with the network I wish to use it on. If a custom ROM has been <!-- installed or there are software issues that does not allow the unlock solution to work on the device, it may be required to restore the original ROM or to upgrade it in order to successfully use the Unlock Code. --></p>
</div>
</div>
<br>
<div class="nav">
<div class="well well-sm mb txt-shadow">
<h4 class="yellow"><i class="glyphicon glyphicon-lock yellow"></i> <i>Begin unlocking your {{$phones->product_name}}</i></h4>
</div>

@include('common.notification')

<div class="well well-sm cbck">
{{Form::open(array('url'=>'order', 'method'=>'POST'))}}
<p>
      <label><b>Select network</b><i class="text-danger"> **</i></label></label>
     <select class="form-control" name="network_name" id="Bname">
      @foreach($network as $network)
      <option value="{{$network->network_name}}" data-price="{{$network->price}}" data-delivery="{{$network->delivery_time}}">{{$network->network_name}}</option>
      @endforeach
     </select>
   </p>

    <div>

    <p>
    <label><b>Price for unlocking</b></label>
    <input type="text" class="form-control"  name="price">
    </p>
    <p>
    <label><b>Unlocking Time</b></label>
    <input type="text" class="form-control"  name="delivery">
   </p>
   
    </div>
   <p>
      <label><b>IMEI number</b><i class="text-danger red"><b>*15 digits*</b></i></label></label>
     <input type="text" class="form-control" placeholder="Enter Phone model" name="imei">
   </p>
   <p>
      <label><b>Phone number</b><i class="text-danger"> <b>**</b></i></label></label>
     <input type="text" class="form-control" placeholder="Enter Phone number" name="order_contact">
   </p>
   <p>
      <label><b>Email</b><i class="text-danger"> <b>**</b></i></label></label>
     <input type="text" class="form-control" placeholder="Enter Email address" name="email">
   </p>
   <p><button class="btn btn-warning"><span class="badge"> 1</span> Contiune  unlocking &raquo;</button></p>

    <input type="hidden" class="form-control" value="{{$phones->product_name}}" name="product_name">
{{Form::close()}}
</div>

<div class="well cover mb">
<h4 class="yellow"><b><i>Reasons to unlock {{$phones->product_name}} from Us</i></b></h4>
<ul class="text-left">
<li>Unlock your phone from the comfort of your own home.</li>
<li>Never send your phone to anybody.</li>
<li>If you travel you will save roaming fees by being able to use a local SIM Cards</li>
<li>The resell value of your device will increase significantly as it is available to more networks</li>
<li>Easily switch between simcard, using the same phone.</li>
<li>Very easy, no technical experience necessary.</li>
<li>The phone is permanently unlocked, even after updates.</li>
<li>100% Guaranteed, if we cannot get you, your unlock code we will refund you</li>
</ul>
<p><font color="red"><i class="glyphicon glyphicon-alert"></i><b> <i>If you have not registered on the system please enter your mail or mobile number before continuing with order</i></b></font></p>
</div>
</div>


<script src="../js/jQuery.js"></script>
<script src="../js/jquery-2.1.4.min.js"></script>
<script type="text/javascript">

$('#Bname').change(function() {
    selectedOption = $('option:selected', this);
    $('input[name=delivery]').val( selectedOption.data('delivery') );
    $('input[name=price]').val( selectedOption.data('price') );
   
});



</script>

@stop