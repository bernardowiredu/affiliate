@extends('layout.holder')


@section('content')

<br>

<div class="nav">
<div class="col-sm-1 col-md-2 push">
	<img src="img/lock.png" class="img-responsive">
 
	<h4 class="" > Call  <i class="glyphicon glyphicon-earphone yellow"></i> 0503214360</h4>
  
</div>

<div class="col-sm-6 col-md-7 line2 push">

@include('common.notification')

{{ Form::open(array('url' => 'forgotten-password', 'method'=>'POST')) }}

<div class="animatedParent" data-sequence="100">
<h1 class="yellow animated bounceInLeft txt-shadow" data-id='1'>Forgot your password?</h1>
<p>Not to worry. Just enter your email address below and we'll send you an instruction email for recovery.</p>
</div>
<label for="inputPassword" class="sr-only">Password</label>
<input type="text" id="inputPassword" class="form-control" name="email" placeholder="Enter email address eg. username@gmail.com" required><p></p>
<button class="btn  btn-success" type="submit">Resend Account Details</button>
</div>
</div>
{{Form::close()}}
<br><br>
<div class="nav">
<footer class="bgn text-center">
      <div class="inline">
        <p>Copyright &copy; 2015 iunlockgh.com all rights reserved. <a href="">Terms and conditions</a>
        <ul class="nav">
        </ul>
        </p>
      </div>
      </div>
    </footer>	


</div>


@stop

<script src="../public/js/jquery-1.8.2.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="../public/js/css3-animate.js"></script>