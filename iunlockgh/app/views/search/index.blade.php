@extends('layout.products')


@section('header')
Search results

@stop



@section('content')
<br>
<div class="nav">
<div class="well well-sms">
<h2 class="text-center"><img src="../public/img/zoom_out.png"> Search result(s) for "iphone5"</h2>
</div>
<div class="col-xs-6 col-md-3 ">
 <a href="#" class="thumbnail mf">
      <img src="img/iphone6-plus.jpg" alt="product" width="100" height="70">
    </a>
    <div class="caption me2">
    <p class="text-center"><a class="whyt" href="{{URL::to('')}}"><spans>trial</span></a></p>
   </div>
</div>

</div>
@stop