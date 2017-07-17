@if(Session::has('success'))

<div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong><i class="glyphicon glyphicon-ok-sign"></i><b> Success!</b></strong> {{ Session::get('success') }}
</div>

 @elseif(Session::has('error'))

 <div class="alert alert-danger alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong><i class="glyphicon glyphicon-remove-sign"></i><b> Failed!</b></strong> {{ Session::get('error') }}
</div>

@elseif(Session::has('message'))

<div class="alert alert-warning alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong><i class="glyphicon glyphicon-warning-sign"></i> Warning!</strong>  {{ Session::get('message') }}
</div>


@elseif(Session::has('eror'))

<div class="alert alert-danger alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong><i class="glyphicon glyphicon-warning-sign"></i> Registration failed!!!</strong>  
	@if($errors->has())
		<div id="form-errors2">
			<p>The following errors have occurred:</p>

			<ul>
				@foreach($errors->all() as $error)
					<li>{{ $error }}</li>
				@endforeach
			</ul>
		</div><!-- end form-errors -->
		@endif
	</div>
@elseif(Session::has('complete'))

<div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong><h1><i class="glyphicon glyphicon-ok-sign"></i><b> Success! Payment complete</b><h1></strong> {{ Session::get('complete') }}
</div>


@endif
