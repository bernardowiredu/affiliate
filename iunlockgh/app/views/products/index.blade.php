@extends('layout.product')


@section('header')

{{$category->name}} phones we unlock

@stop


@section('content')
<br>

<div class="nav">
<div class="well well-sm ">
<img src="{{$category->image}}" class="img-responsive"></div>

<label class="push"><h4 class="yellow txt-shadow"><b><i>Select your {{$category->name}} model</i></b></h4></label>
<select class="push form-control2">
@foreach($phone as $phone)  
<option>{{$phone->product_name}}</option>
@endforeach
</select>
<br>
@foreach($product as $product)
 <div class="col-xs-6 col-md-3">
 <a href="#" class="thumbnail mf">
      <img src="../img/iphone6-plus.jpg" alt="product" width="100" height="70">
    </a>
    <div class="caption me2">
   	<p class="text-center"><a class="whyt" href="{{URL::to('product/' .$product->id)}}"><spans>{{$product->product_name}}</span></a></p>
   </div>
   <p></p> 
 </div>

@endforeach
 </div>
 <br>
<div class="well well-sm mb">
<h4 class="yellow"><i>Information holding container</i></h4>
</div>
<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. 
Nullam id dolor id nibh ultricies vehicula ut id elit.Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. 
Nullam id dolor id nibh ultricies vehicula ut id elit.Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. 
Nullam id dolor id nibh ultricies vehicula ut id elit.Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. 
Nullam id dolor id nibh ultricies vehicula ut id elit Nullam id dolor id nibh ultricies vehicula ut id elit.Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. 
Nullam id dolor id nibh ultricies vehicula ut id elit.Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. 
Nullam id dolor id nibh ultricies vehicula ut id elit.Nullam id dolor id nibh ultricies vehicula ut id elit.Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. 
Nullam id dolor id nibh ultricies vehicula ut id elit.Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. 
Nullam id dolor id nibh ultricies vehicula ut id elit.Nullam id dolor id nibh ultricies vehicula ut id elit.Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. 
Nullam id dolor id nibh ultricies vehicula ut id elit.Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. 
Nullam id dolor id nibh ultricies vehicula ut id elit.Nullam id dolor id nibh ultricies vehicula ut id elit.Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. 
Nullam id dolor id nibh ultricies vehicula ut id elit.Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. 
Nullam id dolor id nibh ultricies vehicula ut id elit.</p>

<div class="well well-sm mb">
<h4><font color="red"><i class=" glyphicon glyphicon-warning-sign"></i> <i>Take note of phone status</i></font></h4>
</div>
<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. 
Nullam id dolor id nibh ultricies vehicula ut id elit.Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. 
Nullam id dolor id nibh ultricies vehicula ut id elit.Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. 
Nullam id dolor id nibh ultricies vehicula ut id elit.Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. 
Nullam id dolor id nibh ultricies vehicula ut id elit Nullam id dolor id nibh ultricies vehicula ut id elit.Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. 
Nullam id dolor id nibh ultricies vehicula ut id elit.Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. 
Nullam id dolor id nibh ultricies vehicula ut id elit.Nullam id dolor id nibh ultricies vehicula ut id elit.Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. 
Nullam id dolor id nibh ultricies vehicula ut id elit.Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. 
Nullam id dolor id nibh ultricies vehicula ut id elit.Nullam id dolor id nibh ultricies vehicula ut id elit.Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. 
Nullam id dolor id nibh ultricies vehicula ut id elit.Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. 
Nullam id dolor id nibh ultricies vehicula ut id elit.Nullam id dolor id nibh ultricies vehicula ut id elit.Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. 
Nullam id dolor id nibh ultricies vehicula ut id elit.Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. 
Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
@stop