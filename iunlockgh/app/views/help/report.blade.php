@extends('layout.dashboard')



@section('header')

<i class="glyphicon glyphicon-send yellow"></i><span class="txt-shadow"> Report</span> 


@stop



@section('content')
<div class="col-sm-5 col-md-5 well well-sm away cbck">
<div class="page-header">
<h3 class="txt-shadow">Contact us</h3>
</div>
<p>For customer service please call us: <b>0501366026</b>,
<b>0244072639</b></p>
<br>
<p>Alternatively, you can contact customer service by email.</p>
<hr>
<p> For order related inquiries, please call our helpline <b>0503214360</b> for assistance .</p>
</div>
<p></p>
<div class="col-sm-7 col-md-6 well well-lg cbck ">

@include('common.notification')


<h4 class="txt-shadow"><b>Send a report to our customer service</b></h4>

<label>Enter your email address</label>
<input type="text" class="form-control" placeholder="eg. james@gmail.com" required>
<p></p>


<label>Enter report title</label>
<input type="text" class="form-control" placeholder="eg. I have not recieved my unlocking code" required>
<p></p>
<label>Select Report Type</label>
<select class="form-control">
   <option>Delay in unlock code</option>
   <option>Cant </option>
   <option>Azumi</option>
   <option>Blackberry</option>
   <option>Dell</option>
   <option>Doro</option>
   <option>Emporia</option>
  
</select>
<p></p>

<label>Enter report description<i class="text-danger"> **</i></label>
<textarea class="form-control" cols="3" rows="10" placeholder="Write Report details"></textarea>
<p></p>

<p><button class="btn btn-warning"><i class="glyphicon glyphicon-send"></i> Send Report</button></p>

<br><br>
</div>


@stop