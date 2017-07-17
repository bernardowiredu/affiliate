@extends('layout.dashboard')


@section('header')

<img src="../public/img/edit_profile.png" > Profile

@stop




@section('content')
<div class="">
<form class="form-horizontal">

@include('common.notification')

 <h4 class="yellow move movedown">Change Profile</h4>
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
    <div class="col-sm-9">
      <input type="email" class="form-control" id="inputEmail3" value="bernardkissi18@gmail.com" placeholder="Email">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Username</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" id="inputPassword3" value="Testing" placeholder="Password">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Phone</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" id="inputPassword3" value="0503214360" placeholder="Password">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Country</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" id="inputPassword3" value="Ghana" placeholder="Password" disabled>
    </div>
  </div>
 

  <h4 class="yellow move">Change Password</h4>
  <div class="form-group">

    <label for="inputPassword3" class="col-sm-2 control-label">Old Password</label>
    <div class="col-sm-9">
      <input type="password" class="form-control" id="inputPassword3"  value="" placeholder="old Password">
    </div>
  </div>
   <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label"> Password</label>
    <div class="col-sm-9">
      <input type="password" class="form-control" id="inputPassword3" value="" placeholder="Password">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label"> Password</label>
    <div class="col-sm-9">
      <input type="password" class="form-control" id="inputPassword3" value="" placeholder="Password">
    </div>
  </div>
  	<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-success"><i class="glyphicon glyphicon-user"></i> Update profile</button>
    </div>
  </div>
  <br>
</form>
</div>
@stop