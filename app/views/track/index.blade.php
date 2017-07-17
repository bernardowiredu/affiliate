@extends('layout.default')

@section('name')

<span class="white-text"> Track your application </span>

@stop

@section ('content')


<div class="container">
<div class="section">



<p class="light"> Because we provide transparency in all our processes, therefore will advice students to download the EMGS App from the PlayStore to view the live progress of their visa application to keep them updated once there is update on their visa application</p>
<p> <b class="blue-text darken-1">Please Note:</b> Your Visa Application Fee is <b class="blue-text darken-1">2100 MYR = 520 USD</b></p>
<div class="divider z-depth-3"></div>
<br>
<div class="row">
 <div class="col l4 s6">
 	<img class="responsive-img z-depth-3" src="../public/images/status.jpg" width="220" height="400">
 	<p class="left light"> 1. View your Visa Application as and when is updated by the malaysia immigration. </p>
 </div>
 <div class="col l4 s6">
 	<img class="responsive-img z-depth-3" src="../public/images/pending.jpg" width="220" height="400">
 	<p class="left light"> 2. Watch progress of your application as when is been updated by immigration . <b class="blue-text darken-1">NB</b> Visa is issued at 60% </p>
 </div>
 <div class="col l4 s6">
 	<img class="responsive-img z-depth-3"  src="../public/images/screen.jpg" width="220" height="400">
 <p class="left light">3. You can access a wide variety of information about your application once proceed with us to visa processing stage </p>
 </div>

 	
<a href="https://educationmalaysia.gov.my/index.php/emgs/application/searchForm/"><Button class="center waves-effect waves-light btn-large grey darken-4">Track on Website </Button></a> 

<a href="https://play.google.com/store/apps/details?id=com.edu.emgs&hl=en"><Button class="center waves-effect waves-light btn-large grey darken-4">Download EMGS App </Button></a> 

 </div>
</div>	
</div>



@stop