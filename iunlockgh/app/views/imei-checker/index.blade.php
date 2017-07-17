@extends('layout.main')


@section('header')

<i>IMEI checker</i>

@stop




@section('content')
<bR>
<img src="img/imei-checker.png">
<h4 class="yellow"><b><i>IMEI Checker – Check Carrier, Lock Status and Firmware, Model name....</i></b></h4>

IMEI checking service is to check info like carrier name, lock status, model name, Serial, iOS firmware, ICCID, Activation status and some other details. 

Details will be sent to you via Email. Delivery Time 1-30 minutes .

 <h4 class="yellow"><b><i>Product Description</i></b></h4>

This service is also extremely helpful if you intend to use our IMEI based iPhone factory unlocking service but before ordering you would want to make sure that your phone is locked to a carrier.

After buying our service, we’ll send you detailed info about your device via Email. Here’s an example.
<ul class="nav">

<li>1. MODEL: iPhone 4S 16GB BLACK</li> 
<li>2. IMEI: 0130XXXXXXXXXXX</li> 
<li>3. SERIAL: DNQGQXXXXXXX</li>
<li>4. iOS: 5.0.1 </li>
<li>5. MAC Address: 3CD0F8XXXXXX </li>
<li>6. ICCID:8901410225551XXXXXX</li>
<li>7. Last Restored: 2012-12-18 </li>
<li>8. Network Unlocked: False </li>
<li>9. Activation Status: Yes</li>
<li>10. Activation Date: 2011-11-26 </li>
<li>11. Activated Carrier: AT&T – United States USA </li>
<li>12. Original Carrier: AT&T USA<li>
<li>13. Applied Policy Id: 23 – AT&T USA <li>
<li>14. Next Policy Id: 23 – AT&T USA(PH) <li>
<li>15. Telephone Technical Support: No phone support (Expired)(HW)</li>
<li>16. Repairs & Service Coverage: Out of Warranty (Expired) <li>
</ul>

<p>How to Find iPhone IMEI Number?
You can find it by typing <b class="yellow">*#06#</b> on Keypad. Alternatively, you can check it on SIM tray. </p>

<br>
<div class="col-sm-6 col-md-7 line3 cbck">
<h4 class="yellow"><b>To check your IMEI, fill the form below now:</b></h4>

{{Form::open(array('url'=>'order', 'method'=>'POST'))}}
<label>Enter a valid IMEI number<i class="text-danger"> **</i></label>
<input type="text" class="form-control" placeholder="Enter your IMEI" name="imei">

<label>Telephone</label>
<p><input type="text" class="form-control" placeholder="Enter your telephone number" value="" name="order_contact"></p>
<input type="hidden" class="form-control"  value="Imei checker" name="product_name">
<input type="hidden" class="form-control" value="" name="email">
<input type="hidden" class="form-control" value="15" name="price">

<input type="hidden" class="form-control" value="15-20 minutes" name="delivery">
<input type="hidden" class="form-control" value="IMEI" name="network_name">
<p></p>


<p>Price:<b class="red"> GH₵15.00</h4></b>
<p>Delivery Time: 1-20 minutes  </p>
<p>Delivery Method: <i class="glyphicon glyphicon-envelope blue"></i> Email </p>
<p></p>


<p><button class="btn btn-warning"><i class="glyphicon glyphicon-phone"></i> Check Phone Status</button></p>
</div>
<p></p>
{{Form::close()}}
<!-- <div class="col-sm-3 col-md-3 ">
<p><b class="yellow">Price: GH₵15.00</h4></b>
<p>Delivery Time: 1-20 minutes  </p>
<p>Delivery Method: <i class="glyphicon glyphicon-envelope blue"></i> Email </p>
<br>


</div> -->
<br>
@stop