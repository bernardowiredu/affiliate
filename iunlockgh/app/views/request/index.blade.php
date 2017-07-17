@extends('layout.main')



@section('header')

Request Phone unlock

@stop



@section('content')

<br>
<img src="img/mobile_phone.png"><img src="img/nx.png" class="hidden-xs"><img src="img/folder_modified.png" class="hidden-xs">
<h4 class="yellow"><b><i>Request unlocker – Select phone ,Carrier, and IMEI number..</i></b></h4>

Request Unlocker aids customers who can not find their phone models in our unlocking list to send us a phone unlock request and 

we will further search for the model in our database  and contact customer through mail or contact to send unlocking details of that particular model.


 <h4 class="yellow"><b><i>Request Phone unlocking process</i></b></h4>

 <ul class="nav">
 <li>1. Select Phone Manufacturer of the phone you requesting for unlocking.</li>
 <li>2. Enter the model of the phone eg. <b class="yellow">iphone 5s, samsung galaxy S2 GT i9100, blackberry 8520 Curve.</b></li>
 <li>3. Enter the carrier the phone is locked to  eg. <b class="yellow">AT&T, Verison, Movistar.</b></li>
 <li>4. Enter phone's IMEI number <b class="yellow">usually a 15 digits number or dial *#06# to get Imei number.</b></li>	
 <li>5. Enter your mobile number or Email through which you can be contacted.</b></li>

 </ul>

<br>
<div class="col-xs-10 col-md-10 me">
<h4 class="yellow"><b><i>To check your IMEI, fill the form below now:</i></b></h4>

<label>Select Manufacturer</label>
<select class="form-control">
   <option>Acatel</option>
   <option>Apple</option>
   <option>Azumi</option>
   <option>Blackberry</option>
   <option>Dell</option>
   <option>Doro</option>
   <option>Emporia</option>
   <option>Huawei</option>
   <option>HTC</option>
   <option>LG</option>
   <option>Microsoft</option>
   <option>Motorola</option>
   <option>Nokia</option>
   <option>Sony</option>
   <option>ZTE</option>
</select>
<p></p>

<label>Enter Phone model<i class="text-danger"> **</i></label>
<input type="text" class="form-control" placeholder="eg. iphone 5s, samsung galaxy S2 GT i9100, blackberry 8520 Curve" required>
<p></p>

<label>Enter carrier locked to<i class="text-danger"> **</i></label>
<input type="text" class="form-control" placeholder="eg. AT&T, Verison, Movistar" required>
<p></p>

<label>Enter your IMEI number<i class="text-danger"> ** 15 digits</i></label>
<input type="text" class="form-control" placeholder="dial *#06# to get Imei number." required>
<p></p>

<label>Enter your phone number or email<i class="text-danger"> **</i></label>
<input type="text" class="form-control" placeholder="eg.0545343660" required>
<p></p>

<p><input type="checkbox" required> I have read and accepted terms and conditions</p>

<p><button class="btn btn-success"><i class="glyphicon glyphicon-phone"></i> Request unlock</button></p>


</div>

@stop