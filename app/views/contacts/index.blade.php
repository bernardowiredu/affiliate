
@extends('layout.courses')


@section('name')

<span class="white-text"> Contact Us </span>

@stop

@section('header')

<p class="text-white light">We did most of the heavy lifting for you to provide a default stylings that incorporate our custom components. Additionally, we refined animations and transitions to provide a smoother experience for developers.</p>

@stop

@section('content')

<div class="col s12 m12 l12 ">
	<h6> OUR CONTACT DETAILS </h6>
	<p class="light">You can contact us anytime 24/7 we would response to your enquiry </p>
	<ul class="light">
		<li>For whatsapp and calls purposes only:   <b>+60-11-533-71272</b></li>
		<li>For Emails : <b> graduatemalaysia@gmail.com </b> </li>
		<li>For Skype: <b> graduate@malaysia </b> </li>
		<ul class="light">
		<li>City : Seri Kembangan</li>
		<li>Region : Selangor</li>
		<li>Country : Malaysia, Kuala Lumpur </li>
		</ul>
	</ul>
	<img  class="responsive-img" src="../public/images/map.png">
	
</div>

@stop



@section ('information')


<div class="col s12 m12 l12 ">

<h6> SEND US ENQUIRY </h6>

<div class="row">
    <form class="col s12">
      <div class="row">
        <div class="input-field col s12">
          <input id="name" type="text" placeholder="Enter your name " class="validate">
          <label for="name" data-error="wrong" data-success="right">Full Name </label>
        </div>
      </div>
    </form>
  </div>

 <div class="row">
    <form class="col s12">
      <div class="row">
        <div class="input-field col s12">
          <input id="email" type="email" placeholder="Enter your email Address" class="validate">
          <label for="email" data-error="wrong" data-success="right">Email</label>
        </div>
      </div>
    </form>
  </div>

  <div class="row">
    <form class="col s12">
      <div class="row">
        <div class="input-field col s12">
          <input id="subject" type="text" placeholder= "Enter subject of your enquiry" class="validate">
          <label for="subject" data-error="wrong" data-success="right">Subject</label>
        </div>
      </div>
    </form>
  </div>

 <div class="row">
    <form class="col s12">
      <div class="row">
        <div class="input-field col s12">
          <textarea id="textarea1" class="materialize-textarea"> Enter your message here</textarea>
          <label for="textarea1"> Message </label>
        </div>
      </div>
    </form>
  </div>
   
   <a href="https://play.google.com/store/apps/details?id=com.edu.emgs&hl=en"><Button class="center waves-effect waves-light btn-large grey darken-4"> Submit Form </Button></a>   
</div>


@stop