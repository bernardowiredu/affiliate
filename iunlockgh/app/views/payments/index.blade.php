@extends('layout.dashboard')






@section('header')

<img src="../public/img/add_to_database.png"></i><span class="txt-shadow">Add funds to your account
</span> 
@stop



@section('content')

@include('common.notification')
<div class="well cbck">
<h4 class="yellow">To Add funds to your accounts Enter code</h4>

<label>Enter deposit code<i class="text-danger"> **</i></label>
<input type="text" class="form-control" placeholder="eg. 326578890" required>
<p></p>
<button class="btn btn-success"><i class="glyphicon glyphicon-thumbs-up"></i> Add fund</button>
</div>
<p></p>

<div class="well well-sm me">
<h4 class="yellow"><!-- <i class=" glyphicon glyphicon-credit-card"></i> --> <I>HOW TO ADD MONEY INTO YOUR ACCOUNT</I></h4>
</div>

<div class="well cbck">
<p>Send mobile money to</p> 
<p><img src="../public/img/mtn.jpg" width="70" height="50"><span> =  <b>0240479419</b></span></p>
<p><img src="../public/img/Tigo-Cash-Logo.jpg" width="70" height="50"><span> = <b>0272439030</b></span></p>

<h4>STEPS TO MAKE PAYMENT</h4>
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
