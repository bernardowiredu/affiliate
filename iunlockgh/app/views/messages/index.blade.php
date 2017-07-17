@extends('layout.dashboard')


@section('header')

<img src="../public/img/folder_conflicted.png"> Messages

@stop



@section('content')

@include('common.notification')

 <div class="tabbable me"> 
        <ul class="nav nav-tabs well well-sm">
        <li class="active"><a class="yellow" href="#tab1" data-toggle="tab"><i class="icon-arrow-down"></i> Inbox <span class="label label-info"> 23</span></a></li>
        <li><a class="yellow" href="#tab2" data-toggle="tab"> <i class="icon-envelope"></i> Send Messages</a></li>
    </ul>
    <div class="tab-content ">
    <div class="tab-pane active" id="tab1">
        <p><table class="table table-striped mb">
     <thead>
        <tr>
            <th><i class="icon-envelope"></i> Inbox</th>
            <th class="text-center"> <i class="icon-cog"></i></th>
            
        </tr>
     </thead>
    
     <tbody>
        <tr>
            <td class="">
            This service is also extremely helpful if you intend to use our IMEI based iPhone factory unlocking service but before ordering you would want to make sure that your phone is locked to a carrier. After buying our service, we’ll send you detailed info about your device via Email. Here’s an example. 
            <hr>
           <p><i class="glyphicon glyphicon-dashboard"></i>: <b>2015-09-98</b> <span class="navy2">|</span> <i class="icon-share-alt"></i><b> customer service</b> </p>
            <div id="collapse1" class="panel-collapse collapse"> 
            <div class="panel-body span4">
                {{Form::open(array('url'=>'contacts', 'method'=>'POST'))}}
                <input type="hidden" class="input-xlarge" name="title" value="Reply to message"> 
                <input type="hidden" class="input-xlarge" name="email" value="">
                <input type="hidden" class="input-xlarge" name="help" value="reply">
                <textarea cols="300" name="message" rows="3"></textarea>
                <button type="submit"class="btn btn-default"> Reply</button>
                {{Form::close()}}
            
            </div>
            </div>
            </td>
            <td>
            <p><a href=""><button class="btn btn-small btn-default" onclick=" return ConfirmDelete('yes', 'no')"><i class="glyphicon glyphicon-trash"></i></button></a></p>
            <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
            <button class="btn btn-small  btn-default"><i class="glyphicon glyphicon-share-alt"></i></button></a>
            </td>
            </tr>
     </tbody>
     <tbody>
        <tr>
            <td class="">
            This service is also extremely helpful if you intend to use our IMEI based iPhone factory unlocking service but before ordering you would want to make sure that your phone is locked to a carrier. After buying our service, we’ll send you detailed info about your device via Email. Here’s an example. 
            <hr>
           <p><i class="glyphicon glyphicon-dashboard"></i>: <b>2015-09-98</b> <span class="navy2">|</span> <i class="icon-share-alt"></i><b> customer service</b> </p>
            <div id="collapse1" class="panel-collapse collapse"> 
            <div class="panel-body span4">
                {{Form::open(array('url'=>'contacts', 'method'=>'POST'))}}
                <input type="hidden" class="input-xlarge" name="title" value="Reply to message"> 
                <input type="hidden" class="input-xlarge" name="email" value="">
                <input type="hidden" class="input-xlarge" name="help" value="reply">
                <textarea cols="300" name="message" rows="3"></textarea>
                <button type="submit"class="btn btn-default"> Reply</button>
                {{Form::close()}}
            
            </div>
            </div>
            </td>
            <td>
            <p><a href=""><button class="btn btn-small  btn-default" onclick=" return ConfirmDelete('yes', 'no')"><i class=" glyphicon glyphicon-trash"></i></button></a></p>
            <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
            <button class="btn btn-small  btn-default"><i class="glyphicon glyphicon-share-alt"></i></button></a>
            </td>
            </tr>
     </tbody>
    
     </table>

      <div class="pagination pagination-right">
            
     </div>

        </p>
    </div>
    </div>
    </div>
@stop